<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>购物车</title>
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
    <div class="switch-city w1200">
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
    </div>
    
    <!--内容开始-->
    <div class="cart-content w1200">
    	<ul class="cart-tit-nav">
        	<li class="current"><a href="#">全部商品   21</a></li>
        	<div style="clear:both;"></div>
        </ul>
        <div class="cart-con-tit">
       	  <p class="p1">
            	<input type="checkbox" value="" class="qx" id="qx1" name="hobby"></input>
				<span><label for="qx1">全选</label></span>
            </p>
            <p class="p2">商品信息            </p>
            <p class="p4">数量</p>
            <p class="p5">单价（元）</p>
            <p class="p6">金额（元）</p>
            <p class="p7">操作</p>
        </div>
         <!--   购物车产品 -->
         <?php if(empty($_SESSION['car'])): ?><div class="info-mid" style="color:red">购物车为空</div>
         
         <?php else: ?>
         
         <form method="post" action="<?php echo U('Car/buy');?>" id="fm" >
       
        <?php if(is_array($_SESSION['car'])): $i = 0; $__LIST__ = $_SESSION['car'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vv): $mod = ($i % 2 );++$i;?><div class="cart-con-info">
         
          <div class="info-mid">
           	  <input type="checkbox" value="<?php echo ($vv["cpid"]); ?>" name="cpid[]" class="mid-ipt f-l ck"></input>
                <div class="mid-tu f-l">
                	<a href="#"><img src="/Uploads/<?php echo ($vv["spic"]); ?>" width="100" height="100"/></a>
                </div>
                
            <div class="mid-font f-l">
                	<a href="#"><?php echo ($vv["cpname"]); ?></a>
                    <span>满赠</span>
                </div>
                <div class="mid-sl f-l cpid" uid="<?php echo ($vv["cpid"]); ?>">
                	<a href="JavaScript:;" class="sl-left">-</a>
                    <input type="text" value="<?php echo ($vv["num"]); ?>" class="num"  />
                    <a href="JavaScript:;" class="sl-right">+</a>
                </div>
                <p class="mid-dj f-l">¥ <span class="dj"><?php echo ($vv["price"]); ?></span></p>
                <p class="mid-je f-l">¥<span class="zdj"><?php echo ($vv['price']*$vv['num']); ?> </span></p>
                <div class="mid-chaozuo f-l">
                	<!-- <a href="#">移入收藏夹</a>-->
                    <a href="javascript:void(0)" class="car_del">删除</a>
                </div>
                <div style="clear:both;"></div>
          </div>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>

        </form>
         <!-- end --><?php endif; ?>
        
        
        <div class="cart-con-footer">
        	<input type="checkbox" value="" name="hobby" class="qx" id="qx"></input>
			<span><label for='qx'>全选</label></span>
            <a href="#">删除</a>
          <!--  <a href="#">加入收藏夹</a>
            <p>（此处始终在屏幕下方）</p>-->
             <div class="clickcart">结算</div>
            
        </div>
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
    //加数量
	  $(".sl-right").click(function(){
		    var cpid=$(this).parents('.cpid').attr('uid'); //获取产品cpid
		    var num=$(this).prev().val();  //获取产品的数量
			var dj=$(this).parents(".cart-con-info").find('.dj').html();
			var zdj=$(this).parents(".cart-con-info").find('.zdj');
			num=parseInt(num);
			num++;
			$(this).parents(".cart-con-info").find('.num').val(num);
			dj=parseInt(dj);
			zdj.html(dj*num);	
			ajax(cpid,1,1);  
	         
		  });
	
	//减少
	$(".sl-left").click(function(){
		    var cpid=$(this).parents('.cpid').attr('uid'); //获取产品cpid
		    var num=$(this).next().val();  //获取产品的数量
			var dj=$(this).parents(".cart-con-info").find('.dj').html();
			var zdj=$(this).parents(".cart-con-info").find('.zdj');
			num=parseInt(num);
			num--;
			if(num<=0){num=1;}
		    $(this).parents(".cart-con-info").find('.num').val(num);
			dj=parseInt(dj);
			zdj.html(dj*num);	
			ajax(cpid,4);  

		});
	
	 //删除一条记录
	 
	 
	 $(".car_del").click(function(){
		     var cpid=$(this).parents('.cart-con-info').find('.cpid').attr('uid');
		     $(this).parents('.cart-con-info').remove();
			 ajax(cpid,2);
		 });
	
	
	 function ajax(cpid,type,num){
		     $.ajax({
				       url:"<?php echo U('Cp/car');?>",
					   type:"POST",
					   async:true,
					   dataType:"json",
					   data:{'cpid':cpid,'type':type,'num':num},
					   success:function(data){
						  },
				 });
		 }	   
   
   
     //全选
	 $("#qx,#qx1").click(function(){
		var rel=$(this).prop('checked');
		 $(".ck,#qx,#qx1").prop('checked',rel); 
		 aa();
		 });
   
    function aa(){
		     if($(".ck:checked").length>0){	
			        $(".clickcart").addClass('cl');  	   
				 }else{
					  $(".clickcart").removeClass('cl');
					 }
		}
		
//单独点周多选框
    $(".ck").click(function(){
		   if($(".ck:checked").length==$(".ck").length){
			     $("#qx,#qx1").prop('checked',true);
			   }
			   else{
				    $("#qx,#qx1").prop('checked',false);
				   }
		
		  aa();
		});		
	
	
		
//提交按钮

    $(".clickcart").click(function(){
		  if($(".ck:checked").length>0){
			     $("#fm").submit();
			  }

		});	 
	 
   
    </script>
</body>
</html>