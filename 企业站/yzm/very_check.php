<?php
session_start();
 $code=md5($_POST['code']);


  if($_SESSION['very']==$code){
      echo "验证码正确";
  }else{
  	  echo "验证码错误";
  }








?>