<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>我的订单</title>
<link rel="stylesheet" type="text/css" href="/Public/Home/css/style.css" />
<link rel="stylesheet" type="text/css" href="/Public/Home/css/shopping-mall-index.css" />
<script type="text/javascript" src="/Public/Home/js/jquery.js"></script>
<script type="text/javascript" src="/Public/Home/js/zhonglin.js"></script>
</head>

<body style="position:relative;">

	<!--top 开始-->
    <div class="top">
    	<div class="top-con w1200">
        	<p class="t-con-l f-l">
            <?php if(!empty($_SESSION['user'])): ?>欢迎<?php echo (session('user')); ?> <a href="<?php echo U('Login/loginout');?>">退出</a><?php endif; ?>
            
            </p>
            <ul class="t-con-r f-r">
                <li><a href="<?php echo U('Index/index');?>">首页</a></li>
            	<li><a href="<?php echo U('User/index');?>">我 (个人中心)</a></li>
            	<li><a href="<?php echo U('Car/jies');?>">我的购物车</a></li>
                <li><a href="<?php echo U('User/cj');?>">抽奖</a></li>
            	<li><a href="<?php echo U('User/order');?>">我的订单</a></li>
            	<li class="erweima">
                	<a href="#">扫描二维码</a>
                    <div class="ewm-tu">
                    	<a href="#"><img src="/Public/Home/images/erweima-tu.jpg" /></a>
                    </div>
                </li>
                <div style="clear:both;"></div>
            </ul>
            <div style="clear:both;"></div>
        </div>
    </div>
    
    <!--logo search 开始-->
    <div class="hd-info1 shop-he-info1 w1200">
    	<div class="logo f-l">
        	<h1><a href="#" title="中林网站"><img src="/Public/Home/images/logo.jpg" /></a></h1>
        </div>
         <?php if(empty($_SESSION['user'])): ?><div class="dianji f-r">
        	<div class="btn1">

                <a href="<?php echo U('Login/reg');?>"><button class="btn1-l">注册</button></a>
                <a href="<?php echo U('Login/index');?>"><button class="btn1-r">登录</button></a>
   
                <div style="clear:both;"></div>
            </div>
        </div><?php endif; ?>
        
        <div class="search f-r">
        	<ul class="sp">
            	<li class="current" ss-search="sp"><a href="JavaScript:;">商品</a></li>
            	<div style="clear:both;"></div>
            </ul>
            <div class="srh">
            	<div class="ipt f-l">
                	<input type="text" placeholder="搜索商品..." ss-search-show="sp" />
                    <input type="text" placeholder="搜索店铺..." ss-search-show="dp" style="display:none;" />
                </div>
                <button class="f-r">搜 索</button>
                <div style="clear:both;"></div>
            </div>
            <ul class="sp2">
                <li><a href="#">绿豆</a></li>
                <li><a href="#">大米</a></li>
                <li><a href="#">驱蚊</a></li>
                <li><a href="#">洗面奶</a></li>
                <li><a href="#">格力空调</a></li>
                <li><a href="#">洗发护发</a></li>
                <li><a href="#">葡萄 </a></li>
                <li><a href="#">脉动</a></li>
                <li><a href="#">海鲜水产</a></li>
                <div style="clear:both;"></div>
            </ul>
        </div>
        <div style="clear:both;"></div>
    </div>
    
    <!--nav 开始-->
    <div style="border-bottom:2px solid #F09E0B;">
    	<div class="nav w1200">
    	<a href="JavaScript:;" class="sp-kj" kj="">
        	商品分类快捷
        </a>
        <div class="kj-show2 none" kj-sh="">
            <div class="kj-info1" mg="shiping">
            	<dl class="kj-dl1">
               		<dt><a href="#">食品/饮料/酒水</a></dt>
                    <dd>
                    	零食/糖果/巧克力、饼干/糕点、生鲜<br />
                        酒水饮料/乳饮料、调味/速食<br />
                        粮油/干货、冲调制品
                    </dd>
                </dl>
                <div class="kj-if-show" mg2="shiping">
                	<dl>
                    	<dt>零食/糖果/巧克力</dt>
                        <dd>
                        	<a href="#">坚果迷线</a>
                        	<a href="#">膨化食品</a>
                        	<a href="#">糖果果冻/巧克力/口香糖</a>
                        	<a href="#">肉类/熟食食品</a>
                        	<a href="#">进口食品</a>
                        </dd>
                        <div style="clear:both;"></div>
                    </dl>
                    <dl>
                    	<dt>零食/糖果/巧克力</dt>
                        <dd>
                        	<a href="#">坚果迷线</a>
                        	<a href="#">膨化食品</a>
                        	<a href="#">糖果果冻/巧克力/口香糖</a>
                        	<a href="#">肉类/熟食食品</a>
                        	<a href="#">进口食品</a>
                        </dd>
                        <div style="clear:both;"></div>
                    </dl>
                    <dl>
                    	<dt>零食/糖果/巧克力</dt>
                        <dd>
                        	<a href="#">坚果迷线</a>
                        	<a href="#">膨化食品</a>
                        	<a href="#">糖果果冻/巧克力/口香糖</a>
                        	<a href="#">肉类/熟食食品</a>
                        	<a href="#">进口食品</a>
                        </dd>
                        <div style="clear:both;"></div>
                    </dl>
                    <dl>
                    	<dt>零食/糖果/巧克力</dt>
                        <dd>
                        	<a href="#">坚果迷线</a>
                        	<a href="#">膨化食品</a>
                        	<a href="#">糖果果冻/巧克力/口香糖</a>
                        	<a href="#">肉类/熟食食品</a>
                        	<a href="#">进口食品</a>
                        </dd>
                        <div style="clear:both;"></div>
                    </dl>
                    <dl>
                    	<dt>零食/糖果/巧克力</dt>
                        <dd>
                        	<a href="#">坚果迷线</a>
                        	<a href="#">膨化食品</a>
                        	<a href="#">糖果果冻/巧克力/口香糖</a>
                        	<a href="#">肉类/熟食食品</a>
                        	<a href="#">进口食品</a>
                        </dd>
                        <div style="clear:both;"></div>
                    </dl>
                    <dl style="border-bottom:none;">
                    	<dt>零食/糖果/巧克力</dt>
                        <dd>
                        	<a href="#">坚果迷线</a>
                        	<a href="#">膨化食品</a>
                        	<a href="#">糖果果冻/巧克力/口香糖</a>
                        	<a href="#">肉类/熟食食品</a>
                        	<a href="#">进口食品</a>
                        </dd>
                        <div style="clear:both;"></div>
                    </dl>
                </div>
            </div>
            <div class="kj-info1" mg="muying">
            	<dl class="kj-dl1">
               		<dt><a href="#">母婴用品/玩具</a></dt>
                    <dd>
                    	奶粉/辅食、尿裤/湿巾、玩具<br />
                        宝宝喂养/洗护清洁
                    </dd>
                </dl>
                <div class="kj-if-show" mg2="muying">
                	<dl>
                    	<dt>母婴用品/玩具</dt>
                        <dd>
                        	<a href="#">巧克力</a>
                        	<a href="#">坚果迷线</a>
                        	<a href="#">膨化食品</a>
                        	<a href="#">巧克力</a>
                        	<a href="#">巧克力</a>
                        	<a href="#">肉类/熟食食品</a>
                        	<a href="#">进口食品</a>
                        </dd>
                        <div style="clear:both;"></div>
                    </dl>
                    <dl>
                    	<dt>母婴用品/玩具</dt>
                        <dd>
                        	<a href="#">坚果迷线</a>
                        	<a href="#">巧克力</a>
                        	<a href="#">膨化食品</a>
                        	<a href="#">口香糖</a>
                        	<a href="#">巧克力</a>
                        	<a href="#">肉类/熟食食品</a>
                        	<a href="#">进口食品</a>
                        </dd>
                        <div style="clear:both;"></div>
                    </dl>
                    <dl>
                    	<dt>母婴用品/玩具</dt>
                        <dd>
                        	<a href="#">坚果迷线</a>
                        	<a href="#">巧克力</a>
                        	<a href="#">膨食品</a>
                        	<a href="#">糖克力/口香糖</a>
                        	<a href="#">肉品</a>
                        	<a href="#">巧克力</a>
                        	<a href="#">进口食品</a>
                        	<a href="#">巧克力</a>
                        </dd>
                        <div style="clear:both;"></div>
                    </dl>
                    <dl>
                    	<dt>母婴用品/玩具</dt>
                        <dd>
                        	<a href="#">巧克力</a>
                        	<a href="#">坚果线</a>
                        	<a href="#">巧克力</a>
                        	<a href="#">膨食品</a>
                        	<a href="#">果冻/克口香糖</a>
                        	<a href="#">巧克力</a>
                        	<a href="#">肉类/熟食食品</a>
                        	<a href="#">巧克力</a>
                        	<a href="#">进食品</a>
                        </dd>
                        <div style="clear:both;"></div>
                    </dl>
                    <dl>
                    	<dt>母婴用品/玩具</dt>
                        <dd>
                        	<a href="#">迷线</a>
                        	<a href="#">巧克力</a>
                        	<a href="#">膨化品</a>
                        	<a href="#">巧克力</a>
                        	<a href="#">糖果力/口香糖</a>
                        	<a href="#">巧克力</a>
                        	<a href="#">肉类/熟食食品</a>
                        	<a href="#">进口食品</a>
                        </dd>
                        <div style="clear:both;"></div>
                    </dl>
                    <dl style="border-bottom:none;">
                    	<dt>母婴用品/玩具</dt>
                        <dd>
                        	<a href="#">迷线</a>
                        	<a href="#">膨化食品</a>
                        	<a href="#">糖果克力/口香糖</a>
                        	<a href="#">肉类/熟品</a>
                        	<a href="#">进食品</a>
                        </dd>
                        <div style="clear:both;"></div>
                    </dl>
                </div>
            </div>
            <div class="kj-info1" mg="chuju">
            	<dl class="kj-dl1">
               		<dt><a href="#">厨具餐具/家用清洁/纸品</a></dt>
                    <dd>
                    	纸品湿巾、衣物清洁护理、家庭清洁<br />
                        清洁、厨具、烹饪用具/厨房配件<br />
                        食物保鲜容器
                    </dd>
                </dl>
                <div class="kj-if-show" mg2="chuju">
                	<dl>
                    	<dt>厨具餐具</dt>
                        <dd>
                        	<a href="#">坚果迷线</a>
                        	<a href="#">膨化食品</a>
                        	<a href="#">糖果果冻/巧克力/口香糖</a>
                        	<a href="#">肉类/熟食食品</a>
                        	<a href="#">进口食品</a>
                        </dd>
                        <div style="clear:both;"></div>
                    </dl>
                    <dl>
                    	<dt>厨具餐具</dt>
                        <dd>
                        	<a href="#">坚果迷线</a>
                        	<a href="#">膨化食品</a>
                        	<a href="#">糖果果冻/巧克力/口香糖</a>
                        	<a href="#">肉类/熟食食品</a>
                        	<a href="#">进口食品</a>
                        </dd>
                        <div style="clear:both;"></div>
                    </dl>
                    <dl>
                    	<dt>厨具餐具</dt>
                        <dd>
                        	<a href="#">坚果迷线</a>
                        	<a href="#">膨化食品</a>
                        	<a href="#">糖果果冻/巧克力/口香糖</a>
                        	<a href="#">肉类/熟食食品</a>
                        	<a href="#">进口食品</a>
                        </dd>
                        <div style="clear:both;"></div>
                    </dl>
                    <dl>
                    	<dt>厨具餐具</dt>
                        <dd>
                        	<a href="#">坚果迷线</a>
                        	<a href="#">膨化食品</a>
                        	<a href="#">糖果果冻/巧克力/口香糖</a>
                        	<a href="#">肉类/熟食食品</a>
                        	<a href="#">进口食品</a>
                        </dd>
                        <div style="clear:both;"></div>
                    </dl>
                    <dl>

                    	<dt>厨具餐具</dt>
                        <dd>
                        	<a href="#">坚果迷线</a>
                        	<a href="#">膨化食品</a>
                        	<a href="#">糖果果冻/巧克力/口香糖</a>
                        	<a href="#">肉类/熟食食品</a>
                        	<a href="#">进口食品</a>
                        </dd>
                        <div style="clear:both;"></div>
                    </dl>
                    <dl style="border-bottom:none;">
                    	<dt>厨具餐具</dt>
                        <dd>
                        	<a href="#">坚果迷线</a>
                        	<a href="#">膨化食品</a>
                        	<a href="#">糖果果冻/巧克力/口香糖</a>
                        	<a href="#">肉类/熟食食品</a>
                        	<a href="#">进口食品</a>
                        </dd>
                        <div style="clear:both;"></div>
                    </dl>
                </div>
            </div>
            <div class="kj-info1" mg="meizhuang">
            	<dl class="kj-dl1">
               		<dt><a href="#">美妆洗护/个人护理洗发护发</a></dt>
                    <dd>
                    	洗浴用品/身体护理、口腔护理、面部护肤<br />
                        女性护理、彩妆/美容工具、男士护理
                    </dd>
                </dl>
                <div class="kj-if-show" mg2="meizhuang">
                	<dl>
                    	<dt>美妆洗护</dt>
                        <dd>
                        	<a href="#">坚果迷线</a>
                        	<a href="#">膨化食品</a>
                        	<a href="#">糖果果冻/巧克力/口香糖</a>
                        	<a href="#">肉类/熟食食品</a>
                        	<a href="#">进口食品</a>
                        </dd>
                        <div style="clear:both;"></div>
                    </dl>
                    <dl>
                    	<dt>美妆洗护</dt>
                        <dd>
                        	<a href="#">坚果迷线</a>
                        	<a href="#">膨化食品</a>
                        	<a href="#">糖果果冻/巧克力/口香糖</a>
                        	<a href="#">肉类/熟食食品</a>
                        	<a href="#">进口食品</a>
                        </dd>
                        <div style="clear:both;"></div>
                    </dl>
                    <dl>
                    	<dt>美妆洗护</dt>
                        <dd>
                        	<a href="#">坚果迷线</a>
                        	<a href="#">膨化食品</a>
                        	<a href="#">糖果果冻/巧克力/口香糖</a>
                        	<a href="#">肉类/熟食食品</a>
                        	<a href="#">进口食品</a>
                        </dd>
                        <div style="clear:both;"></div>
                    </dl>
                    <dl>
                    	<dt>美妆洗护</dt>
                        <dd>
                        	<a href="#">坚果迷线</a>
                        	<a href="#">膨化食品</a>
                        	<a href="#">糖果果冻/巧克力/口香糖</a>
                        	<a href="#">肉类/熟食食品</a>
                        	<a href="#">进口食品</a>
                        </dd>
                        <div style="clear:both;"></div>
                    </dl>
                    <dl>
                    	<dt>美妆洗护</dt>
                        <dd>
                        	<a href="#">坚果迷线</a>
                        	<a href="#">膨化食品</a>
                        	<a href="#">糖果果冻/巧克力/口香糖</a>
                        	<a href="#">肉类/熟食食品</a>
                        	<a href="#">进口食品</a>
                        </dd>
                        <div style="clear:both;"></div>
                    </dl>
                    <dl style="border-bottom:none;">
                    	<dt>美妆洗护</dt>
                        <dd>
                        	<a href="#">坚果迷线</a>
                        	<a href="#">膨化食品</a>
                        	<a href="#">糖果果冻/巧克力/口香糖</a>
                        	<a href="#">肉类/熟食食品</a>
                        	<a href="#">进口食品</a>
                        </dd>
                        <div style="clear:both;"></div>
                    </dl>
                </div>
            </div>
            <div class="kj-info1" style="border-bottom:none;" mg="jiafang">
            	<dl class="kj-dl1" style="padding:6px 10px;">
               		<dt><a href="#">家居/家纺</a></dt>
                    <dd>
                    	浴室用品、餐具水具<br />
                        收纳/居家日用、针织纺品
                    </dd>
                </dl>
                <div class="kj-if-show" mg2="jiafang">
                	<dl>
                    	<dt>家居/家纺</dt>
                        <dd>
                        	<a href="#">坚果迷线</a>
                        	<a href="#">膨化食品</a>
                        	<a href="#">糖果果冻/巧克力/口香糖</a>
                        	<a href="#">肉类/熟食食品</a>
                        	<a href="#">进口食品</a>
                        </dd>
                        <div style="clear:both;"></div>
                    </dl>
                    <dl>
                    	<dt>家居/家纺</dt>
                        <dd>
                        	<a href="#">坚果迷线</a>
                        	<a href="#">膨化食品</a>
                        	<a href="#">糖果果冻/巧克力/口香糖</a>
                        	<a href="#">肉类/熟食食品</a>
                        	<a href="#">进口食品</a>
                        </dd>
                        <div style="clear:both;"></div>
                    </dl>
                    <dl>
                    	<dt>家居/家纺</dt>
                        <dd>
                        	<a href="#">坚果迷线</a>
                        	<a href="#">膨化食品</a>
                        	<a href="#">糖果果冻/巧克力/口香糖</a>
                        	<a href="#">肉类/熟食食品</a>
                        	<a href="#">进口食品</a>
                        </dd>
                        <div style="clear:both;"></div>
                    </dl>
                    <dl>
                    	<dt>家居/家纺</dt>
                        <dd>
                        	<a href="#">坚果迷线</a>
                        	<a href="#">膨化食品</a>
                        	<a href="#">糖果果冻/巧克力/口香糖</a>
                        	<a href="#">肉类/熟食食品</a>
                        	<a href="#">进口食品</a>
                        </dd>
                        <div style="clear:both;"></div>
                    </dl>
                    <dl>
                    	<dt>家居/家纺</dt>
                        <dd>
                        	<a href="#">坚果迷线</a>
                        	<a href="#">膨化食品</a>
                        	<a href="#">糖果果冻/巧克力/口香糖</a>
                        	<a href="#">肉类/熟食食品</a>
                        	<a href="#">进口食品</a>
                        </dd>
                        <div style="clear:both;"></div>
                    </dl>
                    <dl>
                    	<dt>家居/家纺</dt>
                        <dd>
                        	<a href="#">坚果迷线</a>
                        	<a href="#">膨化食品</a>
                        	<a href="#">糖果果冻/巧克力/口香糖</a>
                        	<a href="#">肉类/熟食食品</a>
                        	<a href="#">进口食品</a>
                        </dd>
                        <div style="clear:both;"></div>
                    </dl>
                    <dl>
                    	<dt>家居/家纺</dt>
                        <dd>
                        	<a href="#">坚果迷线</a>
                        	<a href="#">膨化食品</a>
                        	<a href="#">糖果果冻/巧克力/口香糖</a>
                        	<a href="#">肉类/熟食食品</a>
                        	<a href="#">进口食品</a>
                        </dd>
                        <div style="clear:both;"></div>
                    </dl>
                    <dl>
                    	<dt>家居/家纺</dt>
                        <dd>
                        	<a href="#">坚果迷线</a>
                        	<a href="#">膨化食品</a>
                        	<a href="#">糖果果冻/巧克力/口香糖</a>
                        	<a href="#">肉类/熟食食品</a>
                        	<a href="#">进口食品</a>
                        </dd>
                        <div style="clear:both;"></div>
                    </dl>
                    <dl>
                    	<dt>家居/家纺</dt>

                        <dd>
                        	<a href="#">坚果迷线</a>
                        	<a href="#">膨化食品</a>
                        	<a href="#">糖果果冻/巧克力/口香糖</a>
                        	<a href="#">肉类/熟食食品</a>
                        	<a href="#">进口食品</a>
                        </dd>
                        <div style="clear:both;"></div>
                    </dl>
                    <dl>
                    	<dt>家居/家纺</dt>
                        <dd>
                        	<a href="#">坚果迷线</a>
                        	<a href="#">膨化食品</a>
                        	<a href="#">糖果果冻/巧克力/口香糖</a>
                        	<a href="#">肉类/熟食食品</a>
                        	<a href="#">进口食品</a>
                        </dd>
                        <div style="clear:both;"></div>
                    </dl>
                    <dl style="border-bottom:none;">
                    	<dt>家居/家纺</dt>
                        <dd>
                        	<a href="#">坚果迷线</a>
                        	<a href="#">膨化食品</a>
                        	<a href="#">糖果果冻/巧克力/口香糖</a>
                        	<a href="#">肉类/熟食食品</a>
                        	<a href="#">进口食品</a>
                        </dd>
                        <div style="clear:both;"></div>
                    </dl>
                </div>
            </div>
        </div>
        <ul>
        	<li><a href="#">在线商城</a></li>
        	<li><a href="#">餐饮娱乐</a></li>
        	<li><a href="#">家政服务</a></li>
        	<li><a href="#">美容美发</a></li>
        	<li><a href="#">教育培训</a></li>
        	<li><a href="#">汽车房产</a></li>
        	<li><a href="#">家居建材</a></li>
        	<li><a href="#">二手市场</a></li>
            <div style="clear:both;"></div>
        </ul>
        <div style="clear:both;"></div>
    </div>
    </div>
    
    <!--内容开始-->
    <div class="personal w1200">
    	<div class="personal-left f-l">
        	<div class="personal-l-tit">
            	<h3>个人中心</h3>
            </div>
                   <ul>
          <li class="per-li2"><a href="<?php echo U('User/index');?>">个人资料<span>></span></a></li>
          <li class="per-li3"><a href="<?php echo U('User/order');?>">我的订单<span>></span></a></li>
          <li class="per-li6"><a href="<?php echo U('User/address');?>">管理收货地址<span>></span></a></li>
          <li class="per-li10"><a href="#">会员积分<span>></span></a></li>
        </ul>
        </div>
    	<div class="order-right f-r">
        	<div class="order-hd">
            	<dl class="f-l">
                	<dt>
                    	<a href="#"><img src="/Public/Home/images/data-tu2.gif" /></a>
                    </dt>
                    <dd>
                    	<h3><a href="#">RH了</a></h3>
                        <p>zhao601884596</p>
                    </dd>
                    <div style="clear:both;"></div>
                </dl>
                <div class="ord-dai f-l">
                	<p>待付款<span>1</span></p>
                	<p>待发货<span>1</span></p>
                	<p>待收货<span>1</span></p>
                	<p>待评价<span>1</span></p>
                </div>
                <div style="clear:both;"></div>
            </div>
            <div class="order-md">
            	
                <div class="md-ft"  style="margin-bottom:30px; border-top:none; ">
                  <table width="959" border="0" cellpadding="0" cellspacing="0">
                       <tr>
                	<td width="150" align="center">宝贝
                	  </td>
                    <td width="282" align="center"><p class="md-p2">商品信息</p></td>
                    <td width="203" align="center"><p class="md-p5">金额（元）</p></td>
                    <td width="60" align="center">总价(元)</td>
                    <td width="135" align="center">订单状态</td>
                    <td width="189" align="center"><p class="md-p6">操作</p></td>
                    </tr>
                    </table>
                </div>
            <!--  第一层循环   -->    
             <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="md-info">
              <div class="md-tit" style="border-bottom:0px; border-top:#CCC 1px solid; position:relative;">
                	<h3>订单号 <span style="margin-left:20px"><?php echo ($vo["sn"]); ?></span><span style="margin-left:20px;"> <?php echo (date('Y-m-d:h:i:s',$vo['addtime'] )); ?></span></h3>
               <a href="#" style="position:absolute; display:inline-block; top:13px; right:10px;  width:18px; height:17px;background:url(/Public/home/images/del.png) no-repeat -239px -176px; " title="删除"></a>
                </div>
                 
                <div class="dai-con">
                  <table width="959" border="0" cellpadding="0" cellspacing="0">
                  <!--  第二层循环 -->
                  <?php  $k=count($vo['son']) ?>
                  <?php if(is_array($vo['son'])): $i = 0; $__LIST__ = $vo['son'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cp_vo): $mod = ($i % 2 );++$i;?><tr  height="90">
                     <td width="40" align="center"><input type="checkbox"  name="hobby" value="" style="margin:0px;" /></td>
                     <td width="103">  
                                <a href="#" class="f-l"><img src="/Uploads/<?php echo ($cp_vo["img"]); ?>" width="80" height="80" /></a></td>
                     <td width="282">	<p><?php echo ($cp_vo["title"]); ?>(<?php echo ($cp_vo["number"]); ?>件)</p></td>
                     <td width="209" align="center"><p class="d-r-p3">¥ <?php echo ($cp_vo['price']*$cp_vo['number']); ?></p></td>  
                     <?php if($i == 1): ?><td width="40" rowspan="<?php echo ($k); ?>" style="color:#F00">¥<?php echo ($vo["total"]); ?></td>
                     <td width="134" align="center" rowspan="<?php echo ($k); ?>">
                     <?php if($vo['status'] == 1): ?><span ><a href="<?php echo U('Car/result',array('id'=>$vo['id']));?>" style="display:inline-block; width:40px; height:30px; text-align:center; line-height:30px; background:#F60; border-radius:6px; color:#FFF">支付</a></span><?php else: ?>已支付<?php endif; ?></td><td width="191" align="center" rowspan="<?php echo ($k); ?>"></td><?php endif; ?>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                       <!--  结束第二层循环   -->
                  </table>
                </div>

                </div><?php endforeach; endif; else: echo "" ;endif; ?>
                
             <!-- 第一层 订单循环结束    -->   
                
                
                
                <!--分页-->
                <div class="md-ft">
                	<P class="md-p1"><input type="checkbox" name="hobby" value=""><span>全选</span></P>
                <a href="#">删除</a></div>
            </div>
            
        </div>
        <div style="clear:both;"></div>
    </div>
    
   <!--留言板块--><!--底部服务-->
    <div class="ft-service">
    	<div class="w1200">
        	<div class="sv-con-l2 f-l">
            	<dl>
                	<dt><a href="#">新手上路</a></dt>
                    <dd>
                    	<a href="#">购物流程</a>
                    	<a href="#">在线支付</a>
                    </dd>
                </dl>
                <dl>
                	<dt><a href="#">配送方式</a></dt>
                    <dd>
                    	<a href="#">货到付款区域</a>
                    	<a href="#">配送费标准</a>
                    </dd>
                </dl>
                <dl>
                	<dt><a href="#">购物指南</a></dt>
                    <dd>
                    	<a href="#">常见问题</a>
                    	<a href="#">订购流程</a>
                    </dd>
                </dl>
                <dl>
                	<dt><a href="#">售后服务</a></dt>
                    <dd>
                    	<a href="#">售后服务保障</a>
                    	<a href="#">退款说明</a>
                    	<a href="#">新手选购商品总则</a>
                    </dd>
                </dl>
                <dl>
                	<dt><a href="#">关于我们</a></dt>
                    <dd>
                    	<a href="#">投诉与建议</a>
                    </dd>
                </dl>
                <div style="clear:both;"></div>
            </div>
        	<div class="sv-con-r2 f-r">
            	<p class="sv-r-tle">187-8660-5539</p>
            	<p>周一至周五9:00-17:30</p>
            	<p>（仅收市话费）</p>
            	<a href="#" class="zxkf">24小时在线客服</a>
            </div>
            <div style="clear:both;"></div>
        </div>
    </div>
    
    <!--底部 版权-->
    <div class="footer w1200">
    	<p>
        	<a href="#">关于我们</a><span>|</span>
        	<a href="#">友情链接</a><span>|</span>
        	<a href="#">宅客微购社区</a><span>|</span>
        	<a href="#">诚征英才</a><span>|</span>
        	<a href="#">商家登录</a><span>|</span>
        	<a href="#">供应商登录</a><span>|</span>
        	<a href="#">热门搜索</a><span>|</span>
        	<a href="#">宅客微购新品</a><span>|</span>
        	<a href="#">开放平台</a>
        </p>
        <p>
        	沪ICP备13044278号<span>|</span>合字B1.B2-20130004<span>|</span>营业执照<span>|</span>互联网药品信息服务资格证<span>|</span>互联网药品交易服务资格证
        </p>
    </div>
    
    <!--查看物流 弹窗-->
    <div class="view-logistics">
    	<div class="view-bg"></div>
        <div class="view-con">
        	<div class="view-tit">
            	<h3>物流信息</h3>
                <a href="JavaScript:;" guanbi="">
                	<img src="/Public/Home/images/close-select-city.gif" />
                </a>
                <div style="clear:both;"></div>
            </div>
            <div class="view-bd">
            	<ul>
                	<li class="bd-pdl-li after"><span>1</span>2015-08-06　周四　　14:06:53您的订单开始处理</li>
                	<li class="after"><span>2</span>14:08:44您的订单待配货</li>
                	<li><span>3</span>14:16:04您的包裹已出库</li>
                	<li><span>4</span>14:16:03商家正通知快递公司揽件</li>
                	<li><span>5</span>21:47:54【惠州市】圆通速递 广东省惠州市惠东县收件员 已揽件</li>
                	<li class="bd-pdb-li"><span>6</span>22:13:51广东省惠州市惠东县公司 已发出</li>
                    <li class="bd-pdl-li"><span>7</span>2015-08-07　周五　　04:57:33广州转运中心公司 已收入</li>
                	<li><span>8</span>04:58:54广州转运中心公司 已发出</li>
                	<li><span>9</span>2015-08-08周六22:46:43重庆转运中心公司 已收入</li>
                	<li class="bd-pdb-li"><span>10</span>23:01:49【重庆市】重庆转运中心 已发出</li>
                    <li class="bd-pdl-li"><span>11</span>2015-08-09　周日　　00:57:11【重庆市】快件已到达 重庆市南岸区</li>
                	<li><span>12</span>11:14:52重庆市南岸区 已收入</li>
                	<li><span>13</span>11:14:52【重庆市】重庆市南岸区派件员：李天生 13330284757正在为您派件</li>
                	<li class="bd-bd-li"><span>14</span>15:53:14【重庆市】重庆市南岸区公司 已签收 签收人：保安，感谢使用圆通速递，期待再次为您服务</li>
                </ul>
                <p class="sign">您的包裹已被签收！</p>
            </div>
        </div>
    </div>
    
</body>
</html>