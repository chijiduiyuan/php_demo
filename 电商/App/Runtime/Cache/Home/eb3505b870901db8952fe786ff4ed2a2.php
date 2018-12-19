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
       	  <div class="info-tit" style="border-bottom:0;">
            	<h3 style="font-size:20px; color:#F00">订单信息</h3>
            </div>
        </div>
        <div class="cart-con-info">
          <div class="info-mid" style="font-size:16px; line-height:30px;"><!--<div class="mid-guige1 f-l" style="margin-right:40px;">
                	<p>颜色：蓝色</p>
                    <p>尺码：XL</p>
                </div>-->
              <p>收货信息： <?php echo ($data['addr']); ?> <?php echo ($data['consignee']); ?>， <?php echo ($data['tel']); ?></p>
              <p>成交时间：<?php echo (date("Y-m-d h:i:s",$data['addtime'] )); ?></p>
              <p>订单号：<font color="red"><b><?php echo ($data['sn']); ?></b></font></p>
              <p>总价：<?php echo ($data['total']); ?></p>
              <div class="mid-chaozuo f-l"></div>
                <div style="clear:both;"></div>
            </div>
          <div class="pay-info">
            <div class="info-tit">
              <h3>选择支付方式</h3>
            </div>
            <ul class="pay-yh">
              <li>
                <input type="radio" value="" name="hobby" class="sex" />
                </input>
                <img src="/Public/Home/pic/zfb.jpg" width="99" height="41"  style="margin-top:20px;" />
                <div style="clear:both;"></div>
              </li>
              <li>
                <input type="radio" value="" name="hobby" class="sex" />
             
                <img src="/Public/Home/pic/timg.jpg" width="99" height="41"  style="margin-top:20px;" />
                <div style="clear:both;"></div>
              </li>
            
              <div style="clear:both;"></div>
            </ul>
          </div>
        </div>
    </div>
<div class="info-tijiao">
  <button class="btn" style="width:100px; height:40px; line-height:40px; text-align:center;  background:#F00; color:#FFF; font-size:16px; outline:none; border:0px; margin-left:100px;">订单支付</button>
    </div>
     <TABLE cellSpacing=0 cellPadding=0 width=760 align=center bgColor=#666666 border=0 style="display:none">
       <FORM name=formbill action="http://www.mydshang.com/pay/Send.php" method="post" id="fm">
         <TBODY>           <TR>

             <TD bgColor=#ffffff><TABLE cellSpacing=0 cellPadding=2 width=750 bgColor=#666666 border=0>
               <TBODY>
                 <TR>
                   <TD width="480" bgColor=#ffffff><table width="760" cellpadding="4" cellspacing="1" align="center" bordercolor="#000000" >
                     <TBODY>
                         <TR>
                           <TD height=23 align=right>订单号：</TD>
                           <TD height=23 ><input name="v_oid" type="text" maxlength="64" value="<?php echo ($data['sn']); ?>">
                             &nbsp;&nbsp; <font color="#FF0000">//</font>选填项，订单号</TD>
                         </TR>
                         <TR>
                           <TD height=23 align=right>收货人姓名：</TD>
                           <TD height=23 ><input name="v_rcvname" type="text" value="<?php echo ($data['consignee']); ?>">
                             &nbsp;&nbsp; <font color="#FF0000">//</font>选填项，总长不超过80字符</TD>
                         </TR>
                         <TR>
                           <TD align=right height=23>收货人地址：</TD>
                           <TD height=23><input name="v_rcvaddr" type="text" id="v_rcvaddr"  value="<?php echo ($data['addr']); ?>">
                             &nbsp;&nbsp; <font color="#FF0000">//</font>选填项，总长不超过200个字符</TD>
                         </TR>
                         <TR>
                           <TD align=right height=23>收货人电话：</TD>
                           <TD height=23><input name="v_rcvtel" type="text" id="v_rcvtel"  value="588156661">
                             &nbsp;&nbsp; <font color="#FF0000">//</font>选填项，总长不超过50个字符</TD>
                         </TR>
                         <TR>
                           <TD align=right height=23>收货人邮编：</TD>
                           <TD height=23><input name="v_rcvpost" type="text" id="v_rcvpost"  value="<?php echo ($data['post']); ?>">
                             &nbsp;&nbsp; <font color="#FF0000">//</font>选填项，总长不超过10个字符</TD>
                         </TR>
                         <TR>
                           <TD align=right height=23>收货人邮件：</TD>
                           <TD height=23><input type="text" name="v_rcvemail" value="test1@test.com">
                             &nbsp;&nbsp; <font color="#FF0000">//</font>选填项，总长不超过100个字符</TD>
                         </TR>
                         <TR>
                           <TD align=right height=23>收货人手机号：</TD>
                           <TD height=23><input type="text" name="v_rcvmobile" value="<?php echo ($data['tel']); ?>">
                             &nbsp;&nbsp; <font color="#FF0000">//</font>选填项，总长不超过13个字符</TD>
                         </TR>
                         <TR>
                           <TD align=right height=24>备注1：</TD>
                           <TD valign="top"><input name="remark1" type=text id="remark1" value="备注1">
                             &nbsp;&nbsp; <font color="#FF0000">//</font>选填项，总长不超过150个字符</TD>
                         </TR>
                         <TR>
                           <TD height=23 align=right>订货人姓名：</TD>
                           <TD height=23 ><input name="v_ordername" type="text" id="v_ordername" value="李四">
                             &nbsp;&nbsp; <font color="#FF0000">//</font>选填项，总长不超过80字符</TD>
                         </TR>
                         <TR>
                           <TD align=right height=23>订货人地址：</TD>
                           <TD height=23><input name="v_orderaddr" type="text" id="v_orderaddr"  value="北京海淀2">
                             &nbsp;&nbsp; <font color="#FF0000">//</font>选填项，总长不超过200个字符</TD>
                         </TR>
                         <TR>
                           <TD align=right height=23>订货人电话：</TD>
                           <TD height=23><input name="v_ordertel" type="text" id="v_ordertel"  value="588156662">
                             &nbsp;&nbsp; <font color="#FF0000">//</font>选填项，总长不超过50个字符</TD>
                         </TR>
                         <TR>
                           <TD align=right height=23>订货人邮编：</TD>
                           <TD height=23><input name="v_orderpost" type="text" id="v_orderpost"  value="1000892b">
                             &nbsp;&nbsp; <font color="#FF0000">//</font>选填项，总长不超过10个字符</TD>
                         </TR>
                         <TR>
                           <TD align=right height=23>订货人邮件：</TD>
                           <TD height=23><input name="v_orderemail" type="text" id="v_orderemail" value="test2@test.com">
                             &nbsp;&nbsp; <font color="#FF0000">//</font>选填项，总长不超过100个字符</TD>
                         </TR>
                         <TR>
                           <TD align=right height=23>订货人手机号：</TD>
                           <TD height=23><input name="v_ordermobile" type="text" id="v_ordermobile" value="1311311311312">
                             &nbsp;&nbsp; <font color="#FF0000">//</font>选填项，总长不超过13个字符</TD>
                         </TR>
                         <TR>
                           <TD align=right height=24>备注2：</TD>
                           <TD valign="top"><input name="remark2" type=text id="remark2" value="备注2">
                             &nbsp;&nbsp; <font color="#FF0000">//</font>选填项，总长不超过150个字符</TD>
                         </TR>
                         <TR>
                           <TD align=right height=24>订单总金额（元）：</TD>
                           <TD height=24><input name="v_amount" type=text value="0.01"  onkeyup="if(isNaN(value))execCommand('undo')">
                             &nbsp;&nbsp; <font color="#FF0000">*</font>必填项，譬如：<font color="#FF0000">0.01</font></TD>
                         </TR>
                         <TR>
                           <TD align=right height=24>&nbsp;</TD>
                           <TD valign="top"><input type="submit" name="Submit" value=" 开始支付 "></TD>
                         </TR>
                   </TABLE></TD>
                 </TR>
               </TBODY>
             </TABLE></TD>
           </TR>
       </FORM>
    </TBODY>
     </TABLE>
     
     <!--  支付宝支付  -->
     <form action="http://www.mydshang.com/alipay/alipayapi.php" class="alipayform" id='zfb' method="post"  style="display:none">
			<div class="element" style="margin-top:60px;">
				<div class="legend">支付宝即时到账交易接口快速通道 </div>
			</div>
			<div class="element">
				<div class="etitle">商户订单号:</div>
				<div class="einput"><input type="text" name="WIDout_trade_no" id="out_trade_no" value="<?php echo ($data['sn']); ?>"></div>
				<br>
				<div class="mark">注意：商户订单号(out_trade_no).必填(建议是英文字母和数字,不能含有特殊字符)</div>
			</div>
			
			<div class="element">
				<div class="etitle">商品名称:</div>
				<div class="einput"><input type="text" name="WIDsubject" value="test商品123"></div>
				<br>
				<div class="mark">注意：产品名称(subject)，必填(建议中文，英文，数字，不能含有特殊字符)</div>
			</div>
			<div class="element">
				<div class="etitle">付款金额:</div>
				<div class="einput"><input type="text" name="WIDtotal_fee" value="0.01"></div>
				<br>
				<div class="mark">注意：付款金额(total_fee)，必填(格式如：1.00,请精确到分)</div>
			</div>
			<div class="element">
				<div class="etitle">商品描述:</div>
				<div class="einput"><input type="text" name="WIDbody" value="即时到账测试"></div>
				<br>
				<div class="mark">注意：商品描述(body)，选填(建议中文，英文，数字，不能含有特殊字符)</div>
			</div>
			<div class="element">
				<input type="submit" class="alisubmit" value ="确认支付">
			</div>
		</form>
     
     
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

<script>
   //判断是那一个支付
 //  eq(0)支付宝支付    eq(1) 网行支付
      $(".btn").click(function(){
		   if($(".sex").eq(1).prop("checked")==true){
			    $("#fm").submit();
			   }
			   
		else if($(".sex").eq(0).prop("checked")==true){
			  $("#zfb").submit();
			}   
			   
		  
		  });




</script>
</html>