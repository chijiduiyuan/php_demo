<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html >
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
    
    <div class="formtitle"><span>基本信息</span></div>
     <form method="post" action="<?php echo U('Index/config_check');?>"  enctype="multipart/form-data">
    <ul class="forminfo">
    <li>
      <label>网站标题</label><input name="title" value="<?php echo ($list["title"]); ?>" type="text" class="dfinput" />
    </li>

      <li>
      <label>网站地址</label>
      <input name="url" type="text" value="<?php echo ($list["url"]); ?>" class="dfinput" />
      </li>

    <li>
      <label>联系人:</label>
      <input name="name" type="text" value="<?php echo ($list["name"]); ?>" class="dfinput" />
    </li>
    
      <li>
      <label>公司地址:</label>
      <input name="address" type="text" value="<?php echo ($list["address"]); ?>" class="dfinput" />
    </li>  
    
      <li>
      <label>网站关键词:</label>
      <input name="keywords" type="text" value="<?php echo ($list["keywords"]); ?>" class="dfinput" />
    </li>  
    
       <li>
      <label>备案号:</label>
      <input name="icp" type="text"  value="<?php echo ($list["icp"]); ?>" class="dfinput" />
    </li>     
       <li>
      <label>法人邮箱:</label>
      <input name="email" type="text" value="<?php echo ($list["email"]); ?>" class="dfinput" />
    </li>     
         <li>
      <label>QQ:</label>
      <input name="qq" type="text" value="<?php echo ($list["qq"]); ?>" class="dfinput" />
    </li>   
    
      <li>
      <label>网站描述:</label>
      <input name="description" type="text" value="<?php echo ($list["description"]); ?>" class="dfinput" />
    </li>      
        <li>
      <label>手机号码:</label>
      <input name="tel" type="text" value="<?php echo ($list["tel"]); ?>" class="dfinput" />
    </li>    


    <li><label>&nbsp;</label><input  type="submit" style="width:100px; height:40px; background:#069; color:#FFF" class="btn" value="确认保存"/></li>
    </ul>
    </form>
    </div>
</body>



</html>