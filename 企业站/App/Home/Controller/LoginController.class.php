<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller{

     public function index(){

      $this->display('Login/login');
      }

    //验证码方法
     public function very(){
    $config = array(
    'fontSize'    =>    20,    // 验证码字体大小
    'length'      =>    4,     // 验证码位数
    'useNoise'    =>    false, // 关闭验证码杂点
     'useCurve'  =>  false,            // 是否画混淆曲线
     'imageH'    => 48,               // 验证码图片高度
     'imageW'    =>140,               // 验证码图片宽度
);
    $Verify = new \Think\Verify($config);

    $Verify->entry();
     }

   //检测验证码
   public function check(){
   	header("content-type:text/html;charset=utf-8");
        $very=I('post.code');
        $username=I('post.username');
        $pwd=I('post.pwd');
        $data['username']=$username;
        $data['pwd']=md5($pwd);
        $arr=M('register')->where($data)->find();

        $verify = new \Think\Verify();
        $rel=$verify->check($very);
        if($rel){//先判断验证码
            if($arr['id']){ //再来判断用户密码
         $_SESSION['register']=$arr['username'];
         $_SESSION['id']=$arr['id'];
         $_SESSION['pic']=$arr['pic'];
              $this->success('登录成功',U('Index/index'),3);
            }else{

              $this->error('帐号或者密码错误');
            }

          }

        else{$this->error('验证码错误');}
    }

     //退出登录 
     public function loginout(){
           session('register',null);
           session('id',null);
           session('pic',null);
           $this->success('退出成功',U('Login/index'),3);
     }

  public function reg(){
    $this->display();
  }

   public function register_check(){
      $User=D('Register');
      if (!$User->create()){
     // 如果创建失败 表示验证没有通过 输出错误提示信息
     //exit($User->getError());
    foreach($User->getError() as $val){
         echo "<font color=red>".$val."</font><br/>";
     }

     }else{
     //验证通过 可以进行其他数据操作
        $User->create();
        $User->shijian=date('Y-m-d H:i:s');
        $User->add();
        $this->success('注册成功',U('Login/index'),2);
      }
      }

   public function person(){
         
         $this->display();
      }

  public function p_check(){
          $pic=upload('person');
          $data['pic']=$pic[0];
          $data['id']=session('id');
          M('register')->save($data); 

  }
  }










