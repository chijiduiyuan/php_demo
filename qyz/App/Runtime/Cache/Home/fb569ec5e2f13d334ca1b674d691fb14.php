<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>添加页面</title>
</head>
<body>
	<form method="post" action="<?php echo U('News/news_modi_check');?>">
            新闻标题:<input type="text" name="title" value="<?php echo ($list['title']); ?>" /><br/><br/>
            新闻内容:<textarea name="content" cols="50" rows="20"><?php echo ($list["content"]); ?></textarea><br/><br/>
            新闻分类:<select name="type">
                            <option value="1" <?php if($list['type'] == 4): ?>selected<?php endif; ?> >国内新闻</option>
                            <option value="2" <?php if($list['type'] == 2): ?>selected<?php endif; ?> >国际新闻</option>
                            <option value="3" <?php if($list['type'] == 3): ?>selected<?php endif; ?> >行业新闻</option> 
                      </select><br/><br/>
             <input type="submit"  value="添加" />
        <input type="hidden" value="<?php echo ($list["newsid"]); ?>" name="newsid">
      </form>
</body>
</html>