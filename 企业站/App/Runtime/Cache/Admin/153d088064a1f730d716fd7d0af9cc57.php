<?php if (!defined('THINK_PATH')) exit();?> <!doctype html>
 <html lang="zh-CN">
 <head>
   <meta charset="UTF-8">
   <link rel="stylesheet" href="/php/6-30/Public/Admin/css/common.css">
   <link rel="stylesheet" href="/php/6-30/Public/Admin/css/main.css">
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
        </style>
   
   
   <script type="text/javascript" src="/php/6-30/Public/Admin/js/jquery.min.js"></script>
   <script type="text/javascript" src="/php/6-30/Public/Admin/js/colResizable-1.3.min.js"></script>
   <script type="text/javascript" src="/php/6-30/Public/Admin/js/common.js"></script>
   
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
   <title>Document</title>
 </head>
 <body>
  <div class="container">
    <div id="button" class="mt10">
      <input type="button" name="button" class="btn btn82 btn_add" value="新增"> 
       <input type="button" name="button" class="btn btn82 btn_del" value="删除">
       <input type="button" name="button" class="btn btn82 btn_checked" value="全选">
    </div>
    <div id="table" class="mt10">
       <div class="box span10 oh">
              <table width="100%" border="0" cellpadding="0" cellspacing="0" class="list_table">
                <tr>
                   <th width="100">#</th>
                   <th width="100">新闻图片</th>
                   <th width="100">新闻标题</th>
                   <th width="100">新闻分类</th>
                   <th width="100">新闻时间</th>
                   <th width="100">是否推荐</th>
                   <th width="100">操作</th>
                    </tr>
             <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vv): $mod = ($i % 2 );++$i;?><tr class="tr">
                   <td class="td_center"><input type="checkbox"></td>
                   <td><img src="/php/6-30/Uploads/<?php echo ($vv["newspic"]); ?>" width='80' height="80" /></td>
                   <td><a href="<?php echo U('Home/Index/news_info',array('newsid'=>$vv['newsid']));?>" target="_blank"><?php echo ($vv["title"]); ?></a></td>
                   <td><?php echo ($vv["name"]); ?></td>
                   <td><?php echo ($vv["sj"]); ?></td>
                   <td><?php if($vv['tj'] == 1): ?>是 <?php else: ?>否<?php endif; ?></td>
                   <td><a href="<?php echo U('News/news_modi',array('newsid'=>$vv['newsid'],'p'=>$p));?>">修改</a></td>               
                 </tr><?php endforeach; endif; else: echo "" ;endif; ?> 
              </table>
              <div class="page mt10">
                <div class="pages">
                     <?php echo ($page); ?>
                </div>

              </div>
        </div>
     </div>
  </div> 
 </body>
 </html>