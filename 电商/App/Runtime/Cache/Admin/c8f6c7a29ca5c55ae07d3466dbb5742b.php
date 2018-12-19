<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="/php/6-30/Public/Admin/css/style1.css" rel="stylesheet" type="text/css" />



</head>

<body>

	<div class="place">
    <span>位置：</span>
    <ul class="placeul">
    <li><a href="#">首页</a></li>
    <li><a href="#">表单</a></li>
    </ul>
    </div>
    
    <div class="formbody">
    
    <div class="formtitle"><span>新闻修改</span></div>
     <form method="post" action="<?php echo U('News/news_modi_check');?>"  enctype="multipart/form-data">
    <ul class="forminfo">
    <li>
     <label>新闻标题</label><input name="title" type="text" class="dfinput" value="<?php echo ($list["title"]); ?>" /><i>标题不能超过30个字符</i></li>
    <input type="hidden" name="newsid" value="<?php echo ($list['newsid']); ?>" />
    <input type="hidden" name="p" value="<?php echo ($p); ?>"/>
      <li><label>新闻分类</label>
      <select  class="dfinput" style="min-width:120px" name="type">
          <?php if(is_array($type)): $i = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vv): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vv["typeid"]); ?>" <?php if($list['type'] == $vv['typeid']): ?>selected<?php endif; ?>><?php echo ($vv["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>

      </select><i>多个关键字用,隔开</i></li>  
    
<li><label>是否推荐</label><cite><input name="tj" type="radio" value="1" <?php if($list['tj'] == 1): ?>checked="checked"<?php endif; ?> />是&nbsp;&nbsp;&nbsp;&nbsp;<input name="tj" type="radio" value="0" <?php if($list['tj'] == 0): ?>checked="checked"<?php endif; ?>/>否</cite></li>
    <li><label>新闻图片</label><input name="newspic" type="file" class="dfinput" value="" />
         <input type="hidden" name="newspic1" value="<?php echo ($list['newspic']); ?>" />
   
    </li>
 <li><label>新闻说明</label>
    <textarea name="con" class="dfinput" style="height: 100px;" ><?php echo ($list["con"]); ?></textarea>

    </li>


    <li><label>文章内容</label>
    <textarea name="content" id="container" style="width:800px; height:400px" ><?php echo ($list["content"]); ?></textarea>
 
    </li>
    <li><label>&nbsp;</label><input  type="submit" style="width:100px; height:40px; background:#069; color:#FFF" class="btn" value="确认保存"/></li>
    </ul>
    </form>
    </div>
</body>

<script type="text/javascript"  src="/php/6-30/Public/ueditor/ueditor.config.js"></script>
<script type="text/javascript"  src="/php/6-30/Public/ueditor/ueditor.all.min.js"> </script>
<script>
     var ue = UE.getEditor('container');
</script>

</html>