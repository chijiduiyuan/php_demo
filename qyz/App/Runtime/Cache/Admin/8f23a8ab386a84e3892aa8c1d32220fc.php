<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="/php/thnkphp/Public/Admin/css/style1.css" rel="stylesheet" type="text/css" />



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
    
    <div class="formtitle"><span>公司简介修改</span></div>
     <form method="post" action="<?php echo U('Index/about_check');?>"  enctype="multipart/form-data">
    <ul class="forminfo">
      <li></li>

    <li><label>关于我们</label>
    <input type="hidden" value="<?php echo ($list["id"]); ?>"  name="id"/>
    <textarea name="content" id="container" style="width:800px; height:400px" ><?php echo ($list["content"]); ?></textarea>
 
    </li>
    <li><label>&nbsp;</label><input  type="submit" style="width:100px; height:40px; background:#069; color:#FFF" class="btn" value="确认保存"/></li>
    </ul>
    </form>
    </div>
</body>

<script type="text/javascript"  src="/php/thnkphp/Public/ueditor/ueditor.config.js"></script>
<script type="text/javascript"  src="/php/thnkphp/Public/ueditor/ueditor.all.min.js"> </script>
<script>
     var ue = UE.getEditor('container');
</script>

</html>