<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN"><head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="/Public/admin/css/common.css">
        <link rel="stylesheet" href="/Public/admin/css/main.css">
        <script type="text/javascript" src="/Public/admin/js/jquery.min.js"></script>
        <script type="text/javascript" src="/Public/admin/js/colResizable-1.3.min.js"></script><style type="text/css">.CRZ{table-layout:fixed;}.CRZ td,.CRZ th{padding-left:0px!important;padding-right:0px!important;overflow:hidden}.CRC{height:0px;position:relative;}.CRG{margin-left:-5px;position:absolute;z-index:5;}.CRG .CRZ{position:absolute;background:none;filter:alpha(opacity=1);opacity:0;width:10px;height:100%;top:0px}.CRL{position:absolute;width:1px}.CRD{ border-left:1px dotted black}</style>
        <script type="text/javascript" src="/Public/admin/js/common.js"></script>

        <script type="text/javascript">
            $(function () {
                $(".list_table").colResizable({
                    liveDrag: true,
                    gripInnerHtml: "<div class='grip'></div>",
                    draggingClass: "dragging",
                    minWidth: 30
                });

            });
        </script>
        <title>Document</title>
    </head>
    <body>
        <div class="container">
            <div id="button" class="mt10">
                <input type="button" name="button" class="btn btn82 btn_add" value="新增" onclick="location.href = '<?php echo U('Weixin/addMenu');?>'"> 
                <a href="<?php echo U('Weixin/createMenu');?>">生成自定义菜单</a>  |     <a href="<?php echo U('Weixin/delWxMenu');?>">删除自定义菜单</a>
            </div>

            <div id="table" class="mt10">
                <div class="box span10 oh">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0" class="list_table CRZ" id="CRZ0">
                        <tbody><tr>

                                <th >ID</th>
                                <th >PID</th>
                                <th >名称</th>
                                <th >类型</th>
                                <th >key</th>
                                <th>URL</th>
                                <th>操作</th>
                            </tr>
                        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr class="tr"  style='text-align:center'>
                                <td><?php echo ($v["id"]); ?></td>
                                <td><?php echo ($v["pid"]); ?></td>
                                <td><?php echo ($v["name"]); ?></td>
                                <td><?php echo ($v["type"]); ?></td>
                                <td><?php echo ($v["key"]); ?></td>
                                <td><?php echo ($v["url"]); ?></td>
                                <td><a href='<?php echo U("Weixin/editMenu",array("id"=>$v["id"]));?>'>修改</a> <a href="<?php echo U('Weixin/delMenu',array('id'=>$v['id']));?>">删除</a></td>
                            </tr>
                            <!--嵌套循环子菜单-->
                            <?php if(is_array($v["sub"])): $i = 0; $__LIST__ = $v["sub"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v1): $mod = ($i % 2 );++$i;?><tr class="tr" style='text-align:center'>
                                    <td><?php echo ($v1["id"]); ?></td>
                                    <td><?php echo ($v1["pid"]); ?></td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|--<?php echo ($v1["name"]); ?></td>
                                    <td><?php echo ($v1["type"]); ?></td>
                                    <td><?php echo ($v1["key"]); ?></td>
                                    <td><?php echo ($v1["url"]); ?></td>
                                    <td><a href='<?php echo U("Weixin/editMenu",array("id"=>$v1["id"]));?>'>修改</a> <a href="<?php echo U('Weixin/delMenu',array('id'=>$v1['id']));?>">删除</a></td>
                                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                            <!--嵌套循环子菜单 结束--><?php endforeach; endif; else: echo "" ;endif; ?>

                        </tbody></table>

                </div>
            </div>




        </div> 


    </body></html>