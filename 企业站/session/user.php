<?php
   session_start(); 
   if(!empty($_SESSION['username'])){
     echo '欢迎'.$_SESSION['username'].'光临网站';
     echo "<a href='loginout.php'>退出</a>";
   }else{
   	echo "你没有登录";
   	echo "<a href='login.php'>请登录</a>";
   }
?>