<?php
require_once("./functions.php");
echo "<meta charset='utf8'/>";
@date_default_timezone_set('PRC');
 $tomail=$_POST['tomail'];
 $title=$_POST['title'];
 $tel=$_POST['tel'];
 $content=$_POST['content']."<br/>手机号码:".$tel."<br/>时间:".date('Y-m-d:H:i:s');
foreach($tomail as $val){
$flag = sendMail($val,$title,$content);
}

if($flag){
    echo "发送邮件成功！";
    header('refresh:3;url=index.php');
}else{  
    echo "发送邮件失败！";
}
?>