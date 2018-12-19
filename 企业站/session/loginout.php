<?php
  session_start();
   unset($_SESSION['username']);
   session_destroy();
   header('location:user.php')//重新跳转到用户页面
?>