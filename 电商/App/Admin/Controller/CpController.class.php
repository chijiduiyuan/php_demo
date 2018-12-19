<?php
namespace Admin\Controller;
use Think\Controller;
class CpController extends Controller{
     public function cplist(){
        $this->cp_type=M('cp_type')->select();

        if(empty($_GET['typeid'])){
        $this->list=M('cp')->select();
         }else{
        $this->list=M('cp')->where('cp_type='.$_GET['typeid'])->select();
             }


        $this->display();

     }

   public function cp_add(){
    $list=M('cp_type')->select();
    $this->list=$list;
    $this->display();
   }


   public function cp_check(){
 
      $mm=M('cp'); 
      $pic=upload('cp');//获取产品图片
      $cppic=$pic[0];
      $spic=$pic[1];
      $mm->create();
      $mm->cppic=$cppic;
      $mm->spic=$spic;
      $cpid=$mm->add();
      if($cpid){
         $this->success('产品添加成功',U('Cp/cp_add'),3);
      }else{echo "添加失败";}
    }


    public function cp_modi(){
         $cpid=I('get.cpid');
         $this->cplist=M('cp')->find($cpid);
         $list=M('cp_type')->select();
         $this->list=$list;
         $this->display();
    }

   //产品修改
   public function cp_modi_check(){
    $mm=M('cp');
    $mm->create();
    //判断上传的图片的个数
    $pic=$_FILES['cppic'];
    if(empty($pic['name'][0]) && empty($pic['name'][1])){}
    elseif(!empty($pic['name'][0]) && !empty($pic['name'][1])){
      //删除之前的图片
      unlink('./Uploads/'.I('post.cppic'));
      unlink('./Uploads/'.I('post.spic'));
      $newpic=upload('cp');
      $mm->cppic=$newpic[0];
      $mm->spic=$newpic[1];
     }
    else{exit('只上传了一张图片');}
     $mm->save();
     $this->success('修改成功',U('Cp/cplist'),3);
   }


 }
