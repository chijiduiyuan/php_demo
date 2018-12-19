<?php
namespace Admin\Controller;
use Think\Controller;
class CpController extends Controller{

	//产品列表
	public function cplist(){
		$this->cp_type=M('cp_type')->select();

		if(empty($_GET['typeid'])){
			$this->list=M('cp')->select();
		}else{
			$this->list=M('cp')->where('cp_type='.$_GET['typeid'])->select();
		}
		$this->display();
	}

	//产品添加
	public function cp_add(){
		$list=M('cp_type')->select();
		$this->list=$list;
		$this->display();
	}

	//产品添加检测
	public function cp_check(){
      $mm=M('cp'); 
      $pic=upload('cp');
      $cppic=$pic[0];
      $mm->create();
      $mm->cppic=$cppic;
      $cpid=$mm->add();
      if($cpid){
         $this->success('产品添加成功',U('Cp/cp_add'),3);
      }else{echo "添加失败";}
    }











}
?>