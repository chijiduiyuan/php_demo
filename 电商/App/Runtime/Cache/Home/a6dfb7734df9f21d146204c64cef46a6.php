<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>注册</title>
<link rel="stylesheet" type="text/css" href="/Public/Home/css/style.css" />
<link rel="stylesheet" type="text/css" href="/Public/Home/css/shopping-mall-index.css" />
<link rel="stylesheet" type="text/css" href="/Public/cj/cj.css" />
<script type="text/javascript" src="/Public/Home/js/jquery.js"></script>
<script type="text/javascript" src="/Public/Home/js/zhonglin.js"></script>
</head>

<body>

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
   <!-- 代码部分begin  -->
<div class="rotary">
	<div class="rotaryArrow" id="rotaryArrow"></div>
	<div class="list">
		<h3>中奖名单</h3>
		<ul>
		
			<li>1569****851</li>
			<li>1515****206</li>
			<li>1550****789</li>
			<li>1370****627</li>
			<li>1828****215</li>
			<li>1589****572</li>
			<li>1583****825</li>
			<li>1396****805</li>
			<li>1332****261</li>
			<li>1884****863</li>
			<li>1384****955</li>
			<li>1897****137</li>
			<li>1342****973</li>
			<li>1558****071</li>
			<li>1554****168</li>
			<li>1562****018</li>
			<li>1805****856</li>
			<li>1354****809</li>
			<li>1383****364</li>
		</ul>
	</div>
	<div class="result" id="result">
		<p id="resultTxt"></p>
		<a href="javascript:" id="resultBtn" title="关闭">关闭</a>
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
   <script>
     //var arr=new Array('谢谢参与','代金卷5元','代金卷1元','代金卷10元','谢谢参与','代金卷20元','代金卷50元','代金卷30元');
	  //第一等份有多少度
	  var avg_deg=45;  
	  var m=0;
      $(function(){
	          //点击事件
		      $("#rotaryArrow").click(function(){				  
				       $.ajax({
						          url:"<?php echo U('User/cj_ajax');?>",
								  type:"POST",
								  async:true,
								  dataType:"json",
								  success: function(data){  
								if(data.jf>=50){
								      if(data.count<=2){
										  m++;
							  //var n=parseInt(Math.random()*arr.length);	  
					          var deg=360*m*5+avg_deg*data.n+"deg";
					          $("#rotaryArrow").css('transform','rotate('+deg+')');
					          setTimeout(function(){alert(data.name);},1600);
				              }
							  else{alert('今天已经抽奖二次了,请明天再来');}  
								}
								else{alert("对不起你的积分不够");}
									  },
								  
			  
						         });
				  
				  
				  
				  
				  
				 /* m++;  
				  if(m<=2){
	                  var n=parseInt(Math.random()*arr.length);	  
					  var deg=360*m*5+avg_deg*n+"deg";
					  $("#rotaryArrow").css('transform','rotate('+deg+')');
					  setTimeout(function(){alert(arr[n]);},1600);
				      }else{alert('今天已经抽奖二次了,请明天再来');}  
					  */
					  
					  
					  
					  
				     });  

		
		
		       });
		 

    
			
		

</script>
   
    
   
   
</body>
</html>