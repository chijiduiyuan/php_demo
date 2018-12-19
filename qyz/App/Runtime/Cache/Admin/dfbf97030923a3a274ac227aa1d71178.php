<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>导入新闻数据</title>
</head>
<body>
	<form method="post" action="<?php echo U('News/export_check');?>" enctype="multipart/form-data">
		数据选择:<input type="file" name="exceldata" value="上传" />
		<input type="submit" value="上传" />
	</form>
</body>
</html>