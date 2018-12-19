<?php
echo "<meta charset='utf8'/>";
 session_start(); //开启session
 //echo session_id(); //加密的唯一标识码
 //$_SEESSION['username']='admin'; //保存一个值
 // echo "<pre>";
 // print_r($_SEESSION);
 $username=$_POST['username'];
 if(empty($username)){
 	echo "用户名或者密码不能为空";
 	header('refresh:3;url=login.php');
 }

 $_SESSION['username']=$username;
echo "用户登录成功,跳转中...";
header('refresh:1;url=user.php');
 

?>

