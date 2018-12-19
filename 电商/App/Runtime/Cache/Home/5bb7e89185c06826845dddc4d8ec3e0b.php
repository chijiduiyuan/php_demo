<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>确认订单</title>
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
    <div class="payment-interface w1200">
    	<div class="pay-info">
        	<div class="info-tit">
            	<h3>选择收货地址</h3>
            </div>
            <ul class="pay-dz">
           <!-- 地址循环输出    -->
            
              <?php if(is_array($address)): $i = 0; $__LIST__ = $address;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$avo): $mod = ($i % 2 );++$i; if($avo['tj'] == 1): $aa=$avo['id'] ?>  
            	<li class="current" pid="<?php echo ($avo["id"]); ?>">
                <?php else: ?>
                <li pid="<?php echo ($avo["id"]); ?>"><?php endif; ?>
                	<h3><span class="sp1"><?php echo ($avo["pro"]); echo ($avo["city"]); ?></span><span class="sp2"><?php echo ($avo["area"]); ?></span>（<span class="sp3"><?php echo ($avo["name"]); ?></span> 收）</h3>
                    <p><span class="sp1"><?php echo ($avo["address"]); ?></span><span class="sp2"><?php echo ($avo["tel"]); ?></span></p>
                    <a href="JavaScript:;" xiugai="">修改</a>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>
               
               <!--  地址循环输出结束  -->
               
               

                <div style="clear:both;"></div>
            </ul>
            <P class="pay-xgdz">修改地址和使用新地址样式一样。</P>
            <button class="pay-xdz-btn">使用新地址</button>
        </div>
        <div class="pay-info">
        	<div class="info-tit" style="border-bottom:0;">
            	<h3>订单信息</h3>
            </div>
        </div>
        <form method="post" action="<?php echo U('Car/order');?>">
            <!-- 存放地址id  -->
            <input type="hidden" id="uid" name="id" value="<?php echo ($aa); ?>" />
            <!-- 总价 -->
            <input type="hidden"  name="totals" value="<?php echo ($totals); ?>" />
            <input type="hidden" name="TOKEN" value="<?php echo session('TOKEN');?>"> 
        <div class="cart-con-info">
        	<div class="cart-con-tit" style="margin:20px 0 5px;">
                <p class="p1" style="width:200px;">
                   产品图片
                </p>
                <p class="p3" style="width:145px; margin-left:60px;">产品名称</p>
                <p class="p4" style="width:130px; margin-left:130px">数量</p>
                <p class="p5">单价（元）</p>
                <p class="p6" style="width:173px;">金额（元）</p>
                <p class="p7">&nbsp;</p>
            </div>
            
            
           
            <div class="addr">
          <!--  循环订单信息 -->  
         <?php if(is_array($cplist)): $i = 0; $__LIST__ = $cplist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cpvo): $mod = ($i % 2 );++$i;?><div class="info-mid">
                <div class="mid-tu f-l">
                	<a href="#"><img src="/Uploads/<?php echo ($cpvo["spic"]); ?>" width="80" height="80" /></a>
                </div>
                <div class="mid-font f-l" style="margin:20px 0 0 120px; width:180px">
                	<a href="#"><?php echo ($cpvo["cpname"]); ?>
                </div>
     
              <div class="mid-sl f-l" style="margin:30px 54px 0px 126px;">
                <input type="text" value="<?php echo ($cpvo["num"]); ?>" readonly/>
                <input type="hidden" value="<?php echo ($cpvo["cpid"]); ?>" name="cpid[]" />
                
                </div>
                
              <p class="mid-dj f-l" style="margin:30px 0 0 40px;">¥ <?php echo ($cpvo["price"]); ?></p>
                <p class="mid-je f-l" style="margin:30px 0 0px 116px;">¥ <?php echo ($cpvo['num']*$cpvo['price']); ?></p>
                <div class="mid-chaozuo f-l"></div>
                <div style="clear:both;"></div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
           
         <!-- 循环结束 -->
            </div>
            
            
            
            
            
            <div class="info-tijiao">
           	  <p class="p1">实付款：<span id>¥<?php echo ($totals); ?></span></p>
                <button class="btn">提交订单</button>
            </div>
        </div>
        </form>
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

    <!--确认订单（新增地址）-->

    <div class="confirmation-tanchuang" id="new_addr" xgdz1="">
    	<div class="tanchuang-bg"></div>
    	<div class="tanchuang-con">
        	<div class="tc-title">
            	<h3>新增地址</h3>
                <a href="JavaScript:;" dz-guan=""><img src="/Public/Home/images/close-select-city.gif" /></a>
                <div style="clear:both;"></div>
            </div>
            <ul class="tc-con2">
            	<li class="tc-li1">
                	<p class="l-p">所在地区<span>*</span></p>
                    <div class="xl-dz">
                    	<div class="dz-left f-l">
                              <select  id="proId" name="pro">
                              
                              </select>
                              <select  id="cityId" name="city">
                             </select>   
                              <select  id="areaId" name="area">
                             </select>  
                        </div>
                      
                    	<div style="clear:both;"></div>
                    </div>
                    <div style="clear:both;"></div>
                </li>
            	<li class="tc-li1">
                	<p class="l-p">详细地址<span>*</span></p>
                    <textarea class="textarea1" id="addr" placeholder="请如实填写您的详细信息，如街道名称、门牌号、楼层号和房间号。" name="address"></textarea>
                    <div style="clear:both;"></div>
                </li>
            	<li class="tc-li1">
                	<p class="l-p">邮政编码<span></span></p>
                    <input type="text" name="post" id="post" />
                    <div style="clear:both;"></div>
                </li>
            	<li class="tc-li1">
                	<p class="l-p">收货人姓名<span>*</span></p>
                    <input type="text" name="name" id="name" />
                    <div style="clear:both;"></div>
                </li>
            	<li class="tc-li1">
                	<p class="l-p">联系电话<span>*</span></p>
                    <input type="text" name="tel" id="tel" />
                    <div style="clear:both;"></div>
                </li>
            </ul>
            <button class="btn-pst2">保存</button>
        </div>
    </div>
    
<script>


//省市区 
   ajax($("#proId"),100000); //第一次加载页面要把所有省调出来
   
   //省的变化事件
   $("#proId").change(function(){
	    $("#areaId").html(""); //清空区的内容
	     var class_id=$(this).val();
		
		 ajax($("#cityId"),class_id);
	   });
	   
	//市的变化   
	$("#cityId").change(function(){
		var class_id=$(this).val();
		ajax($("#areaId"),class_id);
		});
	   
   
   function ajax(e,id){
	       $.ajax({
			     url:"<?php echo U('Car/ajax_city');?>",
				 type:"POST",
				 async:true,
				 dataType:"json",
				 data:{'id':id},
				 success:function(data){
					  var ss="<option>---请选择---</option>";
					   for(var i in data){
						     // alert(data[i].class_name);
							 ss+="<option value="+data[i].class_id+">"+data[i].class_name+"</option>"; 
						   }
						  e.html(ss);	   
					 },

			   });
	   
	   }
   


//新地址提交
 $(".btn-pst2").click(function(){
	      $("#new_addr").hide(); //一点保存就关闭地址输入框
		  var pro=$("#proId").val();
		  var city=$("#cityId").val();
		  var area=$("#areaId").val();
		  var address=$("#addr").val();
		  var post=$("#post").val();
		  var name=$("#name").val();
		  var tel=$("#tel").val();
		  
		  $.ajax({
			    url:"<?php echo U('Car/ajax_addr');?>",
				type:'POST',
				async:true,
				dataType:"json",
				data:{'pro':pro,'city':city,'area':area,'address':address,'post':post,'name':name,'tel':tel},
				success:function(data){	
                     $(".pay-dz li").removeClass('current'); //在增加之前其它的地址current去掉
					 var html='<li class="current" pid="'+data.id+'"><h3><span class="sp1">'+data.pro+data.city+'</span><span class="sp2">'+data.area+'</span>(<span class="sp3">'+data.name+'</span> 收)</h3><p><span class="sp1">'+data.address+'</span><span class="sp2">'+data.tel+'</span></p><a href="JavaScript:;" xiugai="">修改</a></li>';
					 $(".pay-dz").prepend(html);
					 $("#uid").val(data.id);  //改变地址的ID
					},
			   
			  }); 

	 });



	/*确认订单 地址切换*/
	$(".pay-dz li").click(function(event) {
		$(this).addClass('current').siblings().removeClass("current");
		var ss=$(this).attr('pid');
		$("#uid").val(ss);  //改变地址的ID
		//alert(ss);
	});
</script>
</body>
</html>