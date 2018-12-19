<?php namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {

    public function index() {
        if (empty($_SESSION['userid'])) {
            $this->redirect('Index/login');
        }
        $this->display();
    }

    //配置修改
    public function config() {

        $this->list = M('config')->find(1);
        $this->display();
    }

    //修改配置信息
    public function config_check() {
        $mm = M('config');
        $mm->create();
        $mm->id = 1;
        $mm->access_token = ''; //调用接口凭据
        $mm->expires_in = 0; //失效时间,过期
        $mm->save();
        $this->success('修改成功', U('Index/config'), 3);
    }

    public function login() {
        $this->display('Index/login');
    }

    //验证码方法
    public function very() {
        $config = array(
            'fontSize' => 20, // 验证码字体大小
            'length' => 1, // 验证码位数
            'useNoise' => false, // 关闭验证码杂点
            'useCurve' => false, // 是否画混淆曲线
            'imageH' => 48, // 验证码图片高度
            'imageW' => 140, // 验证码图片宽度
        );
        $Verify = new \Think\Verify($config);
        $Verify->fontttf = '5.ttf'; //导入中文字体
        $Verify->useZh = true; //开户中文验证码

        $Verify->entry();
    }

    //登录检测
    public function login_check() {
        $data['username'] = I('post.username');
        $data['pwd'] = md5(I('post.pwd'));
        $code = I('post.code');
        $arr = M('user')->where($data)->find();
        $very = new \Think\Verify();
        $rel = $very->check($code);

        if ($rel) {//先判断验证码
            if ($arr['userid']) { //再来判断用户密码
                $_SESSION['username'] = $arr['username'];
                $_SESSION['userid'] = $arr['userid'];
                $this->success('登录成功', U('Index/index'), 3);
            } else {
                $this->error('帐号或者密码错误');
            }
        } else {
            $this->error('验证码错误');
        }
    }

    //登录退出
    public function loginout() {
        session('username', null);
        session('userid', null);
        $this->success('退出成功', U('Index/login'), 3);
    }

    //ajax检测用户名
    public function ajax_user() {
        $data['username'] = I('post.username');
        $arr = M('user')->where($data)->find();
        $user['info'] = 0;
        $user['info'] = $arr['userid'] ? 1 : 0; //三元表达式
        $this->ajaxReturn($user, 'json');
    }

    public function about() {
        $id = I('get.id');
        $this->list = M('about')->find($id);
        $this->display();
    }

    public function about_check() {
        $data['id'] = I('post.id');
        $data['content'] = I('post.content');
        M('about')->save($data);
        $this->success('修改成功', U('Index/about', array('id' => $data['id'])), 3);
    }
}