<?php if (!defined('THINK_PATH')) exit();?><html >
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
<title>诺博源</title>
<link rel="stylesheet" type="text/css" href="/Public/Assets/css/reset.css"/>
<script type="text/javascript" src="/Public/Assets/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="/Public/Assets/js/js_z.js"></script>
<link rel="stylesheet" type="text/css" href="/Public/Assets/css/thems.css">
<link rel="stylesheet" type="text/css" href="/Public/Assets/css/responsive.css">
</head>

<body>
<!--头部-->
  <a  style=" position:fixed; right:10px; top:50px; z-index:100" target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=2416411477&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:2416411477:53" alt="点击这里给我发消息" title="点击这里给我发消息"/></a>

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
    <div class="logo"><a href="index.html"><img src="/Public/Assets/images/logo.png" alt="诺博源"/></a></div>
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
            	<a href="<?php echo U('Index/about');?>"><i>&nbsp;</i>关于我们</a></li>
            <li>
            	<a href="<?php echo U('Index/contact');?>"><i>&nbsp;</i>联系我们</a>
                <div class="er clearfix">
                	<a href="<?php echo U('Index/contact');?>">联系诺博源</a>
                    <a href="message.html">客户留言</a>
                </div>
            </li>
        </ul>
    </div>
</div>
<!--头部-->

<!--头部-->
<div class="banner banner_s"><img src="/Public/Assets/upload/banner_a.jpg" alt=""/></div>
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
        	<span class="name"><?php echo ($name); ?></span>
            <div class="pst">
            	<span>您的位置：</span>
                <a href="index.html">首页</a>
                <span>></span>
                <a href="news.html">新闻中心</a>
                <span>></span>
                <a href="javascript:void(0)" class="on"><?php echo ($name); ?></a>
            </div>
        </div>
        <div class="scd_m">
        	<ul class="news">
            
             <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;?><li>
                	<a href="<?php echo U('News/news_info',array('newsid'=>$vo1['newsid']));?>">
                    	<p><?php echo ($vo1["title"]); ?></p>
                        <em><?php echo ($vo1["sj"]); ?></em>
                    </a>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>
             
                
             
             
              
             
            </ul>
            <div class="space_hx">&nbsp;</div>
            <div class="pages">
              <?php echo ($page); ?>
            </div>
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
                <img src="/Public/Assets/images/pic3.jpg" alt=""/>
                <p>诺博源</p>
                <p class="huang">加关注</p>
            </li>
            <li>
            	<div class="title">公司微信</div>
                <img src="/Public/Assets/images/pic2.jpg" alt=""/>
                <p>扫一扫</p>
                <p class="huang">立即关注</p>
            </li>
            <li>
            	<div class="title">公司官方群</div>
                <img src="/Public/Assets/images/pic1.jpg" alt=""/>
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