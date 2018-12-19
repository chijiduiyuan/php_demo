<?php
 namespace Admin\Controller;
 use Think\Controller;
 echo "<meta charset='utf8'/>";
 class IndexController extends Controller{
    //后台首页
    public function index(){
        if(empty($_SESSION['userid'])){ //没有登录的情况下跳转到登录页面
            $this->redirect('Index/login');    
        }
        $this->display();
    }

    //网站配置修改
    public function config(){
      $this->list=M('config')->find(1);
      $this->display();
    }

    //修改配置信息检测
    public function config_check(){
      $mm=M('config');
      $mm->create();
      $mm->id=1;
      $mm->save();
      $this->success('修改成功',U('Index/config'),1);
    }

    //登录页面
 	  public function login(){
        $this->display();
    }  

    //关于我们页面
    public function about(){
      $id=I('get.id');
      $this->list=M('about')->find($id);
      $this->display();
    }

    //关于我们页面修改检测
    public function about_check(){
      $data['id']=I('post.id');
      $data['content']=I('post.content');
      M('about')->save($data);
      $this->success('修改成功',U('Index/about',array('id'=>$data['id'])),1);
    }

    //验证码方法
    public function very(){
       $config = array(
          'codeSet'   =>  '012345678',             // 验证码字符集合
          //'useZh'     =>  false,           // 使用中文验证码
          //'zhSet'     =>  '们以我到他会作时要动' //导入中文验证码  
          //'useImgBg'  =>  false,           // 使用背景图片
          'fontSize'  =>  25,              // 验证码字体大小(px)
          //'useCurve'  =>  true,            // 是否画混淆曲线
          //'useNoise'  =>  true,            // 是否添加杂点  
          'imageH'    =>  50,               // 验证码图片高度
          'imageW'    =>  150,               // 验证码图片宽度
          'length'    =>  1,               // 验证码位数
          //'fontttf'   =>  '1.ttf',              // 验证码字体，不设置随机获取
          //'bg'        =>  array(243, 251, 254),  // 背景颜色
        );
       ob_clean(); //丢弃输出缓冲区中的内容
       $Verify =     new \Think\Verify($config);
       //$Verify->fontttf = '5.ttf'; //导入中文字体
       //$Verify->useZh = true; //开户中文验证码
       $Verify->entry();
    }

  //登录检测
    public function login_check(){
       $data['username']=I('post.username');
       $data['pwd']=md5(I('post.pwd'));
       $code=I('post.code');
       $arr=M('user')->where($data)->find();
       $very=new \Think\Verify();
       $rel=$very->check($code);

    if($rel){ //先判断验证码是否正确
        if($arr['userid']){ //再判断帐号或者密码是否正确
            $_SESSION['username']=$arr['username']; //保存帐号
            $_SESSION['userid']=$arr['userid']; //保存密码
            $this->success('登录成功',U('Index/index'),3);
        }else{
            $this->error('帐号或者密码错误');
        }
    }

        else{$this->error('验证码错误');}
      }

    

   //登录退出
      public function loginout(){
         session('username',null);
         session('userid',null);
         $this->redirect('Index/login');
      }

      //登录用户名提示
      public function username_ajax(){
      $data['username']=I('post.username');
      $arr=M('user')->where($data)->find();
      $user['info']=0;
      $user['info']=$arr['userid']?1:0; //三元表达式
      $this->ajaxReturn($user,'json');
      }



 }












?>