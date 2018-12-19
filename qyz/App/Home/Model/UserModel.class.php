<?php
 namespace Home\Model;
 use Think\Model;
 class UserModel extends Model{
 	protected $tableName='news'; //如果模型类名不是表名就要加这句话
 	public function buy($newsid){
 		$aa['num']=4;
 		$aa['title']='女士服装';
 		$aa['price']=40;
 		$aa['newsid']=$newsid;
 		return $aa;
 	}
 }



?>