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
</head>

<body>
<!--头部-->
<!--头部-->
<div class="t_bg">

	<div class="top">

    <?php if(!empty($_SESSION['register'])): ?>欢迎 <a href="<?php echo U('Login/person');?>"><?php echo (session('register')); ?></a>
        <a href="<?php echo U('Login/loginout');?>">退出</a><?php endif; ?> 

    	<a href="">联系我们</a><i>|</i>
        <a href="">设为首页</a><i>|</i>
        <a href="">加入收藏</a><i>|</i>

        <?php if(empty($_SESSION['register'])): ?><a href="<?php echo U('Login/login');?>">登录</a><i>|</i>
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
            <li>
                <a href="<?php echo U('Cp/product');?>"><i>&nbsp;</i>产品中心</a>
                <div class="er clearfix">
                    <?php if(is_array($cp_type)): $i = 0; $__LIST__ = $cp_type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vv1): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Cp/product',array('typeid'=>$vv1['typeid']));?>"><?php echo ($vv1["name"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </li>
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
                    <a href="<?php echo U('Index/message');?>">客户留言</a>
                </div>
            </li>
        </ul>
    </div>
</div>
<!--头部-->
<!--头部-->

<div class="banner banner_s"><img src="/php/thnkphp/Public/Assets/upload/banner_a.jpg" alt=""/></div>
<div class="space_hx">&nbsp;</div>
<div class="scd clearfix">
    <div class="scd_l">
        <div class="name">产品中心</div>
        <ul class="s_nav">
            <?php if(is_array($cp_type)): $i = 0; $__LIST__ = $cp_type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                <a href="<?php echo U('Cp/product',array('typeid'=>$vo['typeid']));?>"><?php echo ($vo["name"]); ?></a>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
    <div class="scd_r">
        <div class="dq">
            <span class="name"><?php echo ($name); ?></span>
            <div class="pst">
                <span>您的位置：</span>
                <a href="<?php echo U('Index/index');?>">首页</a>
                <span>></span>
                <a href="<?php echo U('Cp/product');?>">产品中心</a>
                <span>></span>
                <a href="javascript:void(0)" class="on"><?php echo ($name); ?></a>
            </div>
        </div>
        <div class="scd_m">
            <ul class="news">
              <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><li>
                    <div class="tu">
                        <a href="<?php echo U('Cp/product_info');?>"><img src="/php/thnkphp/Public/Assets/upload/<?php echo ($val["cppic"]); ?>" alt=""/>
                        <div class="title"><?php echo ($val["cpname"]); ?></div>
                        </a>
                    </div>
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
<!--尾部-->
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
	<div class="bq">版权所有：<?php echo (C("conf.title")); echo (C("conf.icp")); ?> 手机号:<?php echo (C("conf.tel")); ?></div>
</div>
</body>
<!--底部-->
<!--尾部-->
</body>
</html>