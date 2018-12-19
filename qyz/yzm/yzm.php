<?php
 function very($num=4,$very_str='1afbcdeg2hij3k4l5mn6opqr7s8t9uvwxy0z'){
 session_start();
 $mm=imagecreate(160,50);
 imagecolorallocate($mm,0,0,0);
 $white=imagecolorallocate($mm,255,255,255);

 //画直线
 //imageline($mm,0,25,160,25,$white);

 //绘制弧线
  for($j=1;$j<10;$j++){
   imagearc($mm,$j*3+mt_rand(0,70),10,5*$j+mt_rand(0,50),10,3,100,$white);    
      } 

 //绘制矩形
 //imagerectangle($mm,100,30,108,38,$white); 

 //绘制100个像素点
 for($i=0;$i<100;$i++){
 $color=imagecolorallocate($mm,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
 imagesetpixel($mm,mt_rand(0,160),mt_rand(0,50),$color);
 }

 //填充字
 $str=$very_str;
 $len=mb_strlen($str,'utf-8');
 $sum="";
 for($i=1;$i<=$num;$i++){  
    $n=mt_rand(0,$len-1);
    $aa=mb_substr($str,$n,1);
    $sum.=$aa;
 imagestring($mm,5,30*$i+mt_rand(0,30),20,$aa,$white);
}
  $_SESSION['very']=md5($sum);

 header("Content-type: image/png");
 imagepng($mm);
 imagedestroy($mm);
 }

?>