<?php if (!defined('THINK_PATH')) exit();?><html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
<title>诺博源</title>
<link rel="stylesheet" type="text/css" href="/php/thnkphp/Public/Assets/css/reset.css"/>
<script type="text/javascript" src="/php/thnkphp/Public/Assets/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="/php/thnkphp/Public/Assets/js/js_z.js"></script>
<link rel="stylesheet" type="text/css" href="/php/thnkphp/Public/Assets/css/thems.css">
<link rel="stylesheet" type="text/css" href="/php/thnkphp/Public/Assets/css/responsive.css">
<style>
     .inp{ width:800px; margin:0 auto; margin-bottom:20px;}
     .liuyan{ width:800px; margin:0 auto; height:auto;}
     #bt{width:40px; height:26px; line-height:26px; display:inline-block; background:#F00; border:0px; border-radius:5px; text-align:center; color:#FFF}
	.con{ padding:20px 10px; background:#F0F0F0; margin-bottom:10px; width:780px;  float:left; }
    .con img{ float:left; border-radius:50%; }
    .con1{ margin-left:20px; color:#069; display:block; float:left; width:700px; font-size:12px; line-height:24px;}
	.ptitle{ margin-left:20px; width:700px; float:left; font-size:14px; }
	.con span{ display:inline-block; margin-left:10px; color:#999}
	.sj{ width:20%; line-height:36px; display:block; height:36px; float:right;}
    .more1{ width:800px; height:30px; margin:0 auto; background:#ccc; text-align:center; line-height:30px;}
</style>
<script type="text/javascript">
	$(function(){
		$("#bt").click(function(){
			var val=$("#message").val();
			var username="<?php echo (session('username')); ?>";
			if(username==""){alert("请登录");}
			else{
				if(val==""){alert("对不起，留言不能为空");}
				else{
					$.ajax({
						url:"<?php echo U('Index/pl_ajax');?>",
						type:"POST",
						async:true,
						dataType:"json",
						data:{'message':val},
						success:function(data){
							if(data.info){
									   var html= '<div class="con"><img src="/php/thnkphp/Public/Assets/images/g.jpg" /><p class="con1">admin<span>'+data.shijian+'</span></p><div class="ptitle">'+data.content+'</div></div>';
	                                   $(".liuyan").prepend(html);   
										   }
									 else{alert("留言失败");}
						}
					})
				}
			}
			
		})
	})
</script>





</head>

<body>
<!--头部-->
<!--头部-->
<div class="t_bg">

	<div class="top">

    <?php if(!empty($_SESSION['username'])): ?>欢迎 <?php echo (session('username')); ?>
        <a href="<?php echo U('Login/loginout');?>">退出</a><?php endif; ?> 

    	<a href="">联系我们</a><i>|</i>
        <a href="">设为首页</a><i>|</i>
        <a href="">加入收藏</a><i>|</i>

        <?php if(empty($_SESSION['username'])): ?><a href="<?php echo U('Login/login');?>">登录</a><i>|</i>
            <a href="<?php echo U('Login/reg');?>">注册</a><?php endif; ?>
    </div>
</div>
<div class="head clearfix">
    <div class="logo"><a href="<?php echo U('Index/index');?>"><img src="/php/thnkphp/Public/Assets/images/logo.png" alt="诺博源"/></a></div>
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
                	<a href="activity.html">最新活动</a>
                    <a href="<?php echo U('News/news');?>">政策法规</a>
                    <a href="<?php echo U('News/news');?>">行业新闻</a>
                    <a href="<?php echo U('News/news');?>">国际新闻</a>
                    <a href="<?php echo U('News/news');?>">分析与评论</a>
                    <a href="<?php echo U('News/news');?>">宏观经济</a>
                </div>
            </li>
            <li>
            	<a href="<?php echo U('News/about');?>"><i>&nbsp;</i>关于我们</a></li>
            <li>
            	<a href="<?php echo U('News/contact');?>"><i>&nbsp;</i>联系我们</a>
                <div class="er clearfix">
                	<a href="<?php echo U('News/contact');?>">联系诺博源</a>
                    <a href="<?php echo U('News/message');?>">客户留言</a>
                </div>
            </li>
        </ul>
    </div>
</div>
<!--头部-->
<!--头部-->

<div class="banner banner_s"><img src="/php/thnkphp/Public/Assets/upload/banner_a.jpg" alt=""/></div>
<div class="space_hx">&nbsp;</div>
<div class="scd clearfix"></div>
   <div class="inp">
   <textarea style="width:400px; height:100px;" id="message"></textarea>
   <input type="button" value="提交" id="bt" />
   </div>
   
   <div class="liuyan">
   
             <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vv): $mod = ($i % 2 );++$i;?><div class="con">
                <img src="/php/thnkphp/Public/Assets/images/g.jpg" />
                <p class="con1"><?php echo ($vv["username"]); ?><span><?php echo (date("Y-m-d H:i:s",$vv['shijian'])); ?></span></p>
                 <div class="ptitle"><?php echo ($vv["content"]); ?></div>
                 </div><?php endforeach; endif; else: echo "" ;endif; ?> 
                 
   </div>
   <div class="clearfix"></div>
<div class="more1"><a href="javascript:void()" id="more">更多 ....</a></div>


<div class="space_hx">&nbsp;</div>

<!--头部-->
<!--底部-->
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
                <img src="/php/thnkphp/Public/Assets/images/pic3.jpg" alt=""/>
                <p>诺博源</p>
                <p class="huang">加关注</p>
            </li>
            <li>
            	<div class="title">公司微信</div>
                <img src="/php/thnkphp/Public/Assets/images/pic2.jpg" alt=""/>
                <p>扫一扫</p>
                <p class="huang">立即关注</p>
            </li>
            <li>
            	<div class="title">公司官方群</div>
                <img src="/php/thnkphp/Public/Assets/images/pic1.jpg" alt=""/>
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
<!--底部-->
<!--头部-->

</body>
</html>