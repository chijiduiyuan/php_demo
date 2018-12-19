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
</head>

<body>
<!--头部-->
   <!--头部-->
<div class="t_bg">
	<div class="top">
  <?php if(!empty($_SESSION['register'])): ?>欢迎<?php echo (session('register')); ?>
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
                	<a href="activity.html">最新活动</a>
                    <a href="news.html">政策法规</a>
                    <a href="news.html">行业新闻</a>
                    <a href="news.html">国际新闻</a>
                    <a href="news.html">分析与评论</a>
                    <a href="news.html">宏观经济</a>
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
    <div class="scd_r single">
        <div class="dq">
            <span class="name">注册</span>
            <div class="pst">
                <span>您的位置：</span>
                <a href="reg.html" class="on">注册</a>
            </div>
        </div>
       <div class="contact">
                <form action="<?php echo U('Login/register_check');?>" method="post">
                 <table align="center" cellspacing="20">
                     <tr>
                         <td>用户名：</td><td align="left"><input type="text"   name="username"><em>*</em><span>用户名在2到20位数之间</span></td>
                     </tr>
                     <tr>
                         <td>密码：</td><td align="left"><input type="password" placeholder="请输入您的密码" name="pwd"><em>*</em><span>密码在6到20位数之间</span></td>
                     </tr>
                     <tr>
                         <td>重复密码：</td><td align="left"><input type="password" name="pwd1"><em>*</em><span>重复密码应与密码保持一致</span></td>
                     </tr>
                      <tr>
                         <td>联系方式：</td><td align="left"><input type="text"  name="tel"><em>*</em><span>联系方式在8到11位数之间</span></td>
                     </tr>
                        <tr>
                         <td>邮箱：</td><td align="left"><input type="text" name="email"><em>*</em><span>联系方式在8到11位数之间</span></td>
                     </tr>                  
                     
                     
                     
                   <!--  <tr>
                         <td>验证码：</td><td align="left"><input type="text" placeholder="请输入右边的验证码"><a href=""><img src="/php/6-30/Public/Assets/images/code.png"></a><em>*</em></td>
                     </tr>-->
                     <tr>
                         <td colspan="2"><input type="submit" value="注册"><input type="reset" value="重置"></td>
                     </tr>
                     <tr>
                         <td colspan="2" align="right">注：<em>*</em>为必填项</td>
                     </tr>
                 </table>
                 
                </form>
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
                <img src="Assets/images/pic3.jpg" alt=""/>
                <p>诺博源</p>
                <p class="huang">加关注</p>
            </li>
            <li>
                <div class="title">公司微信</div>
                <img src="Assets/images/pic2.jpg" alt=""/>
                <p>扫一扫</p>
                <p class="huang">立即关注</p>
            </li>
            <li>
                <div class="title">公司官方群</div>
                <img src="Assets/images/pic1.jpg" alt=""/>
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