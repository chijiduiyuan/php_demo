<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends ConfigController{
    
    public function index(){

         $this->display();

     }

    public function very(){

    $config = array(
    'fontSize'    =>    20,    // 验证码字体大小
    'length'      =>    1,     // 验证码位数
    'useNoise'    =>    false, // 关闭验证码杂点
     'useCurve'  =>  false,            // 是否画混淆曲线
     'imageH'    => 48,               // 验证码图片高度
     'imageW'    =>140,               // 验证码图片宽度
    );
    $Verify = new \Think\Verify($config);
    //$Verify->fontttf = '5.ttf'; //导入中文字体
    //$Verify->useZh = true; //开户中文验证码

    $Verify->entry();



     }



//登录检测
    public function login_check(){
       $data['username']=I('post.username');
       $data['pwd']=md5(I('post.pwd'));
       $code=I('post.code');
       $arr=M('register')->where($data)->find();
       $very=new \Think\Verify();
       $rel=$very->check($code);

    if($rel){//先判断验证码
            if($arr['id']){ //再来判断用户密码
         $_SESSION['user']=$arr['username'];
         $_SESSION['id']=$arr['id'];
              $this->success('登录成功',U('Index/index'),3);
            }else{
              $this->error('帐号或者密码错误');
            }

          }

        else{$this->error('验证码错误');}
      }


 //登录退出
      public function loginout(){
         session('user',null);
         session('id',null);
         $this->success('退出成功',U('Login/index'),3);
      }



}