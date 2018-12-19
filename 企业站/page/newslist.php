<?php
 /* 1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16
  (1-1)*5,5
  (2-1)*5,5
  (3-1)*5,5
  (4-1)*5,5 */
   include "conn.php";
   $conn=conn();
   $sql="select *from news";
   $rel=mysql_query($sql);
   $rows=mysql_num_rows($rel);
   $page_num=2;
   $pages=ceil($rows/$page_num);
   if(empty($_GET['page'])){
    $page=1;
   }
   else{
   $page=$_GET['page'];}
   $index=($page-1)*$page_num;
   
   $pre_page=$page-1;
   if($pre_page==0){$pre_page=1;}
   $next_page=$page+1;
   if($next_page>$pages){
    $next_page=$pages;
   }

   $sql="select newsid,title,sj,type from news limit {$index},{$page_num}";
  
   $arr=query($sql);
  

?>

<!DOCTYPE html>
<html>
<head>
	<title>新闻列表页面</title>
  <style>
     .page{ display: block;float:left; width:30px; height: 30px; line-height: 30px; text-align: center; text-decoration: none; border:#ccc 1px solid; margin-top:10px; margin-right:8px;}
     .aa{ width:60px; }
     .on{ background:blue; color:#fff; }
  </style>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script>
      $(function(){
		    $("#qx").click(function(){
				   var state=$(this).prop("checked");
				   $(".ck").prop("checked",state);
				});
				
			$("#delall").click(function(){	 
			if( $(".ck:checked").length>0){
				
				var ss="";
				$(".ck:checked").each(function(){
					   ss=ss+$(this).val()+",";
					});
				 window.location.href='delall.php?newsid='+ss;	 
		  	}
		
			
			else{alert("请选择要删除的");}
				});	
				
			$(".sure").click(function(){
				    var rel=confirm('确认要删除吗');
					if(rel){return true;}
					else{return false;}
				});	
				
		  });
    </script>
</head>

<body>





<form method="post" action='delall1.php'>
<table width="1217" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td width="123" align="center">全选</td>
    <td width="151" align="center">newsid</td>
    <td width="119" align="center">分类</td>
    <td width="369" align="center">标题</td>
    <td width="110" align="center">日期</td>
    <td width="331" align="center">操作</td>
  </tr>

 <?php
   foreach($arr as $row){
 ?>

  <tr>
    <td align="center"><input type="checkbox" value="<?php echo $row['newsid'];?>" class="ck" /></td>
    <td align="center"><?php echo $row['newsid'];?></td>
    <td align="center">
    <?php 
     if($row['type']==1){echo '行业新闻';}
     elseif($row['type']==2){echo '国内新闻';}
     elseif($row['type']==3){echo '国际新闻';}
    ?>
    </td>
    <td align="center"><?php echo $row['title'];?></td>
    <td align="center"><?php echo $row['sj'];?></td>
    <td align="center"><a href='update.php?newsid=<?php echo $row['newsid']  ?>'>修改</a>/<a href='del.php?newsid=<?php echo $row['newsid'] ?>' class='sure' >删除</a></td>
  </tr>

<?php } 

 ?>

</table>

</form>
<a href="?page=1" class="page aa">首页</a>
<a href="?page=<?php echo $pre_page ;?>" class="page"><<</a>
 <?php
   for($i=1;$i<=$pages;$i++){ if($page==$i){ ?>
 
  <a  class='page on' href='?page=<?php echo $i ?>'><?php echo $i ?></a>

  <?php } else{ ?>
 <a  class='page' href='?page=<?php echo $i ?>'><?php echo $i ?></a>

 <?php } } ?>
 <a href="?page=<?php echo $next_page ;?>" class="page">>></a>
<a href="?page=<?php echo $pages ?>" class="page aa">末页</a>

</body>


</html>