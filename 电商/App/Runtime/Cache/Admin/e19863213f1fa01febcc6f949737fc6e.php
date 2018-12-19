<?php if (!defined('THINK_PATH')) exit();?> <!doctype html>
 <html lang="zh-CN">
 <head>
   <meta charset="UTF-8">
   <link rel="stylesheet" href="/Public/Admin/css/common.css">
   <link rel="stylesheet" href="/Public/Admin/css/main.css">
   <style>
       .num,.first,.current,.end,.prev,.next{ display: block;float:left; width:30px; height: 30px; line-height: 30px; text-align: center; text-decoration: none; border:#ccc 1px solid; margin-top:10px; margin-right:8px;}
	  
     .current,.prev,.next{ width:40px; }
	 .current{background:#06C; color:#fff;}
     .on{ background:blue; color:#fff; }
   </style>
   
     <style>  
            .pages a,  
            .pages span {  
                display: inline-block;  
                padding: 2px 5px;  
                margin: 0 1px;  
                border: 1px solid #f0f0f0;  
                -webkit-border-radius: 3px;  
                -moz-border-radius: 3px;  
                border-radius: 3px;  
            }  
              
            .pages a,  
            .pages li {  
                display: inline-block;  
                list-style: none;  
                text-decoration: none;  
                color: #58A0D3;  
            }  
              
            .pages a.first,  
            .pages a.prev,  
            .pages a.next,  
            .pages a.end {  
                margin: 0;  
            }  
              
            .pages a:hover {  
                border-color: #50A8E6;  
            }  
              
            .pages span.current {  
                background: #50A8E6;  
                color: #FFF;  
                font-weight: 700;  
                border-color: #50A8E6;  
            }  
	     .cp{ padding:20px;}
		 .cp li{ float:left; margin-right:20px; width:200px; height:150px; padding:4px; border:#CCC 1px solid;}	
		 .cp li p{ width:100%; text-align:center; line-height:30px;}
			
        </style>
   
   
   <script type="text/javascript" src="/Public/Admin/js/jquery.min.js"></script>
   <script type="text/javascript" src="/Public/Admin/js/colResizable-1.3.min.js"></script>
   <script type="text/javascript" src="/Public/Admin/js/common.js"></script>
   
   <script type="text/javascript">
      $(function(){  
        $(".list_table").colResizable({
          liveDrag:true,
          gripInnerHtml:"<div class='grip'></div>", 
          draggingClass:"dragging", 
          minWidth:30
        }); 
        
      }); 
   </script>
   <script>
       $(function(){
		        $("#search").change(function(){
					  var val=$(this).val();
					  if(val!=""){
						      url="<?php echo U('Cp/cplist');?>?typeid="+val;
						      window.location.href=url;
						  }			  
					});   
		   });
   
   
   </script>
   
   
   <title>Document</title>
 </head>
 <body>

      <input type="button" name="button" class="btn btn82 btn_add" value="新增">
   
    <select id="search" style="border:#999 1px solid;">
          <option value="">--请选择--</option>
          <?php if(is_array($cp_type)): $i = 0; $__LIST__ = $cp_type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["typeid"]); ?>" ><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>   
    </select>
   
     <ul class="cp">
       <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
          <img src="/Uploads/<?php echo ($vo["cppic"]); ?>" width="200" height="150" />
          <p class="title"><?php echo ($vo["cpname"]); ?></p>
          <p class="editor"> <a href="<?php echo U('Cp/cp_modi',array('cpid'=>$vo['cpid']));?>">编辑</a> | <a href="javasript:void(0)">删除</a></p>
          </li><?php endforeach; endif; else: echo "" ;endif; ?>      
           
         
         
                   
          
          
     </ul>
 
 </body>
 </html>