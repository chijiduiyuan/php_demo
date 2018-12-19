<?php
//ajax提交的页面不能用echo 输出 不能有html
include "conn.php";
$conn=conn();
$username=$_POST['username'];
$sql="select * from user where username='$username'";
$rel=mysql_query($sql);
$arr=mysql_fetch_array($rel,MYSQL_ASSOC);
$data['info']=0;
if($arr['userid']){
	$data['info']=1;
} 
echo json_encode($data); //转化数据类型










?>