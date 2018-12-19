<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>无标题文档</title>
    <link href="/Public/admin/css/style1.css" rel="stylesheet" type="text/css" />



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

        <div class="formtitle"><span>菜单管理</span></div>
        <form method="post" action=""  >
            <ul class="forminfo">
                <li>
                    <label>菜单名称</label><input name="name" value="<?php echo ($info["name"]); ?>" type="text" class="dfinput" />
                </li>

                <li>
                    <label>上一级菜单</label>
                    <select name="pid" class="select select_border"> 
                        <option value='0'>一级菜单</option> 
                        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value='<?php echo ($vo["id"]); ?>' <?php if(($vo["id"]) == $info["pid"]): ?>selected<?php endif; ?>><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </li>

                <li>
                    <label>菜单类型</label>
                    <select name="type" class="select"> 
                        <option value="click"  <?php if(($info["type"]) == "click"): ?>selected<?php endif; ?>>点击</option> 
                        <option value='view'  <?php if(($info["type"]) == "view"): ?>selected<?php endif; ?>>跳转</option>  
                    </select>
                </li>

                <li>
                    <label>key</label>
                    <input name="key" type="text" value="<?php echo ($info["key"]); ?>" class="dfinput" />
                </li>  

                <li>
                    <label>URL</label>
                    <input name="url" type="text" value="<?php echo ($info["url"]); ?>" class="dfinput" />
                </li>  

                <li><label>&nbsp;</label>
                    <input type="hidden" name="id" value="<?php echo ($info["id"]); ?>">
                    <input  type="submit" style="width:100px; height:40px; background:#069; color:#FFF" class="btn" value="确认保存"/></li>
            </ul>
        </form>
    </div>
</body>



</html>