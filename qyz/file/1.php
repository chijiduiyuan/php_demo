<?php
echo "<meta charset='utf8'/>";
$file=$_FILES['pic'];
//var_dump($file);
if($file==""){echo "对不起，上传不能为空";exit;} //第一步:判断文件是否上传

$rel=explode('.', $file['name']); 
$hz=array_pop($rel); //获取文件后缀

$arr=array('jpg','png','gif');
if(!in_array($hz, $arr)){echo "只支持扩展名为jpg,png,gif的文件";exit;} //第二步:判断文件类型

if ($file['size']>200*1024){echo "只能上传200kb以内的文件";exit;} //第三步:判断文件大小

$dir='./uploads/'.date('YmdHis').mt_rand(1000,9999).'.'.$hz; //要保存的文件名
$tmp=$file['tmp_name']; //临时文件
if(move_uploaded_file($tmp,$dir)){echo "上传成功";}
?>