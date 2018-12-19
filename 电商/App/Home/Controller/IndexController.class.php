<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends ConfigController{
    //首页产品的输出
    public function index(){
      $this->list=M('cp')->select();
      $this->display();
    }

    //详情页面的输出
    public function details(){
      $cpid=I('get.cpid','0',intval);
      $this->clist=M('cp')->find($cpid);
      $this->display();
    }
   
    //导入自己的类
       public function bb(){
       	   //导入自己写的类
           import('Home.class.UserList');
           $cc=new \User;//要实例
           $cc->hh();
       }
   //模型
       public function dd(){        
       	 //实例化模型
        //$user=new \Home\Model\NewsModel();
        $user=D('User'); //用D方法实例化模型类NewsModel
          $rel=$user->buy(36);
          var_dump($rel);
        }

     //退出session
     public function loginout(){
       session('register',null);
       //unset($_SESSION['username']);
       $this->success('退出成功',U('Index/index'),3);
      }
   
}