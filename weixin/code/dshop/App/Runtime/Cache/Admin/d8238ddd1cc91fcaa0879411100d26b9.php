<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>产品添加表</title>
<link href="/dshop/Public/Admin/css/style1.css" rel="stylesheet" type="text/css" />



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
    
    <div class="formtitle"><span>基本信息</span></div>
     <form method="post" action="<?php echo U('Cp/cp_check');?>"  enctype="multipart/form-data">
    <ul class="forminfo">
    <li>
      <label>产品标题</label><input name="cpname" type="text" class="dfinput" /><i>标题不能超过30个字符</i></li>

      <li><label>产品分类</label>
      <select  class="dfinput" style="min-width:120px" name="cp_type">
       <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vv): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vv["typeid"]); ?>"><?php echo ($vv["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>

      </select><i>多个关键字用,隔开</i></li>  
    
<!-- <li><label>是否推荐</label><cite><input name="tj" type="radio" value="1"  />是&nbsp;&nbsp;&nbsp;&nbsp;<input name="tj" type="radio" value="0" checked="checked" />否</cite></li> -->

    <li><label>产品大图片</label><input name="cppic[]" type="file" class="dfinput" value="" />
    </li>
     <li><label>产品小图片</label><input name="cppic[]" type="file" class="dfinput" value="" />
    </li>   
    
    
   <li><label>产品价格</label><input name="price" type="text" class="dfinput" /><i>标题不能超过30个字符</i></li>

    <li><label>产品简单说明</label>
    <textarea name="con" class="dfinput" style="height: 100px;" ></textarea>

    </li>


    <li><label>产品详情</label>
    <textarea name="content" id="container" style="width:800px; height:400px" ></textarea>
 
    </li>
    <li><label>&nbsp;</label><input  type="submit" style="width:100px; height:40px; background:#069; color:#FFF" class="btn" value="确认保存"/></li>
    </ul>
    </form>
    </div>
</body>

<script type="text/javascript"  src="/dshop/Public/ueditor/ueditor.config.js"></script>
<script type="text/javascript"  src="/dshop/Public/ueditor/ueditor.all.min.js"> </script>
<script>
     var ue = UE.getEditor('container');
</script>

</html>