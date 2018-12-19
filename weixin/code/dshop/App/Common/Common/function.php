<?php

//获取access_token, 接口调用凭据,使用其他接口时需要使用的(除了消息接收和回复功能),先获取备用
function getAccessToken() {
    //查询获取access
    $info = M('Config')->find(1); //==>M('Config')->where('id=1')->find()
    if ($info['expires_in'] > time()) {//没有过期,直接使用表中保存的access_token
        return $info['access_token'];
    } else {//过期了 或者 不存在, 重新获取最新的access_token
        $url = 'https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid='.$info['appid'].'&secret='.$info['secret'];
        $tmpjson = CURLSend($url); //调用自定义函数,使用curl 访问 这个地址, 获取微信输出的返回值(json格式)
        //echo $tmpjson;
        $obj = json_decode($tmpjson); //把json格式转换成对象
        //$obj->access_token;
        // $obj->expires_in;
        $data = array(
            'access_token' => $obj->access_token,
            'expires_in' => ($obj->expires_in + time()), //失效时间(7200秒)+当前时间 ,算出最终时间日期
        );
        //保存到表中
        M('Config')->where('id=1')->save($data);
        return $obj->access_token;
    }
}

//使用 CURL 传送GET、POST数据,获取结果,放到项目中
function CURLSend($url, $method = 'get', $data = '') {

    $ch = curl_init(); //初始化
    $headers = array('Accept-Charset: utf-8');
    //设置URL和相应的选项
    curl_setopt($ch, CURLOPT_URL, $url); //指定请求的URL
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, strtoupper($method)); //提交方式
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); //不验证SSL
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE); //不验证SSL
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers); //设置HTTP头字段的数组
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible;MSIE5.01;Windows NT 5.0)'); //头的字符串

    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_AUTOREFERER, 1); //自动设置header中的Referer:信息
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data); //提交数值
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //是否输出到屏幕上,true不直接输出
    $temp = curl_exec($ch); //执行并获取结果
    curl_close($ch);
    return $temp; //return 返回值
}

//自己封装的上传文件方法
function upload($dir = 'news') {
    //获取图片
    $upload = new \Think\Upload(); // 实例化上传类
    $upload->maxSize = 3145728; // 设置附件上传大小
    $upload->exts = array('jpg', 'gif', 'png', 'jpeg', 'xls', 'xlsx'); // 设置附件上传类型
    $upload->rootPath = './Uploads/'; // 设置附件上传根目录
    //$upload->saveName = array('date', 'YmdHis');//改上传文件名
    $upload->savePath = $dir . '/'; // 设置附件上传（子）目录
    // 上传文件 
    $info = $upload->upload();


    if (!$info) {// 上传错误提示错误信息
        echo $upload->getError();
        exit;
    } else {
        $arr = array();
        foreach ($info as $val) {
            $arr[] = $val['savepath'] . $val['savename'];
        }

        //var_dump($arr);
    }
    return $arr;
}

//加水印的方法

function water($arr1) {
    $image = new \Think\Image();
    $image->open($arr1)->water('./water.png', 5, 50)->save($arr1);
}

//检测用户
//注册用户名检测
function checkName($username) {
    if (!preg_match('/^[a-zA-Z_]{1}\w{3,7}$/', $username)) {
        return false;
    } else {
        return true;
    }
}

//把省市区转化成中文输出
function conv($class_id) {
    $rel = M('city')->where(array('class_id' => $class_id))->find();
    return $rel['class_name'];
}

//创建TOKEN
function creatToken() {
    $code = chr(mt_rand(0xB0, 0xF7)) . chr(mt_rand(0xA1, 0xFE)) . chr(mt_rand(0xB0, 0xF7)) . chr(mt_rand(0xA1, 0xFE)) . chr(mt_rand(0xB0, 0xF7)) . chr(mt_rand(0xA1, 0xFE));
    session('TOKEN', authcode($code));
}

//判断TOKEN
function checkToken($token) {
    if ($token == session('TOKEN')) {
        session('TOKEN', NULL);
        return TRUE;
    } else {
        return FALSE;
    }
}
/* 加密TOKEN */

function authcode($str) {
    $key = "ANDIAMON";
    $str = substr(md5($str), 8, 10);
    return md5($key . $str);
}

function isuser() {
    header("content-type:text/html;charset=utf-8");
    if (!isset($_SESSION['user'])) {
        //$this->success("对不起请登录",U('Login/index'),3);
        echo "对不起不能登录";
        header("refresh:2;url=" . U('Login/index'));
        exit;
    }
}

//算概率的函数
function getRand($proArr) {   //中奖的概率
    $data = '';
    //array('1'=>1,'2'=>2,'3'=>5)
    $proSum = array_sum($proArr); //概率数组的总概率精度  
    foreach ($proArr as $k => $v) { //概率数组循环
        //1,2,5,7,10,25,50,100,100
        $randNum = mt_rand(1, $proSum);  //       1,100   1,2,3,4,5
        if ($randNum <= $v) {
            $data = $k;
            break;
        } else {
            $proSum -= $v;
        }
    }
    unset($proArr);
    return $data;
}

function get_str($cate_Id = 0) {
    global $str;
    $data['cate_ParentId'] = $cate_Id;
    $rel = M('bg_cate')->where($data)->select();

    if (count($rel)) {//如果有子类 
        $str .= '<ul>';
        foreach ($rel as $row) {
            //循环记录集 
            $str .= "<li>" . $row['cate_id'] . "--" . $row['cate_name'] . "</li>"; //构建字符串 
            get_str($row['cate_id']); //调用get_str()，将记录集中的id参数传入函数中，继续查询下级 
        }

        $str .= '</ul>';
    }
    return $str;
}
?>