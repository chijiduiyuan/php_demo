<?php if (!defined('THINK_PATH')) exit();?><html >
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
<title>诺博源</title>
<link rel="stylesheet" type="text/css" href="/php/6-30/Public/Assets/css/reset.css"/>
<script type="text/javascript" src="/php/6-30/Public/Assets/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="/php/6-30/Public/Assets/js/js_z.js"></script>
<link rel="stylesheet" type="text/css" href="/php/6-30/Public/Assets/css/thems.css">
<link rel="stylesheet" type="text/css" href="/php/6-30/Public/Assets/css/responsive.css">

<style>
     .inp{ width:800px; margin:0 auto; margin-bottom:20px;}
     .liuyan{ width:800px; margin:0 auto; height:auto;}
	.con{ padding:20px 10px; background:#F0F0F0; margin-bottom:10px; width:780px;  float:left; position:relative;}
    .con img{ float:left; border-radius:50%; }
    .con1{ margin-left:20px; color:#069; display:block; float:left; width:700px; font-size:12px; line-height:24px;}
	.close{ display:none; text-decoration:none; text-align:center; width:30px; height:30px; position:absolute; top:20%; right:20px; }
	.con:hover .close{ display:block;}
	.ptitle{ margin-left:20px; width:700px; float:left; font-size:14px; }
	.con span{ display:inline-block; margin-left:10px; color:#999}
	.sj{ width:20%; line-height:36px; display:block; height:36px; float:right;}
     .more1{ width:800px; height:30px; margin:0 auto; background:#ccc; text-align:center; line-height:30px;}
</style>
</head>

<body>
<!--头部-->
  <!--头部-->
<div class="t_bg">
	<div class="top">
  <?php if(!empty($_SESSION['register'])): ?>欢迎<a href="<?php echo U('Login/person');?>"><?php echo (session('register')); ?></a>
  <a href="<?php echo U('Login/loginout');?>">退出</a><?php endif; ?>
    	<a href="">联系我们</a><i>|</i>
        <a href="">设为首页</a><i>|</i>
        <a href="">加入收藏</a><i>|</i>
    <?php if(empty($_SESSION['register'])): ?><a href="<?php echo U('Login/index');?>">登录</a><i>|</i>
        <a href="reg.html">注册</a><?php endif; ?>      
        
    </div>
</div>
<div class="head clearfix">
    <div class="logo"><a href="index.html"><img src="/php/6-30/Public/Assets/images/logo.png" alt="诺博源"/></a></div>
    <div class="search">
        <input name="" type="text" placeholder="请输入关键字">
        <input name="" type="submit" value="搜 索">
    </div>
    <div class="tel">
    	<span><em>热线电话:</em>&nbsp;</span>
        <b>400-150-1169</b>
    </div>
</div>
<div class="n_bg">
	<div class="nav_m">
        <div class="n_icon">导航栏</div>
        <ul class="nav clearfix">
            <li class="now"><a href="<?php echo U('Index/index');?>"><i>&nbsp;</i>首页</a></li>
            <li><a href="<?php echo U('Cp/product');?>"><i>&nbsp;</i>产品中心</a></li>
            <li>
            	<a href="<?php echo U('News/news');?>"><i>&nbsp;</i>新闻中心</a>
                <div class="er clearfix">
               <?php if(is_array($news_type)): $i = 0; $__LIST__ = $news_type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vv): $mod = ($i % 2 );++$i;?><a href="<?php echo U('News/news',array('typeid'=>$vv['typeid']));?>"><?php echo ($vv["name"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>   
                </div>
            </li>
            <li>
            	<a href="about.html"><i>&nbsp;</i>关于我们</a></li>
            <li>
            	<a href="contact.html"><i>&nbsp;</i>联系我们</a>
                <div class="er clearfix">
                	<a href="contact.html">联系诺博源</a>
                    <a href="message.html">客户留言</a>
                </div>
            </li>
        </ul>
    </div>
</div>
<!--头部-->

<!--头部-->
<div class="banner banner_s"><img src="/php/6-30/Public/Assets/upload/banner_a.jpg" alt=""/></div>
<div class="space_hx">&nbsp;</div>
<div class="scd clearfix">
    <div class="scd_l">
        <div class="name">新闻中心</div>
        <ul class="s_nav">
        
            <?php if(is_array($news_type)): $i = 0; $__LIST__ = $news_type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
            	<a href="<?php echo U('News/news',array('typeid'=>$vo['typeid']));?>"><?php echo ($vo["name"]); ?></a>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
          
        </ul>
    </div>
    <div class="scd_r">
        <div class="dq">
            <span class="name">行业新闻</span>
            <div class="pst">
                <span>您的位置：</span>
                <a href="index.html">首页</a>
                <span>></span>
                <a href="news.html">新闻中心</a>
                <span>></span>
                <a href="news.html" class="on">行业新闻</a>
            </div>
        </div>
        <div class="scd_m">
         <div class="news_info">
           <h2><?php echo ($list["title"]); ?></h2>
            <div><span>发布时间：<?php echo ($list["sj"]); ?></span><span>来源：中国政府网</span><span>留言条数：<b id="num"><?php echo ($num); ?></b></span><span>访问量：<?php echo ($list["count"]); ?></span></div>
            <div class="img"></div>
            <p><?php echo (htmlspecialchars_decode($list['content'] )); ?></p>      
        </div>
        
        <!-- 对新闻留言评论   -->
         <div class="liuyan">
                <?php if(is_array($pl)): $i = 0; $__LIST__ = $pl;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vv): $mod = ($i % 2 );++$i;?><div class="con">
                <img src="/php/6-30/Uploads/<?php echo ($vv['pic']); ?>" width='40' height="40" />
                <p class="con1"><?php echo ($vv["username"]); ?><span><?php echo ($vv["shijian"]); ?></span></p>
                 <div class="ptitle"><?php echo ($vv["content"]); ?></div>
                 <?php if($_SESSION['register']== $vv['username']): ?><a href="javascript:void(0)" class="close" uid="<?php echo ($vv["id"]); ?>">删除</a><?php endif; ?>
                 </div><?php endforeach; endif; else: echo "" ;endif; ?>
         </div>
          
          
          
        <input type="hidden" id="newsid" value="<?php echo ($list['newsid']); ?>" />
       <textarea id="message" style="width:500px; height:100px; border:#999 1px solid; border-radius:8px;" ></textarea> <input  type="button" value="留言提交" id="tj" style="width:80px; height:36px; line-height:36px; background:#F00; color:#fff; border:0px; border-radius:8px;" />  <br/>
        
        
       <?php echo ($ss); ?>
        
 <script>
   $(function(){
	    $("#tj").click(function(){
	        var user="<?php echo (session('register')); ?>";
			var newsid=$('#newsid').val();
		    if(user==""){
				alert('请登录');
				}
				
			else{
				    var val=$("#message").val();
				   if(val==""){
					    alert("对不起留言不能为空");
					   }
				   else{
					   
					   $.ajax({
						     url:"<?php echo U('News/pl_ajax');?>",
							 type:"POST",
							 async:true,
							 dataType:"json",
							 data:{'val':val,'newsid':newsid},
							 success: function(data){
                                   //alert(data.content);
						var html='<div class="con"><img src="/php/6-30/Uploads/<?php echo (session('pic')); ?>" width="40" height="40" /><p class="con1">'+user+'<span>'+data.shijian+'</span></p><div class="ptitle">'+data.content+'</div><a href="javascript:void(0)" class="close" uid="'+data.id+'">删除</a></div>'
						$(".liuyan").prepend(html);   
						  var n=parseInt($("#num").html());
						  n++;
						  $("#num").html(n);  //改留言数量

								 },
						   
						   });
					   
					   }
				}
				
				
				
	   });
	   
	   
	  //删除留言
	  
	  $(document).on('click','.close',function(){
		    var rel=confirm('是否要删除');
			if(rel){
			uid=$(this).attr('uid'); //要删除的留言的id
		    $(this).parents('.con').remove();
			$.ajax({
				     url:"<?php echo U('News/pl_del_ajax');?>",
					 type:'POST',
					 dataType:"json",
					 async:true,
					 data:{'id':uid},
					 success: function(){
						  var n=parseInt($("#num").html());
						  n--;
						  $("#num").html(n);  //改留言数量
						 alert('删除成功');
						 
						 },
				});
			
		    } 
			
			
			
			
		  });   
	   
	   
 
 });
 
 </script>       
        
        </div>
    </div>
</div>


<div class="space_hx">&nbsp;</div>

<div class="bg_b">
	<div class="f_nav clearfix">
    	<div class="f_nl">
        	<div class="name">友情链接</div>
            <div class="frd">
            	<a href="">中通快递</a>
                <a href="">龙邦快递</a>
                <a href="">汇强快递</a>
                <a href="">音素快递</a>
                <a href="">祥龙运通</a>
                <a href="">城市100</a>
                <a href="">能达物流</a>
                <a href="">全峰快递</a>
                <a href="">快捷快递</a>
                <a href="">民邦快递</a>
                <a href="">运通速运</a>
                <a href="">快递协会</a>
                <a href="">增益速递</a>
                <a href="">全球快递</a>
                <a href="">全峰快递</a>
                <a href="">快捷快递</a>
                <a href="">民邦快递</a>
                <a href="">运通速运</a>
                <a href="">快递协会</a>
                <a href="">增益速递</a>
            </div>
        </div>
        <ul class="f_nr clearfix">
            <li>
            	<div class="title">公司微博</div>
                <img src="/php/6-30/Public/Assets/images/pic3.jpg" alt=""/>
                <p>诺博源</p>
                <p class="huang">加关注</p>
            </li>
            <li>
            	<div class="title">公司微信</div>
                <img src="/php/6-30/Public/Assets/images/pic2.jpg" alt=""/>
                <p>扫一扫</p>
                <p class="huang">立即关注</p>
            </li>
            <li>
            	<div class="title">公司官方群</div>
                <img src="/php/6-30/Public/Assets/images/pic1.jpg" alt=""/>
                <p>QQ群</p>
                <p class="huang">立即加入</p>
            </li>
        </ul>
    </div>
</div>
<div class="bg_c">
	<div class="bq">版权所有：深圳市诺博源软件技术有限公司©2015 粤ICP备05007539号-7 粤ICP证100714号 粤公网安备1101080209224号</div>
</div>

</body>
</html>