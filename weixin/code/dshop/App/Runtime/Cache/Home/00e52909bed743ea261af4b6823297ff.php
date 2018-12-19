<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>商家店铺页面</title>
<link rel="stylesheet" type="text/css" href="/Public/Home/css/style.css" />
<link rel="stylesheet" type="text/css" href="/Public/Home/css/shopping-mall-index.css" />
<link rel="stylesheet" type="text/css" href="/Public/Home/css/right.css" />
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
<!--<script type="text/javascript" src="/Public/Home/js/gwc.js"></script> -->


</head>

<body>


<!-- 右边固定  -->
<!--<div class="r-fixed">
<div id="msg">加入购物车成功</div>

     <div class="r-menu">
          <span></span>
           <div id="end"></div>
          <a href="javascript:void()"  id="gwc">购物车</a></span>
            <table width="400"  border="0" id="tab" cellpadding="0" cellspacing="0">
        
          
          <tr>
  <td width="108" height="40" align="center" ><span id="clearall" style="width:60px; height:30px; text-align:center; display:inline-block;line-height:30px; background:#F30; color:#FFF;">清空购物车</span></td>
  <td><a href="<?php echo U('Car/car');?>" style="width:60px; height:30px; text-align:center; display:inline-block;line-height:30px; background:#999; color:#FFF;">去结算</a></td>
  </tr>
          
        </table>
          
          <i id="num">0</i>
     </div>
     <div class="r-menu1 menu-1"><p>我的订单</p></div>
     <div class="r-menu1 menu-2"><p>我的优惠券</p></div>
     <div class="r-menu1 menu-3"><p>我的收藏</p></div>
     <div class="r-menu1 menu-4"><p>客服服务</p></div>
</div>-->





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

	
    
    <!--切换城市-->
  <!--  <div class="switch-city w1200">
    	<a href="#" class="dianji-qh">切换城市</a>
        <span class="dqm">重庆市</span>
        <div class="select-city">
        	<div class="sl-city-top">
            	<p class="f-l">切换城市</p>
                <a class="close-select-city f-r" href="#">
                	<img src="/Public/Home/images/close-select-city.gif" />
                </a>
            </div>
            <div class="sl-city-con">
            	<p>西北</p>
                <dl>
                	<dt>重庆市</dt>
                    <dd>
                    	<a href="#">长寿区</a>
                        <a href="#">巴南区</a>
                        <a href="#">南岸区</a>
                        <a href="#">九龙坡区</a>
                        <a href="#">沙坪坝区</a>
                        <a href="#">北碚</a>
                        <a href="#">江北区</a>
                        <a href="#">渝北区</a>
                        <a href="#">大渡口区</a>
                        <a href="#">渝中区</a>
                        <a href="#">万州</a>
                        <a href="#">武隆</a>
                        <a href="#">晏家</a>
                        <a href="#">长寿湖</a>
                        <a href="#">云集</a>
                        <a href="#">华中</a>
                        <a href="#">林封</a>
                        <a href="#">双龙</a>
                        <a href="#">石回</a>
                        <a href="#">龙凤呈祥</a>
                        <a href="#">朝天门</a>
                        <a href="#">中华</a>
                        <a href="#">玉溪</a>
                        <a href="#">云烟</a>
                        <a href="#">红塔山</a>
                        <a href="#">真龙</a>
                        <a href="#">天子</a>
                        <a href="#">娇子</a>
                    </dd>
                    <div style="clear:both;"></div>
                </dl>
                <dl>
                	<dt>新疆</dt>
                    <dd>
                    	<a href="#">齐乌鲁木</a>
                        <a href="#">昌吉</a>
                        <a href="#">巴音</a>
                        <a href="#">郭楞</a>
                        <a href="#">伊犁</a>
                        <a href="#">阿克苏</a>
                        <a href="#">喀什</a>
                        <a href="#">哈密</a>
                        <a href="#">克拉玛依</a>
                        <a href="#">博尔塔拉</a>
                        <a href="#">吐鲁番</a>
                        <a href="#">和田</a>
                        <a href="#">石河子</a>
                        <a href="#">克孜勒苏</a>
                        <a href="#">阿拉尔</a>
                        <a href="#">五家渠</a>
                        <a href="#">图木舒克</a>
                        <a href="#">库尔勒</a>
                    </dd>
                    <div style="clear:both;"></div>
                </dl>
                <dl>
                	<dt>甘肃</dt>
                    <dd>
                    	<a href="#">兰州</a>
                        <a href="#">天水</a>
                        <a href="#">巴音</a>
                        <a href="#">白银</a>
                        <a href="#">庆阳</a>
                        <a href="#">平凉</a>
                        <a href="#">酒泉</a>
                        <a href="#">张掖</a>
                        <a href="#">武威</a>
                        <a href="#">定西</a>
                        <a href="#">金昌</a>
                        <a href="#">陇南</a>
                        <a href="#">临夏</a>
                        <a href="#">嘉峪关</a>
                        <a href="#">甘南</a>
                    </dd>
                    <div style="clear:both;"></div>
                </dl>
                <dl>
                	<dt>宁夏</dt>
                    <dd>
                    	<a href="#">银川</a>
                        <a href="#">吴忠</a>
                        <a href="#">石嘴山</a>
                        <a href="#">中卫</a>
                        <a href="#">固原</a>
                    </dd>
                    <div style="clear:both;"></div>
                </dl>
                <dl>
                	<dt>青海</dt>
                    <dd>
                    	<a href="#">西宁</a>
                        <a href="#">海西</a>
                        <a href="#">海北</a>
                        <a href="#">果洛</a>
                        <a href="#">海东</a>
                        <a href="#">黄南</a>
                        <a href="#">玉树</a>
                        <a href="#">海南</a>
                    </dd>
                    <div style="clear:both;"></div>
                </dl>
            </div>
        </div>
    </div>-->
    
     <!--nav 开始-->
    <div class="nav-box" style=" background:#F09E0B;">
    	<div class="nav w1200">
        <ul>
        	<li><a href="#">在线商城</a></li>
        	<li><a href="#">生活服务</a></li>
        	<li><a href="#">餐饮娱乐</a></li>
        	<li><a href="#">家政服务</a></li>
        	<li><a href="#">美容美发</a></li>
        	<li><a href="#">教育培训</a></li>
        	<li><a href="#">汽车房产</a></li>
        	<li><a href="#">家居建材</a></li>
        	<li><a href="#">二手市场</a></li>
        	<li><a href="#">更多</a></li>
            <div style="clear:both;"></div>
        </ul>
        <div style="clear:both;"></div>
    </div>
    </div>
    
    
    
    <!--banner 图--><!--内容开始↓↑-->
    <div class="shop-page-con w1200">
    	<div class="shop-pg-left f-l">
        	<div class="shop-left-top">
            	<div class="sp-tit1">
                    <h3>商品分类</h3>
                </div>
                <dl class="drop">
                    <dt click="y1"><a href="JavaScript:;">面部护肤</a></dt>
                    <dd click-chage="y1" style="display:none;">
                        <ul>
                            <li><a href="#">爽肤水</a></li>
                            <li><a href="#">面膜</a></li>
                            <li><a href="#">乳液</a></li>
                            <li><a href="#">面霜/眼霜</a></li>
                            <li><a href="#">防晒</a></li>
                            <li><a href="#">卸妆</a></li>
                            <li><a href="#">护肤套装</a></li>
                            <li><a href="#">洁面</a></li>
                        </ul>
                    </dd>
                </dl>
                <dl class="drop">
                    <dt click="y2"><a href="JavaScript:;">女性护理</a></dt>
                    <dd click-chage="y2" style="display:none;">
                        <ul>
                            <li><a href="#">日用卫生巾</a></li>
                            <li><a href="#">夜用卫生巾</a></li>
                            <li><a href="#">护垫</a></li>
                            <li><a href="#">组合套装</a></li>
                            <li><a href="#">私处洗液</a></li>
                            <li><a href="#">女性湿巾</a></li>
                        </ul>
                    </dd>
                </dl>
                <dl class="drop">
                    <dt click="y3"><a href="JavaScript:;">彩妆/美容工具</a></dt>
                    <dd click-chage="y3" style="display:none;">
                        <ul>
                            <li><a href="#">润唇膏</a></li>
                            <li><a href="#">BB霜</a></li>
                            <li><a href="#">隔离</a></li>
                            <li><a href="#">美容工具霜</a></li>
                            <li><a href="#">睫毛膏 </a></li>
                        </ul>
                    </dd>
                </dl>
                <dl class="drop">
                    <dt click="y4" ><a href="JavaScript:;">男士护理</a></dt>
                    <dd click-chage="y4" style="display:none;">
                        <ul>
                            <li><a href="#">洗面奶</a></li>
                            <li><a href="#">男士护肤</a></li>
                            <li><a href="#">洗护发</a></li>
                            <li><a href="#">沐浴露</a></li>
                            <li><a href="#">剃须护理</a></li>
                            <li><a href="#">防晒</a></li>
                        </ul>
                    </dd>
                </dl>
                <dl class="drop">
                    <dt click="y5"><a href="JavaScript:;">面部护肤</a></dt>
                    <dd click-chage="y5" style="display:none;">
                        <ul>
                            <li><a href="#">爽肤水</a></li>
                            <li><a href="#">面膜</a></li>
                            <li><a href="#">乳液</a></li>
                            <li><a href="#">面霜/眼霜</a></li>
                            <li><a href="#">防晒</a></li>
                            <li><a href="#">卸妆</a></li>
                            <li><a href="#">护肤套装</a></li>
                            <li><a href="#">洁面</a></li>
                        </ul>
                    </dd>
                </dl>
            </div>
            <div class="shop-left-buttom">
            	<div class="sp-tit1">
                    <h3>商品推荐</h3>
                </div>
                <dl class="sp-lb-info2">
                	<dt><a href="#"><img src="/Public/Home/images/shop-pg2-ddtu1.gif" /></a></dt>
                    <dd>
                    	<a href="#">乐事Lay's 无限薯片（翡翠黄瓜味）104g/罐</a>
                        <p>¥6.90</p>
                    </dd>
                </dl>
                <dl class="sp-lb-info2">
                	<dt><a href="#"><img src="/Public/Home/images/shop-pg2-ddtu2.gif" /></a></dt>
                    <dd>
                    	<a href="#">乐事Lay's 无限薯片（翡翠黄瓜味）104g/罐</a>
                        <p>¥6.90</p>
                    </dd>
                </dl>
                <dl class="sp-lb-info2" style="border-bottom:none;">
                	<dt><a href="#"><img src="/Public/Home/images/shop-pg2-ddtu3.gif" /></a></dt>
                    <dd>
                    	<a href="#">乐事Lay's 无限薯片（翡翠黄瓜味）104g/罐</a>
                        <p>¥6.90</p>
                    </dd>
                </dl>
            </div>
        </div>
    	<div class="shop-pg-right f-r">
    	  <div class="shop-right-cmp" style="margin-top:0px;">
           	  <ul class="shop-cmp-l f-l">
                	<li class="current"><a href="#">综合 ↓</a></li>
                	<li><a href="#">销量 ↓</a></li>
                	<li><a href="#">新品 ↓</a></li>
                	<li><a href="#">评价 ↓</a></li>
                    <div style="clear:both;"></div>
            </ul>
                <div class="shop-cmp-m f-l">
                	<span>价格</span><input type="text" /><span>-</span><input type="text" />
                </div>
                <div class="shop-cmp-r f-l">
                	<ul class="f-l">
                    	<li>
                        	<input type="checkbox" name="hobby" value=""></input>
                          <span>包邮</span>
                        </li>
                        <li>
                        	<input type="checkbox" name="hobby" value=""></input>
                          <span>进口</span>
                        </li>
                        <li>
                        	<input type="checkbox" name="hobby" value=""></input>
                          <span>仅显示有货</span>
                        </li>
                        <li>
                        	<input type="checkbox" name="hobby" value=""></input>
                          <span>满赠</span>
                        </li>
                        <li>
                        	<input type="checkbox" name="hobby" value=""></input>
                          <span>满减</span>
                        </li>
                        <div style="clear:both;"></div>
                    </ul>
                    <button>确定</button>
                </div>
                  <div style="clear:both;"></div>
          </div>

        <!--产品展示部分 -->
     <div class="menu">
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vv): $mod = ($i % 2 );++$i;?><div class="pic">
              <a href="<?php echo U('Index/details',array('cpid'=>$vv['cpid']));?>" target="_blank"><img src="/Uploads/<?php echo ($vv["spic"]); ?>" /></a>
              <div class="price"><?php echo ($vv["price"]); ?></div>
              <div class="title"><a href="<?php echo U('Index/details',array('cpid'=>$vv['cpid']));?>" target="_blank"><?php echo ($vv["cpname"]); ?></a></div>
              <!--<input type="button" value="加入购物车" class="add addcar" uid="<?php echo ($vv["id"]); ?>" />-->
            <a href="<?php echo U('Index/details',array('cpid'=>$vv['cpid']));?>" class="add " style="display:block" target="_blank">查看详情</a>
           </div><?php endforeach; endif; else: echo "" ;endif; ?>
     </div>
          
          
           <div style="clear:both;"></div>  
          
         
          
            <div class="shop-right-con"><!--分页-->
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
            	  <button class="f-l">确定</button>
                    <div style="clear:both;"></div>
                </div>
                <div style="clear:both;"></div>
            </div>
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
    



 <script>
 //显示购物车的内容
 $("#gwc").click(function(){
			  $("#tab").toggle();
			 });
			 
 //清除所有的购物车里面的产品 
 $("#clearall").click(function(){
     ajax(3,5);
     delall();
 });
 
 ajax(6,6);
 
 function ajax(id,n){
    $.ajax({
	  type:"POST",
  	 url:"<?php echo U('Car/addcar');?>",
  	 data:{'id':id,'n':n},
	 dataType:"json",
  	 success:function(data){
          $("#tab .tt").remove();
		  for(i in data){
			  var tprice=data[i].num*data[i].price;
			  var html='<tr class="tt" tid="'+data[i].id+'" ><td width="108" height="102" align="center" ><img src="'+data[i].pic+'" width="100" height="100"></td><td width="162" align="center"  style="color:red; font-size:12px">'+data[i].name+'</td><td width="72" align="center" ><input type="button" value="删除" class="del" /></td></tr>';
			  $("#tab").append(html);
			  }
			  $("#num").html($(".tt").length);//购物车里面一共有几件产品
  	 },
  });
} 
 


 //购物车里面单个产品的删除     
           $(document).on('click','.del',function(){
                     id=$(this).parents('.tt').attr('tid');
                     ajax(id,4);
                     $(this).parents('.tt').remove();
                     $("#num").html($(".tt").length);  
               });



 //清除购物车里面所有的信息
   function delall(){
     $(".tt").each(function(){
          $(this).remove();
     });
     $("#num").html($(".tt").length);  

   }


 //点击加入购物车
           $(document).on('click','.addcar',function(){
                 //加入购物车的提示语句
                 $("#msg").width('0px');
                 $("#msg").stop(true);
                  setTimeout(function(){
                  $("#msg").show().animate({width: '250px','opacity':1}, 500).delay(1000).fadeOut(300)},100); 
                    // 获取产品的唯一号Id     
                   var id=$(this).attr('uid');  
                   ajax(id,1);
				   
        });

 
 
 
 </script>
 
 
    
    
    
    
    
    <!--滚动栏-->
</body>
</html>