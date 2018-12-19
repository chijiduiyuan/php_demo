<?php
namespace Home\Controller;
use Think\Controller;
class CpController extends ConfigController{


    public function car(){
        $cpid=I('post.cpid');
        $type=I('post.type');  
        $num=I('post.num');//获取产品数量
        //$type=1知道就是往购物车里面增加产品
         if($type==1){
           //如果购物车里面不存在这条产品信息
           if(!isset($_SESSION['car'][$cpid])){
           $list=M('cp')->find($cpid);
           $list['num']=$num;
           $_SESSION['car'][$cpid]=$list;
           }else{
           	 //购物车里面存在这条产品信息
           	$_SESSION['car'][$cpid]["num"]+=$num;
           }
          }
         //$type=2删除一条记录
         elseif($type==2){
            unset($_SESSION['car'][$cpid]);
         }
         //$type=3清空购物车
         elseif($type==3){
         unset($_SESSION['car']);
         }
        
         //$type=4减少数量
         elseif($type==4){
           $_SESSION['car'][$cpid]['num']--;
           if($_SESSION['car'][$cpid]['num']<=0){
            $_SESSION['car'][$cpid]['num']=1;
           }
          }

        //返回购物车数据
        $this->ajaxReturn($_SESSION['car'],'json');
      }

  //测试打印购物车信息  
  public function aa(){
  	  //unset($_SESSION['car']);
      echo "<pre>";
      print_r($_SESSION['car']);
  }
    //产品分类递归
   public function cp(){
          echo "<meta charset=utf-8 />";
          echo get_str(0);

   }


   public function cp_class(){
      header("content-type:text/html;charset=utf-8");

      }





    
}

