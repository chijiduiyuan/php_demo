<?php
 function very($num=4,$very_str='1afbcdeg2hij3k4l5mn6opqr7s8t9uvwxy0z'){
 session_start();
 $mm=imagecreate(160,50); //创建一个画布大小
 //$m2=imagecreate(180,60);
 imagecolorallocate($mm,0,0,0);//给画面填充一个颜色
//创建白色的颜色
$white=imagecolorallocate($mm,255,255,255);
imageline($mm,0,0,160,50,$white);    //画直线
//imageline($mm,0,50,160,0,$white);
//imageline($mm,80,0,80,50,$white);
//imageline($mm,0,25,160,25,$white);

 /* for($j=1;$j<10;$j++){
   imagearc($mm,$j*3+mt_rand(0,70),10,5*$j+mt_rand(0,50),10,3,100,$white);    //绘制弧线
      } */
//imagerectangle($mm,100,30,108,38,$white); 

//创建300个杂点
for($i=0;$i<300;$i++){
$color=imagecolorallocate($mm,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));//创建一个颜色	
imagesetpixel($mm,mt_rand(0,160),mt_rand(0,50),$color);
}

$str=$very_str;
$len=mb_strlen($str,'utf-8');
//填充字
  $sum="";
  for($i=1;$i<=$num;$i++){  
    $n=mt_rand(0,$len-1);
    $aa=mb_substr($str,$n,1);
    $sum.=$aa;
  imagestring($mm,5,20*$i+mt_rand(0,20),20,$aa,$white);
}
   $_SESSION['very']=md5($sum);//用session保留验证码值

 header("Content-type: image/png");//输出png图像输出字符
 //输出图片到页面
 imagepng($mm);
 //清除资源
 imagedestroy($mm);
}
?>