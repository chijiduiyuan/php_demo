<?php
 namespace Home\Model;
 use Think\Model;
 class NewsModel extends Model{
 	public function buy($newsid){
 		$aa['num']=4;
 		$aa['title']='女士服装';
 		$aa['price']=40;
 		$aa['newsid']=$newsid;
 		return $aa;
 	}
 }









?>