<?php
  $file=$_FILES['pic'];


  //var_dump($file);
  if(empty($file['name'])){
      echo "对不起上传文件不能为空";
      exit;
      //header('refresh:3,url=file.html');
   }
    $rel=explode('.',$file['name']); 
    $hz=array_pop($rel);	
    //echo $hz;
  //第二步
  //只能上传gif,jpg,png
   $arr=array('gif','jpg','png');
   if(!in_array($hz,$arr)){
      echo '对不起扩展名只能为gif,jpg,png的文件';
      exit;
   }
  //第三步
  //判断文件的大小
        if($file['size']>200*1024){
       	echo '只能上传最大为200kb的文件';
       	exit;
       }
//第四步复制文件并且改文件名
//要保存的目录下面的文件名字
 $dir='./uploads/'.date('YmdHis').mt_rand(1000,9999).'.'.$hz;   
 //$dir='.uploads/201707074444.jpg';
 //临时文件
 $tmp=$file['tmp_name'];
 if(move_uploaded_file($tmp, $dir)){
 	echo "上传成功";
 }

?>