<?php
 namespace Home\Controller;
 use Think\Controller;
 class LoginController extends Controller{
     public function index(){
        $this->display('Login/index');
     }

    //验证码方法
     public function very(){
        $config = array(
        'fontSize'   =>  20,
        'length'      =>    4,     // 验证码位数
        'useCurve'  =>  false,            // 是否画混淆曲线
        'imageH'    => 50,               // 验证码图片高度
        'imageW'    =>140,               // 验证码图片宽度
        );
        ob_clean(); //丢弃输出缓冲区中的内容
     $Verify = new \Think\Verify($config);
     $Verify->entry();
     }

   //检测验证码
   public function session(){
        header("content-type:text/html;charset=utf-8");
        $username=I('post.username');
        $pwd=I('post.pwd');
        $code=I('post.code');
        $data['username']=$username;
        $data['pwd']=md5($pwd);
        $arr=M('register')->where($data)->find();

        $verify = new \Think\Verify();
        $rel=$verify->check($code);
        if($rel){//先判断验证码
            if($arr['id']){ //再来判断用户密码
            $_SESSION['register']=$arr['username'];
            $_SESSION['id']=$arr['id'];
            $_SESSION['pic']=$arr['pic'];
              $this->success('登录成功',U('Index/index'),3);
            }else{
              $this->error('帐号或者密码错误');
            }
        }else{$this->error('验证码错误');}
    }

     //退出登录 
     public function loginout(){
           session('register',null);
           session('id',null);
           session('pic',null);
           $this->success('退出成功',U('Index/index'),3);

     }

     //注册页面
     public function reg(){
        $this->display();
     }

     //注册检测页面
     public function register_check(){
        header("content-type:text/html;charset=utf-8");
        $User=D('Register');
        if(!$User->create()){
            //如果创建失败，表示验证没有通过，输出错误提示信息
            foreach ($User->getError() as $val) {
                echo "<font color=red>".$val."</font><br/>";
            }
        }else{
            $User->create();
            $User->shijian=date('Y-m-d H:i:s');
            $User->add();
            $this->success('注册成功',U('Login/login'),2);
        }
     }


    //头像页面
    public function person(){
        $this->display();
    }

    //头像验证
    public function person_check(){
        $pic=upload('person');
        $data['pic']=$pic[0];
        $data['id']=session('id');
        M('register')->save($data);
        $this->success('上传成功',U('Index/index'),1);
    }









  }
?>