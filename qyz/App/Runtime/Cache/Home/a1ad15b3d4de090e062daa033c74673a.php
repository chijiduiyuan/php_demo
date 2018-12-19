<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>新闻列表</title>
</head>
<body>
	<?php foreach($list as $val){ echo $val['title'].'<br>'; } ?>
	<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i; echo ($val["title"]); ?><br><?php endforeach; endif; else: echo "" ;endif; ?>
</body>
</html>