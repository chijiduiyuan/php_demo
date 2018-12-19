<?php 
 //封装数据库连接
 function conn(){
 $conn=@mysql_connect('localhost','root','') or die('服务器连接失败'.mysql_error());

 //第二步连接数据库
   @mysql_select_db("aa",$conn) or die('数据库连接失败'.mysql_error());
   //设置字符集
   mysql_query('set names utf8');//转编码
   //return $conn;
}

   //查询结果集
  function query($sql){
     $rel=mysql_query($sql);
     $rr=array();
     while($row=mysql_fetch_array($rel,MYSQL_ASSOC)){
      $rr[]=$row;
      }
      //return $rr;  //返回一个二维数组
   }

?>