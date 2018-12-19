<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>导入新闻数据</title>
</head>

<body>
     <form method="post" action="<?php echo U('News/export_check');?>" enctype="multipart/form-data">
         数据选择:<input type="file" name="exceldata" value="请上传" /><br/><br/>
         <input type="submit" value="上传" />
     </form>

</body>
</html>