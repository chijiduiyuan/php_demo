<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>添加页面</title>
</head>
<body>
	<form method="post" action="<?php echo U('News/news_add_check');?>">
            新闻标题:<input type="text" name="title" /><br/><br/>
            新闻内容:<textarea name="content" cols="50" rows="20"></textarea><br/><br/>
            新闻分类:<select name="type">
                            <option value="1" selected>国内新闻</option>
                            <option value="2">国际新闻</option>
                            <option value="3">行业新闻</option> 
                      </select><br/><br/>
             <input type="submit"  value="添加" />
      
      </form>
</body>
</html>