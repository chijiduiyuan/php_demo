<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="/php/thnkphp/Public/Admin/css/style1.css" rel="stylesheet" type="text/css" />
<style type="text/css">
  #add{width:50px;height:30px;border:#f00 1px solid;background:#f00;color:#fff;margin:20px 20px;}
  .tname{width: 100px;border:1px solid red;}
  .sno{width: 30px;margin-left: 30px;}
  .btn{width:100px; height:40px; background:#069; color:#FFF}
</style>
<script src="/php/thnkphp/Public/Admin/js/jquery.min.js"></script>
<script type="text/javascript">
  $(function(){

    //修改新闻分类
    $(".tname,.sno").change(function(){
      var n=$(this).parents('li').index();
      var name=$(".tname").eq(n).val();
      var sno=$(".sno").eq(n).val();
      var typeid=$(".typeid").eq(n).val();
      $.ajax({
        url:"<?php echo U('News/type_modi_ajax');?>",
        type:"post",
        async:true,
        dataType:"json",
        data:{'name':name,'sno':sno,'typeid':typeid},
        success:function(data){
          if(data.info){alert('修改成功');}
          else{alert('修改失败');}
        },
      })
    })

    //删除新闻分类
    $(".del").click(function(){
        var n=$(this).parents('li').index();
        var typeid=$(".typeid").eq(n).val();
        $(this).parents('li').remove(); //JS删除
        $.ajax({
          url:"<?php echo U('News/type_del_ajax');?>",
          type:'POST',
          async:true,
          dataType:"json",
          data:{'typeid':typeid},
          success:function(){},  
        });
    });

    //添加新闻分类
    $("#add").click(function(){
       $("#tab,.layer").show();
    });

    //添加新闻分类ajax
    $("#type_add").click(function(){
      var name=$("#name").val();
      var sno=$("#sno").val();
      $("#tab,.layer").hide();
      $.ajax({
        url:"<?php echo U('News/type_add_ajax');?>",
        type:"post",
        async:true,
        dataType:"json",
        data:{'name':name,'sno':sno},
        success:function(data){
           var html='<li><input type="text" name="name[]" value="'+data.name+'" class="dfinput tname"><input type="text" name="sno[]" value="'+data.sno+'" class="dfinput sno"><input type="hidden" name="typeid[]" value="'+data.typeid+'" class="typeid"><input type="button" value="删除" class="del" /></li>';
            $("#val").prepend(html);
        },
      })
    })

  })
</script>
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
    
    <div class="formtitle"><span>新闻分类</span></div>
      <input type="button" value="添加分类" id="add">
     <form method="post" action="<?php echo U('News/news_type_check');?>"  enctype="multipart/form-data">
      <ul class="forminfo">

        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><li>
          <input type="text" name="name[]" value="<?php echo ($val["name"]); ?>" class="dfinput tname">
          <input type="text" name="sno[]" value="<?php echo ($val["sno"]); ?>" class="dfinput sno">
          <input type="hidden" name="typeid[]" value="<?php echo ($val["typeid"]); ?>" class="typeid">
          <input type="button" value="删除" class="del" />  
        </li><?php endforeach; endif; else: echo "" ;endif; ?>
        
        <li><label>&nbsp;</label>
          <input type="submit" class="btn" value="批量修改"/></li>
      </ul>
    </form>
    </div>
    
    <div class="layer" style="width:100%; height:100%; background:rgba(153,153,153,0.5); position:absolute; top:0px; left:0px; display:none"></div>

    <table width="500" border="0" cellspacing="0" cellpadding="0" style="border:#069 1px solid; background:#FFF; z-index:30; display:none; position:absolute; top:150px; left:100px;" id="tab" >
      <tr>
        <td colspan="2" height="30" align="center" bgcolor="#0066CC" style="color:#fff">添加分类</td>
      </tr>
      <tr>
        <td width="183" align="center">分类名称</td>
        <td width="417" height="40"><input type="text" name="name" id="name" class="dfinput" /></td>
      </tr>
      <tr>
        <td height="65" align="center">排列号</td>
        <td height="40"><input type="text" id="sno"  class="dfinput"/></td>
      </tr>
      <tr>
        <td height="65">&nbsp;</td>
        <td><input type="button" value="添加" id="type_add" /></td>
      </tr>
  </table>
</body>
</html>