<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>商品详情（餐饮）</title>
<link rel="stylesheet" type="text/css" href="/Public/Home/css/style.css" />
<link rel="stylesheet" type="text/css" href="/Public/Home/css/shopping-mall-index.css" />
<link rel="stylesheet" type="text/css" href="/Public/Home/css/right.css" />
<style>
/* box */
.box{width:400px; float:left;}
.tb-pic a{display:table-cell;text-align:center;vertical-align:middle;}
.tb-pic a img{vertical-align:middle;}
.tb-pic a{*display:block;*font-family:Arial;*line-height:1;}
.tb-thumb{margin:10px 0 0;overflow:hidden;}
.tb-thumb li{background:none repeat scroll 0 0 transparent;float:left;height:42px;margin:0 6px 0 0;overflow:hidden;padding:1px;}
.tb-s310, .tb-s310 a{height:400px;width:400px;}
.tb-s310, .tb-s310 img{max-height:400px;max-width:400px;}
.tb-s310 a{*font-size:271px;}
.tb-s40 a{*font-size:35px;}
.tb-s40, .tb-s40 a{height:40px;width:40px;}
.tb-booth{border:1px solid #CDCDCD;position:relative;z-index:1;}
.tb-thumb .tb-selected{background:none repeat scroll 0 0 #C30008;height:40px;padding:2px; opacity:0.6;}
.tb-thumb .tb-selected div{background-color:#FFFFFF;border:medium none;}
.tb-thumb li div{border:1px solid #CDCDCD;}
div.zoomDiv{z-index:999;position:absolute;top:0px;left:0px;width:200px;height:200px;background:#ffffff;border:1px solid #CCCCCC;display:none;text-align:center;overflow:hidden;}
div.zoomMask{position:absolute;background:url("/Public/Home/images/mask.png") repeat scroll 0 0 transparent;cursor:move;z-index:1;}</style>

<style>
   *{ margin:0px; padding:0px; font-size:12px;}
   .menu{ display:table; margin:50px auto;}
   .pic{
	padding: 10px;
	width: 200px;
	border: #CCC 1px solid;
	margin-right: 10px;
	float: left;
}
 .pic img{ width:148px; height:148px; margin-left:30px; border-radius:50%;}
   .price{ color:#F00; line-height:30px; font-size:16px; }
   .title{ color:#930; line-height:30px; font-size:14px; }
   .add{ background:#F60; color:#FFF; width:140px; height:40px; line-height:40px; text-align:center; border:none; cursor:pointer;}
   .layer{ position:fixed; right:0px; top:0px; background:#000; height:100%; width:40px; color:#FFF;}
  .gwc{ position:absolute; top:20%; width:10px; left:15px; line-height:20px; z-index:100}
  #msg{position:fixed; top:100px; right:35px; z-index:99; width:0px; height:52px; line-height:52px; font-size:20px; text-align:center; color:#fff; background:#360; display:none; overflow:hidden;}	
  #tab{ position:absolute; top:10px;  right:35px; min-height:400px; border-radius:5px;
  background:rgba(255,255,255,1); border:#CCC 1px solid; display:none;
  z-index:-100;
  
  }
#tab td{ border-bottom:#CCC 1px solid}
#tab td input{ width:60px; height:20px; text-align:center; color:#F00}
#tab td input.jia,#tab td input.jian{ width:30px; height:20px;}
</style>
<script type="text/javascript" src="/Public/Home/js/jquery.js"></script>
<script type="text/javascript" src="/Public/Home/js/zhonglin.js"></script>
<script type="text/javascript" src="/Public/Home/js/jquery.imagezoom.min.js"></script>

</head>

<body >

<!-- 右边固定  -->
<div class="r-fixed">
<div id="msg">加入购物车成功</div>

     <div class="r-menu">
          <span></span>
           <div id="end"></div>
          <a href="javascript:void()"  id="gwc">购物车</a></span>
            <table width="400"  border="0" id="tab" cellpadding="0" cellspacing="0">
        
          
          <tr>
  <td width="108" height="40" align="center" ><span id="clearall" style="width:60px; height:30px; padding:4px; text-align:center; display:inline-block;line-height:30px; background:#F30; color:#FFF; cursor:pointer">清空购物车</span></td>
  <td><a href="<?php echo U('Car/jies');?>" style="width:60px; height:30px; text-align:center; display:inline-block;line-height:30px; background:#999; color:#FFF;">去结算</a></td>
  </tr>       
        </table>
          
          <i id="num">0</i>
     </div>
     <div class="r-menu1 menu-1"><p>我的订单</p></div>
     <div class="r-menu1 menu-2"><p>我的优惠券</p></div>
     <div class="r-menu1 menu-3"><p>我的收藏</p></div>
     <div class="r-menu1 menu-4"><p>客服服务</p></div>
</div>



	<!--top 开始-->
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
        	<li><a href="#">首页</a></li>
        	<li><a href="#">美食</a></li>
        	<li><a href="#">外卖</a></li>
        	<li><a href="#">休闲娱乐</a></li>
        	<li><a href="#">酒店</a></li>
            <div style="clear:both;"></div>
        </ul>
        <div style="clear:both;"></div>
    </div>
    </div>
    
    <!--内容开始-->
    <div class="details w1200">
    	<div class="deta-info1">
        	    <!--  放大镜  --> 
     <div class="box">
	<div class="tb-booth tb-pic tb-s310">
		<a href="/Uploads/<?php echo ($clist["cppic"]); ?>"><img src="/Uploads/<?php echo ($clist["spic"]); ?>" alt="美女" rel="/Uploads/<?php echo ($clist["cppic"]); ?>" class="jqzoom" /></a>
	</div>

	<!--<ul class="tb-thumb" id="thumblist">
           
  		<li class="tb-selected"><div class="tb-pic tb-s40"><a href="javascript:void()"><img src="/Public/Home/images/2-2.jpg" mid="/Public/Home/images/2-1.jpg" big="/Public/Home/images/2.jpg" width="40" height="40"></a></div></li>  
    
		<li ><div class="tb-pic tb-s40"><a href="javascript:void()"><img src="/Public/Home/images/01_small.jpg" mid="/Public/Home/images/01_mid.jpg" big="/Public/Home/images/01.jpg"></a></div></li>
		<li><div class="tb-pic tb-s40"><a href="javascript:void()"><img  src="/Public/Home/images/02_small.jpg" mid="/Public/Home/images/02_mid.jpg" big="/Public/Home/images/02.jpg"></a></div></li>
		<li><div class="tb-pic tb-s40"><a href="javascript:void()"><img src="/Public/Home/images/03_small.jpg" mid="/Public/Home/images/03_mid.jpg" big="/Public/Home/images/03.jpg"></a></div></li>
		<li><div class="tb-pic tb-s40"><a href="javascript:void()"><img src="/Public/Home/images/04_small.jpg" mid="/Public/Home/images/04_mid.jpg" big="/Public/Home/images/04.jpg"></a></div></li>
		<li><div class="tb-pic tb-s40"><a href="javascript:void()"><img src="/Public/Home/images/05_small.jpg" mid="/Public/Home/images/05_mid.jpg" big="/Public/Home/images/05.jpg"></a></div></li>
        
  		<li><div class="tb-pic tb-s40"><a href="javascript:void()"><img src="/Public/Home/images/1-2.jpg" mid="/Public/Home/images/1-1.jpg" big="/Public/Home/images/1.jpg" width="40" height="40"></a></div></li> 
        
	</ul>-->
	
</div>
     
    <!--  放大镜结束   --> 
            
        	<div class="dt-if1-m f-l">
            	<div class="dt-ifm-hd">
                	<h3><?php echo ($clist["name"]); ?></h3>
                	<p>&nbsp;</p>
                </div>
                <div class="dt-ifm-gojia">
                	<dl>
                    	<dt>宅购价</dt>
                        <dd>
                        	<p class="p1">
                               <span class="sp1">¥<?php echo $clist['price']*0.8 ?></span><span class="sp2"><?php echo ($clist["price"]); ?></span>
                            </p>
                            <p class="p2">
                           	<span class="sp1"><img src="/Public/Home/images/dt-ifm-sp1-img.gif" /></span></p>
                        </dd>
                        <div style="clear:both;"></div>
                    </dl>
                </div>
                <dl class="dt-ifm-spot">
                	<dt>活动</dt>
                    <dd>
                    	<P><span>满赠</span>本店满500.00元赠300.00元礼品（随机赠送）</P>
                    </dd>
                    <div style="clear:both;"></div>
                </dl>
                <dl class="dt-ifm-box1">
                	<dt>时间</dt>
                    <dd>
                    	<select>
                        	<option>请选择就餐日期</option>
                        	<option>2015-8-31</option>
                        	<option>2015-8-32</option>
                        </select>
                    	<select>
                        	<option>请选择就餐时段</option>
                        	<option>上午</option>
                        	<option>下午</option>
                        </select>
                        <p>如果提前两天预定，还可以享受折扣哦！</p>
                    </dd>
                    <div style="clear:both;"></div>
                </dl>
                <dl class="dt-ifm-box3">
                	<dt>数量</dt>
                    <dd>
                    	<a class="box3-left" href="JavaScript:;">-</a>
                        <input type="text" value="1" id="sno">
                    	<a class="box3-right" href="JavaScript:;">+</a>
                    </dd>
                    <div style="clear:both;"></div>
                </dl>
                <div class="dt-ifm-box4">
                	<button class="btn1">立即购买</button>
                	<button class="btn2" cpid="<?php echo ($clist["cpid"]); ?>">加入购物车</button>
                </div>
            </div>
            
        	<div class="dt-if1-r f-r">
        	  <div class="dt-ifr-fd">
               	  <div class="dt-ifr-tit">
                    	<h3>同类推荐</h3>
                    </div>
                    <dl>
                    	<dt><a href="#"><img src="/Public/Home/images/dt-ifr-fd-dt-tu.gif" /></a></dt>
                        <dd>
                        	<a href="#">【观音桥】罗兰钢管舞舞蹈体验</a>
                            <p>¥9.90</p>
                        </dd>
                        <div style="clear:both;"></div>
                    </dl>
                    <dl>
                    	<dt><a href="#"><img src="/Public/Home/images/dt-ifr-fd-dt-tu.gif" /></a></dt>
                        <dd>
                        	<a href="#">【观音桥】罗兰钢管舞舞蹈体验</a>
                            <p>¥9.90</p>
                        </dd>
                        <div style="clear:both;"></div>
                    </dl>
                </div>
            </div>
            <div style="clear:both;"></div>
        </div>
        
        <div class="deta-info2">
        	<div class="dt-if2-l f-l">
            	<div class="if2-l-box1">
                	<div class="if2-tit">
                    	<h3>浏览记录</h3>
                    </div>
                    <ul>
                    	<li>
                        	<a href="#"><img src="/Public/Home/images/if2-l-box1-tu1.gif" /></a>
                            <a class="if2-li-tit" href="#">乐事Lay's 无限薯片（翡翠黄瓜味）104g/罐</a>
                            <p>¥6.90</p>
                        </li>
                    </ul>
                </div>
                <div class="if2-l-box1" style="margin-top:18px;">
                	<div class="if2-tit">
                    	<h3>看了又看</h3>
                    </div>
                    <ul>
                      <li style="border-bottom:0;">
                       	  <a href="#"><img src="/Public/Home/images/if2-l-box1-tu1.gif" /></a>
                          <a class="if2-li-tit" href="#">乐事Lay's 无限薯片（翡翠黄瓜味）104g/罐</a>
                          <p>¥6.90</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="dt-if2-r f-r">
                <ul class="if2-tit2">
                    <li class="current" com-det="dt1"><a href="JavaScript:;">产品信息</a></li>
                   <!-- <li com-det="dt2"><a href="JavaScript:;">商品评论</a></li>
                    <li com-det="dt3"><a href="JavaScript:;">商家信息</a></li>-->
                    <div style="clear:both;"></div>
                </ul>
                
                <div style="border:1px solid #DBDBDB;" com-det-show="dt1">
                	<div class="if2-tu1">
                        <img src="/Public/Home/images/if2-tu1.gif" />
                        <img src="/Public/Home/images/if2-tu2.gif" style="margin-top:47px;" />
                        <div style="clear:both;"></div>
                    </div>
                    <div class="if2-tu2">
                        <img src="/Public/Home/images/if2-tu3.gif" />
                        <div style="clear:both;"></div>
                    </div>
                    <div class="if2-tu3">
                        <img src="/Public/Home/images/if2-tu4.gif" />
                    </div>
                    <ul class="if2-tu4">
                        <li><img src="/Public/Home/images/if2-tu5.gif" /></li>
                        <li><img src="/Public/Home/images/if2-tu6.gif" /></li>
                        <li><img src="/Public/Home/images/if2-tu7.gif" /></li>
                        <div style="clear:both;"></div>
                    </ul>
                </div>
                
                
                
                <div style="display:none;" com-det-show="dt2">
                	<dl class="if2-r-box2">
                	<dt>
                    	<p class="box2-p1">好评率</p>
                    	<p class="box2-p2">96.5%</p>
                    	<p class="box2-p3">共539人评论</p>
                    </dt>
                    <dd>
                    	<P>买过的人觉得</P>
                        <ul>
                        	<li><a href="#">香脆可口(198)</a></li>
                        	<li><a href="#">口感不错(160)</a></li>
                        	<li><a href="#">分量足(84)</a></li>
                        	<li><a href="#">味道不错(47)</a></li>
                        	<li><a href="#">价格便宜(34)</a></li>
                        	<li><a href="#">包装不错(30)</a></li>
                        	<li><a href="#">吃货必备(26)</a></li>
                        	<li><a href="#">送货快(14)</a></li>
                        	<li><a href="#">孩子喜欢(4)</a></li>
            				<div style="clear:both;"></div>
                        </ul>
                    </dd>
                    <div style="clear:both;"></div>
                </dl>
                	<div class="if2-r-box3">
                	<ul>
                    	<li class="current-li"><a href="#">全部（539）</a></li>
                    	<li><a href="#">好评（536）</a></li>
                    	<li><a href="#">中评（2）</a></li>
                    	<li><a href="#">差评（1）</a></li>
                    	<li><a href="#">图片（1）</a></li>
                    	<li><a href="#">追加评论（1）</a></li>
                        <div style="clear:both;"></div>
                    </ul>
                    <dl>
                    	<dt>
                        	<a href="#"><img src="/Public/Home/images/box3-dt-tu.gif" /></a>
                        </dt>
                        <dd>
                        	<a href="#">胡**</a>
                            <p class="b3-p1">赞赞赞赞赞赞赞赞赞赞赞赞赞！！！！！！！！！</p>
                            <p class="b3-p2">2015-12-12    16:57:22  </p>
                        </dd>
            			<div style="clear:both;"></div>
                    </dl>
                    <dl>
                    	<dt>
                        	<a href="#"><img src="/Public/Home/images/box3-dt-tu.gif" /></a>
                        </dt>
                        <dd>
                        	<a href="#">胡**</a>
                            <p class="b3-p1">赞赞赞赞赞赞赞赞赞赞赞赞赞！！！！！！！！！</p>
                            <p class="b3-p2"><span></span><span></span>2015-12-12    16:57:22</p>
                            <div style="clear:both;"></div>
                            <div class="b3-zuijia">
                            	<p class="zj-p1">追加评论：</p>
                            	<p class="zj-p2">赞赞赞赞赞赞赞赞赞赞赞赞赞！！！！！！！！！</p>
                            	<p class="zj-p3">2015-12-12    16:57:22</p>
                            </div>
                        </dd>
            			<div style="clear:both;"></div>
                    </dl>
                    
                    <!--分页-->
           			<div class="paging">
            	<div class="pag-left f-l">
                	<a href="#" class="about left-r f-l"><</a>
                    <ul class="left-m f-l">
                    	<li><a href="#">1</a></li>
                        <li class="current"><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">6</a></li>
                        <li><a href="#">...</a></li>
                        <li><a href="#">100</a></li>
                        <div style="clear:both;"></div>
                    </ul>
                	<a href="#" class="about left-l f-l">></a>
                    <div style="clear:both;"></div>
                </div>
            	<div class="pag-right f-l">
                	<div class="jump-page f-l">
                        到第<input type="text" />页
                    </div>
                    <button class="f-l">确定</button>
                    <div style="clear:both;"></div>
                </div>
                <div style="clear:both;"></div>
            </div>
                </div>
                </div>
                <div class="if2-r-box4" style="display:none;" com-det-show="dt3">
                	<div class="b4-tit">
                    	<h3>店铺所有商品</h3>
                    </div>
                    <div class="b4-con1">
                    	<a href="#">饼干糕点</a>
                    	<a href="#">坚果果仁</a>
                    	<a href="#">海味肉食</a>
                    	<a href="#">糖果巧克力</a>
                    	<a href="#">豆干炒货</a>
                    	<a href="#">休闲膨化</a>
                    	<a href="#">饮品冲调</a>
                    	<a href="#">蜜饯果脯</a>
                    	<a href="#">方便速食</a>
                    	<a href="#">饼干糕点</a>
                    	<a href="#">坚果果仁</a>
                    	<a href="#">海味肉食</a>
                    	<a href="#">糖果巧克力</a>
                    	<a href="#">豆干炒货</a>
                    	<a href="#">休闲膨化</a>
                    	<a href="#">饮品冲调</a>
                    	<a href="#">蜜饯果脯</a>
                    	<a href="#">方便速食</a>
                    </div>
                	<div class="b4-tit">
                    	<h3>店铺热销商品</h3>
                    </div>
                    <ul>
                    	<li>
                        	<a href="#"><img src="/Public/Home/images/if2-l-box1-tu1.gif" /></a>
                            <a href="#">乐事Lay's 无限薯片（翡翠黄瓜味）104g/罐</a>
                            <p>¥6.90</p>
                        </li>
                        <li>
                        	<a href="#"><img src="/Public/Home/images/if2-l-box1-tu1.gif" /></a>
                            <a href="#">乐事Lay's 无限薯片（翡翠黄瓜味）104g/罐</a>
                            <p>¥6.90</p>
                        </li>
                        <li>
                        	<a href="#"><img src="/Public/Home/images/if2-l-box1-tu1.gif" /></a>
                            <a href="#">乐事Lay's 无限薯片（翡翠黄瓜味）104g/罐</a>
                            <p>¥6.90</p>
                        </li>
                        <li>
                        	<a href="#"><img src="/Public/Home/images/if2-l-box1-tu1.gif" /></a>
                            <a href="#">乐事Lay's 无限薯片（翡翠黄瓜味）104g/罐</a>
                            <p>¥6.90</p>
                        </li>
                        <li>
                        	<a href="#"><img src="/Public/Home/images/if2-l-box1-tu1.gif" /></a>
                            <a href="#">乐事Lay's 无限薯片（翡翠黄瓜味）104g/罐</a>
                            <p>¥6.90</p>
                        </li>
                        <li>
                        	<a href="#"><img src="/Public/Home/images/if2-l-box1-tu1.gif" /></a>
                            <a href="#">乐事Lay's 无限薯片（翡翠黄瓜味）104g/罐</a>
                            <p>¥6.90</p>
                        </li>
                        <li>
                        	<a href="#"><img src="/Public/Home/images/if2-l-box1-tu1.gif" /></a>
                            <a href="#">乐事Lay's 无限薯片（翡翠黄瓜味）104g/罐</a>
                            <p>¥6.90</p>
                        </li>
                        <li>
                        	<a href="#"><img src="/Public/Home/images/if2-l-box1-tu1.gif" /></a>
                            <a href="#">乐事Lay's 无限薯片（翡翠黄瓜味）104g/罐</a>
                            <p>¥6.90</p>
                        </li>
            			<div style="clear:both;"></div>
                    </ul>
                </div>
            </div>
            <div style="clear:both;"></div>
        </div>
    </div>
    
    <!--底部服务-->
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

<script type="text/javascript">
$(document).ready(function(){

	$(".jqzoom").imagezoom();

	$("#thumblist li a").mouseover(function(){
		$(this).parents("li").addClass("tb-selected").siblings().removeClass("tb-selected");
		$(".jqzoom").attr('src',$(this).find("img").attr("mid"));
		$(".jqzoom").attr('rel',$(this).find("img").attr("big"));
	});

});
</script>

<script>
//一打开页面执行一次
 ajax(6,6);
 //点击加入购物车
  $(".btn2").click(function(){
	   $("#msg").width('0px');
                  $("#msg").stop(true);
                  setTimeout(function(){
                  $("#msg").show().animate({width: '250px','opacity':1}, 500).delay(     1000).fadeOut(300)},100); 
			 var cpid=$(this).attr('cpid'); //获取产品cpid
			 var num=$("#sno").val();  //获取产品的数量
			 //增加CP到购物车
			 ajax(cpid,1,num);  //后台的参数1代表加入购物车
	  });
	  
//显示购物车内容
	   $("#gwc").click(function(){
		      $("#tab").toggle();  
		   });
   
	 function ajax(cpid,type,num){
		     $.ajax({
				       url:"<?php echo U('Cp/car');?>",
					   type:"POST",
					   async:true,
					   dataType:"json",
					   data:{'cpid':cpid,'type':type,'num':num},
					   success:function(data){
						      $(".tt").remove(); 
						      for(var i in data){
								   //alert(i);
								   //alert(data[k].cpname);
					 var html='<tr class="tt" tid="'+data[i].cpid+'" ><td width="108" height="102" align="center" ><img src="/Uploads/'+data[i].spic+'" width="60" height="60"></td><td width="162" align="center"  style="color:red; font-size:12px">'+data[i].cpname+"("+data[i].num+")"+'</td><td width="72" align="center" ><input type="button" value="删除" class="del" /></td></tr>'; 
					 $("#tab").prepend(html);  //向购车里面追加 
								  }
					         var nums=$(".tt").length;//获取购物车产品数量
							 $("#num").html(nums); //写入数量
						  },

				 });
		 }	   
		 		 
 //删除购物车里面一条记录		 
    $(document).on('click','.del',function(){
		     var cpid=$(this).parents('.tt').attr('tid');
			 ajax(cpid,2);   //删除设置type=2
		});
		 
//清空购物车
	$("#clearall").click(function(){	    	  
		   ajax(0,3);  //清空设置type=3;
		});  

</script>