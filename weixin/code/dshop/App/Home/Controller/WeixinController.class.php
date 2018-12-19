<?php
/*
 * 前端微信控制器
 */
namespace Home\Controller;
use Think\Controller;
class WeixinController extends Controller {

    //这个方法URL填写在微信公众平台-->开发-->基本配置
    /*
     * 此URL作用有两个
     * 1)验证 token,开启开发模式;
     * 2)接收消息(微信服务器会把用户发送的消息(使用XML)post,发送到这个url上)
     */
    public function index() {
        //IS_GET==> $_SERVER['REQUEST_METHOD']=='GET'
        if (IS_GET) {//接入公众平台,验证token
            $signature = I('get.signature'); //微信加密签名
            $timestamp = I('get.timestamp'); //时间戳
            $nonce = I('get.nonce'); //随机数
            $echostr = I('get.echostr'); //随机字符串
            //file_put_contents('./Uploads/1.txt', $signature."\r\n".$timestamp."\r\n".$nonce."\r\n".$echostr);
            //  1）将token、timestamp、nonce三个参数进行字典序排序
            $wxConfig = M('Config')->field('token')->find(1);
            $token = $wxConfig['token']; //需要和微信公众平台 开发-->基本配置-->token 一致
            $arr = array($token, $timestamp, $nonce);
            sort($arr, SORT_STRING);
//2）将三个参数字符串拼接成一个字符串进行sha1加密
            $tmp = implode($arr);
            $str = sha1($tmp);
//3）开发者获得加密后的字符串可与signature对比，标识该请求来源于微信    ,原样输出    $echostr  
            if ($str == $signature) {
                ob_clean();
                echo $echostr;
                exit;
            } else {
                exit('token验证失败');
            }
        } else {//POST方式, 接收微信发送过来的XML数据
            // 1)接收微信推送过来的消息和事件(XML数据);
            $temXml = file_get_contents('php://input');
            // file_put_contents('./Uploads/2.txt',$temXml);
            /*
              <xml><ToUserName><![CDATA[gh_b5a911ca2961]]></ToUserName>
              <FromUserName><![CDATA[orcFMv5xuSkE1E5I4ieyY4vtm3rc]]></FromUserName>
              <CreateTime>1501638876</CreateTime>
              <MsgType><![CDATA[text]]></MsgType>
              <Content><![CDATA[111]]></Content>
              <MsgId>6449489863235722788</MsgId>
              </xml>
             */
            //2)解析XML,返回对象类型
            $obj = new \SimpleXMLElement($temXml); //PHP扩展类;  \代表根空间,顶级空间才可以使用PHP内置类
            //file_put_contents('./Uploads/2.txt', $obj->Content);
            //对象属性转换成数组保存
            foreach ($obj as $key => $v) {
                $data[$key] = strval($v);
            }
            //保存消息到自己的数据库
            if ($data['MsgType'] == 'text' || $data['MsgType'] == 'image') {//只保存文本消息和图片消息
                M('WxMsg')->add($data);
            }
            $this->reply($data);
        }
    }

    private function reply($data) {
        //判断消息类型
        if ($data['MsgType'] == 'event') {//事件消息
            switch ($data['Event']) {//事件类型
                case 'subscribe'://关注                   
                    //1)获取关注者信息,保存到用户表
                    $url = 'https://api.weixin.qq.com/cgi-bin/user/info?access_token=' . getAccessToken() . '&openid=' . $data['FromUserName'] . '&lang=zh_CN'; //获取用户基本信息接口地址
                    $tmpJson = CURLSend($url);
                    //file_put_contents('./Uploads/3.txt', $tmpJson);
                    $obj = json_decode($tmpJson);
                    //保存用户信息到用户表(用户表添加字段)
                    $UserData = array(
                        'username' => $obj->openid,
                        'pwd' => md5(time()),
                        'nickname' => $obj->nickname, //昵称
                        'headimgurl' => $obj->headimgurl, //头像
                        'reg_time' => time(), //时间
                        'status' => 1, //状态: 0 PC用户,1微信用户,2已取消关注
                    );

                    $uinfo = M('User')->where(array('username' => $obj->openid))->find();
                    if (empty($uinfo)) {//用户不存在,添加
                        M('User')->add($UserData);
                    } else {//存在,更新
                        M('User')->where(array('username' => $obj->openid))->save($UserData);
                    }
                    //2)欢迎词语
                    $xml = '<xml>
<ToUserName><![CDATA[' . $data['FromUserName'] . ']]></ToUserName>
<FromUserName><![CDATA[' . $data['ToUserName'] . ']]></FromUserName>
<CreateTime>' . time() . '</CreateTime>
<MsgType><![CDATA[text]]></MsgType>
<Content><![CDATA[欢迎关注我的公众号!!!]]></Content>
</xml>';

                    exit($xml); //结束输出
                    break;
                case 'unsubscribe'://取消关注
                    //设置用户状态
                    M('User')->where(array('username' => $data['FromUserName']))->save(array('status' => 2));

                    break;
                case 'CLICK'://点击菜单事件
                    $key = $data['EventKey']; //创建自定义菜单设置的key  
                    $this->keyword($data, $key); //处理关键字
                    break;
            }
        } else {//普通消息
            //回复消息
            $where['keyword'] = array('like', '%' . $data['Content'] . '%'); //表达式查询,模糊查询
            $info = M('WxReply')->where($where)->find();
            if ($info) {
                $xml = '<xml>
<ToUserName><![CDATA[' . $data['FromUserName'] . ']]></ToUserName>
<FromUserName><![CDATA[' . $data['ToUserName'] . ']]></FromUserName>
<CreateTime>' . time() . '</CreateTime>
<MsgType><![CDATA[text]]></MsgType>
<Content><![CDATA[' . $info['content'] . ']]></Content>
</xml>';
                exit($xml); //结束输出
            }
        }
    }

    //处理关键字
    private function keyword($data, $key = '') {
        $wxConfig = M('Config')->field('url')->find(1);
        if ($key == '最新产品') {
            $list = M('Cp')->order('cpid desc')->limit(8)->select();
            $xml = '<xml>
<ToUserName><![CDATA[' . $data['FromUserName'] . ']]></ToUserName>
<FromUserName><![CDATA[' . $data['ToUserName'] . ']]></FromUserName>
<CreateTime>' . time() . '</CreateTime>
<MsgType><![CDATA[news]]></MsgType>
<ArticleCount>' . count($list) . '</ArticleCount>
<Articles>';
            foreach ($list as $v) {
                $xml .='<item>
<Title><![CDATA[' . $v['cpname'] . ']]></Title> 
<Description><![CDATA[' . $v['cpname'] . ']]></Description>
<PicUrl><![CDATA[' . $wxConfig['url'] . 'Uploads/' . $v['cppic'] . ']]></PicUrl>
<Url><![CDATA[' . $wxConfig['url'] . 'index.php/Home/Weixin/info/id/' . $v['cpid'] . ']]></Url>
</item>';
            }
            $xml .='</Articles></xml>';

            exit($xml);
        }
    }

    //网页授权,获取用户信息,实现登录/注册功能
    public function Oauth() {
        $code = $_GET['code'];
        $wxConfig = M('Config')->field('url,appid,scope')->find(1);
        if (empty($code)) {
//1 第一步：用户同意授权，获取code
            $url = 'https://open.weixin.qq.com/connect/oauth2/authorize?appid=' . $wxConfig['appid'] . '&redirect_uri=' . urlEncode($wxConfig['url'] . 'index.php/Home/Weixin/Oauth') . '&response_type=code&scope=snsapi_userinfo&state=1111#wechat_redirect';
            redirect($url);
        } else {
//2 第二步：通过code换取网页授权access_token
            //  echo $code;
            //  echo '<br>';
            $url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=" . $wxConfig['appid'] . "&secret=" . $wxConfig['secret'] . "&code=" . $code . "&grant_type=authorization_code";
            $tmpJson = CURLSend($url); //访问URL获取数据
            $obj = json_decode($tmpJson);
            //var_dump($obj);
            $access_token = $obj->access_token;
            $openid = $obj->openid;

//3第三步：拉取用户信息(需scope为 snsapi_userinfo)
            $url = 'https://api.weixin.qq.com/sns/userinfo?access_token=' . $access_token . '&openid=' . $openid . '&lang=zh_CN';
            $tmpJson = CURLSend($url); //访问URL获取数据
            $obj = json_decode($tmpJson);
            //var_dump($obj);
            //保存用户信息到用户表(用户表添加字段)
            $UserData = array(
                'username' => $obj->openid,
                'pwd' => md5(time()),
                'nickname' => $obj->nickname, //昵称
                'headimgurl' => $obj->headimgurl, //头像
                'reg_time' => time(), //时间
                'status' => 1, //状态: 0 PC用户,1微信用户,2已取消关注
            );

            $uinfo = M('User')->where(array('username' => $obj->openid))->find();
            if (empty($uinfo)) {//用户不存在,添加
                $uid = M('User')->add($UserData);
                ///设置session保存登录状态
                $_SESSION['wxuid'] = $uid;
            } else {//存在,更新
                M('User')->where(array('username' => $obj->openid))->save($UserData);
                ///设置session保存登录状态
                $_SESSION['wxuid'] = $uinfo['userid'];
            }
            $_SESSION['openid'] = $obj->openid;
            $_SESSION['nickname'] = $obj->nickname;
            $this->redirect('Weixin/cplist');
        }
    }

//产品列表
    public function cplist() {
        if (empty($_SESSION['wxuid'])) {
            $this->redirect('Weixin/Oauth'); //没有登录跳转到授权页面实现登录
        }
        $cp = M('Cp');
        $total = $cp->count();
        $page = new \Think\Page($total, 8);
        $this->list = $cp->order('cpid desc')->limit($page->firstRow . ',' . $page->listRows)->select();

        $this->page = $page->show();

        $this->display('listcp');
    }

    //显示产品详细
    public function info() {
        $id = I('get.id', 0, 'intval');
        if (empty($_SESSION['wxuid'])) {
            $this->redirect('Weixin/Oauth'); //没有登录跳转到授权页面实现登录
        }

        $info = M('Cp')->find($id);
        if (empty($info)) {
            $this->error('产品不存在或已下架');
        }
        $this->info = $info;
        $this->display('showcp');
    }

    //保存订单信息
    public function order() {
        if (empty($_SESSION['wxuid'])) {
            $this->redirect('Weixin/Oauth'); //没有登录跳转到授权页面实现登录
        }
        $id = I('post.id', 0, 'intval');
        $name = I('post.name', '');
        $tel = I('post.tel', '');
        $addr = I('post.addr', '');
        if (empty($id) || empty($name) || empty($tel) || empty($addr)) {
            $this->error('信息错误');
        }
        if (!preg_match('/^1[34578]\d{9}$/', $tel)) {
            $this->error('手机格式错误');
        }

        $info = M('Cp')->find($id);
        if (empty($info)) {
            $this->error('产品不存在或已下架');
        }

        $data['sn'] = uniqid(date('Ymd'));
        $data['uid'] = $_SESSION['wxuid'];
        $data['total'] = $info['price'];
        $data['consignee'] = $name;
        $data['tel'] = $tel;
        $data['addr'] = $addr;
        $data['status'] = 1;
        $data['payid'] = 2; //2代表微信支付
        $data['addtime'] = time();
        $oid = M('orders')->add($data);

        $pdata = array(
            'oid' => $oid,
            'pid' => $info['cpid'],
            'uid' => $_SESSION['wxuid'],
            'title' => $info['cpname'],
            'img' => $info['cppic'],
            'price' => $info['price'],
            'number' => 1,
            'addtime' => time()
        );
        M('ordersproduct')->add($pdata);

        //调用支付接口
        header("location:/weixin/js_api_call.php?out_trade_no=" . $data['sn'] . "&subject=" . $info['cpname'] . "&total_fee=" . $info['price']); //支付接口文件放在根目录下,如果放在其他目录,需要修改跳转连接
    }
//    
//    public function test() {
//        $url = 'https://api.weixin.qq.com/cgi-bin/menu/create?access_token=' . $this->getAccessToken();
//        $data = '{
//     "button":[
//     {	
//          "type":"view",
//          "name":"商城",
//          "url":"http://user2.my-item2.com/"
//      },
//     {	
//          "type":"click",
//          "name":"今日歌曲22",
//          "key":"V1001_TODAY_MUSIC"
//      },
//      {
//           "name":"菜单22",
//           "sub_button":[
//           {	
//               "type":"view",
//               "name":"搜索",
//               "url":"http://www.soso.com/"
//            },
//            {
//               "type":"click",
//               "name":"赞一下我们",
//               "key":"V1001_GOOD"
//            }]
//       }]
// }';
//        echo CURLSend($url, 'post', $data);
//    }
}