<?php
namespace Home\Controller;
use Think\Controller;
class CpController extends ConfigController{

	//产品页面
	public function product(){

		if(empty($_GET['typeid'])){ //第一次默认第一条产品类型
			$aa=M('cp_type')->limit(1)->select();
			$typeid=$aa[0]['typeid'];
		}else{$typeid=I('get.typeid');}
		
		//判断分页参数
		if(empty($_GET['p'])){$p=1;} //第一次默认第一页
		else{$p=$_GET['p'];}
		$aa=M('cp_type')->find($typeid);
		$name=$aa['name'];// 产品类型名称

		//分页处理
		$count=M('cp')->where('cp_type='.$typeid)->count(); //产品总数
		$Page=new \Think\Page($count,2); //实例化分页
        $Page->parameter['typeid']=urlencode($typeid); //加传参参数
		$show=$Page->show();

		$list=M('cp')->where('cp_type='.$typeid)->page($p.',2')->select();
		$this->assign('name',$name);
		$this->assign('page',$show);
		$this->assign('list',$list);
		$this->display();
	}
}