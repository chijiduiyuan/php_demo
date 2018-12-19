<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>个人资料</title>
<link rel="stylesheet" type="text/css" href="/dshop/Public/Home/css/style.css" />
<link rel="stylesheet" type="text/css" href="/dshop/Public/Home/css/shopping-mall-index.css" />
<script type="text/javascript" src="/dshop/Public/Home/js/jquery.js"></script>
<script type="text/javascript" src="/dshop/Public/Home/js/zhonglin.js"></script>
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
                    	<a href="#"><img src="/dshop/Public/Home/images/erweima-tu.jpg" /></a>
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
        	<h1><a href="#" title="中林网站"><img src="/dshop/Public/Home/images/logo.jpg" /></a></h1>
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
                 <form action="<?php echo U('Index/index');?>" method="post">
                	<input type="text" name="cpname" placeholder="搜索商品..." ss-search-show="sp" />
                   
                </div>
                <button class="f-r">搜 索</button>
                </form>
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
      <div class="personal-r f-r">
          <form method="post" action="<?php echo U('User/user_modi');?>" enctype="multipart/form-data">
        	<div class="personal-right">
                <div class="personal-r-tit">
                    <h3>完善个人资料</h3>
                </div>
                <div class="data-con">
                	<div class="dt1">
                    	<p class="f-l">当前头像：</p>
                        <div class="touxiang f-l">
                        	<div class="tu f-l">
                            	<a href="#">
                                    <img src="/dshop/Uploads/<?php echo ($list["pic"]); ?>" />
                                    <input type="file" name="pic"  class="img1" />
                                    <input type="hidden" name="pic1" value="<?php echo ($list["pic"]); ?>" />
                                </a>
                            </div>
                            <a href="JavaScript:;" class="sc f-l" shangchuang="">上传头像</a>
                            <div style="clear:both;"></div>
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                    <div class="dt1">
                    	<p class="dt-p f-l">昵称：</p>
                            <input type="text" placeholder="昵称" name="nickname" value="<?php echo ($list["nickname"]); ?>" />      
                           <input type="hidden" name="id" value="<?php echo ($list["id"]); ?>" />
                        <div style="clear:both;"></div>
                    </div>
                    <div class="dt1">
                    	<p class="dt-p f-l">用户名：</p>
                        <input type="text" value="<?php echo ($list["username"]); ?>" style="border:0px" name="username" readonly /> 
                        <div style="clear:both;"></div>
                    </div>
                    <div class="dt1 dt2">
                    	<p class="dt-p f-l">性别：</p>
                        <input type="radio" name="sex" value="1" id="nan" <?php if($list['sex'] == 1): ?>checked<?php endif; ?> ></input><span><label for="nan">男</label></span>
                        <input type="radio" name="sex" value="0" id="women" <?php if($list['sex'] == 0): ?>checked<?php endif; ?>></input><span><label for="women">女</label></span>
                        <div style="clear:both;"></div>
                    </div>
                    <div class="dt1 dt3">
                   	  <p class="dt-p f-l">手机号：</p>
                        <input type="text" value="<?php echo ($list["tel"]); ?>"  name="tel"/>
                     
                        <div style="clear:both;"></div>
                    </div>
                     <div class="dt1 dt4">
                   	  <p class="dt-p f-l " id="very" style="background:#F90; color:#FFF; cursor:pointer;">获取验证码</p>
                      <input type="text" name="code" id="code" />
                        <div style="clear:both;"></div>
                    </div> 
                    
                    
                    
                    <div class="dt1">
                   	  <p class="dt-p f-l">邮箱：</p>
                        <input type="text" value="<?php echo ($list["email"]); ?>" name="email"/>
                        <div style="clear:both;"></div>
                    </div>
                    <button class="btn-pst">保存</button>
                </div>
            </div>
        </div>
        </form>
        <div style="clear:both;"></div>
    </div>
    
    <!--上传头像弹窗
    <div class="tanchuang">
    	<div class="t-c-bg"></div>
    	<div class="t-c-con">
        	<div class="tc-tit">
            	<h3>上传头像</h3>
                <a href="JavaScript:;" delete=""><img src="/dshop/Public/Home/images/t-c-del.gif" /></a>
                <div style="clear:both;"></div>
            </div>
            <div class="tc-con">
            	<a href="#"><img src="/dshop/Public/Home/images/tc-tu.gif" /></a>
                <button>保存头像</button>
            </div>
        </div>
    </div>-->
    
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
</body>

</html>

<script>
      $(function(){
		   
		    $("#very").click(function(){
				    $.ajax({
						   url: "<?php echo U('Car/tel');?>",	
						   type:'POST',
						   async:true,
						   dataType:"json",
						   data:{},
						   success: function(data){
							   alert(data.info);
							   },
						});
				});
		  });

</script>