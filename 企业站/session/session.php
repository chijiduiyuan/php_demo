<?php
  session_start(); //开启session
  //echo session_id(); //产生一个唯一的id加密过的
  $username=$_POST['username'];
  if(empty($username)){
  	echo '用户名不能为空';
  	header('refresh:3;url=login.php');
  }

  $_SESSION['username']=$username; //保存一个值
  //echo "<pre>";
  //print_r($_SESSION);
   echo "用户登录成功<br/>";
   echo "<a href='user.php'>跳转...</a>";
   header('refresh:3;url=user.php')
?>

