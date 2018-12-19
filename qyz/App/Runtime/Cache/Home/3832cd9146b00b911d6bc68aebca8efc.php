<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>新闻列表页面</title>	
  <script src="/php/thnkphp/Public/Assets/js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript">
  $(function(){
    $("#qx").click(function(){
      var rel=$(this).prop('checked');
      $(".ck").prop('checked',rel);
    })

    $(".delall").click(function(){
      var ss="";
      $(".ck:checked").each(function(){
        ss+=$(this).val()+',';
      })
      //window.location.href="<?php echo U('News/delall');?>"
    })
  })
  </script>
</head>
<body>
	
	<input type="checkbox" id="qx">
	<a href="<?php echo U('News/news_add');?>">添加</a>
	<a href="">国内新闻</a>
	<a href="">国际新闻</a>
	<a href="">行业新闻</a>
	<a href="javascript:void(0)" id="delall" class="sure">批量删除</a>
	<form method="post" action="delall1.php" >
	<table width="999" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td width="161" align="center">全选</td>
    <td width="154" align="center">newsid</td>
    <td width="154" align="center">分类</td>
    <td width="533" align="center">标题</td>
    <td width="141" align="center">日期</td>
    <td width="141" align="center">操作</td>
  </tr>
  
	<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><tr>
  	<td align="center"><input type="checkbox" value="{val.newsid}" class="ck"></td>
  	<td align="center"><?php echo ($val["newsid"]); ?></td>
  	<td align="center"> 
  		<?php if($val['type'] == 3): ?>行业新闻
  			<?php elseif($val['type'] == 4): ?>国内新闻
  			<?php elseif($val['type'] == 2): ?>国际新闻<?php endif; ?>
  	</td>
  	<td align="center"><?php echo ($val["title"]); ?></td>
  	<td align="center"><?php echo ($val["sj"]); ?></td>
  	<td>
      <a href="<?php echo U('News/news_modi',array('newsid'=>$val['newsid']));?>">修改</a>/
      <a href="<?php echo U('News/news_del',array('newsid'=>$val['newsid']));?>" class="sure" onclick="{if(confirm('确认删除?')){return true;} return false;}">删除</a>
    </td>
  </tr><?php endforeach; endif; else: echo "" ;endif; ?>
  </table>
  </form>
  <!-- <?php foreach($list as $val){ echo $val['title'].'<br>'; } ?>
  <volist name="list" id="val">
    <?php echo ($val["title"]); ?><br>
  </volist -->
</body>
</html>