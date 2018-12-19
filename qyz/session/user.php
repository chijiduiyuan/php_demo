<?php
 session_start();
 echo "<meta charset='utf8'/>";

 if(isset($_SESSION['username'])){
 	echo "欢迎".$_SESSION['username'].'<br>';
 	echo "<a href='loginout.php'>退出</a>";
 }else{
 	echo "你没有登录";
 	echo "<a href='login.php'>登录</a>";
 }
 
?>