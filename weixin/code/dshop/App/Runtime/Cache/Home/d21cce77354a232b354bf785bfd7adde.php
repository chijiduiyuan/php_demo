<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>注册</title>
<link rel="stylesheet" type="text/css" href="/dshop/Public/Home/css/style.css" />
<link rel="stylesheet" type="text/css" href="/dshop/Public/Home/css/shopping-mall-index.css" />
<script type="text/javascript" src="/dshop/Public/Home/js/jquery.js"></script>
<script type="text/javascript" src="/dshop/Public/Home/js/zhonglin.js"></script>
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
    
    <!--logo search 开始--><!--内容开始-->
    <div class="password-con registered">
    <form method="post" action="<?php echo U('User/user_check');?>" >
    	<div class="psw">
        	<p class="psw-p1">用户名</p>
            <input type="text" placeholder="HR了" />
            <span class="dui"></span>
        </div>
    	<div class="psw">
        	<p class="psw-p1">输入密码</p>
            <input type="text" placeholder="请输入密码" />
            <span class="cuo">密码由6-16的字母、数字、符号组成</span>
        </div>
    	<div class="psw">
        	<p class="psw-p1">确认密码</p>
            <input type="text" placeholder="请再次确认密码" />
            <span class="cuo">密码不一致，请重新输入</span>
        </div>
    	<div class="psw psw2">
        	<p class="psw-p1">手机号/邮箱</p>
            <input type="text" placeholder="请输入手机" name="tel" id="tel"/>
            <!-- <a href="javascript:void(0)" style="background:#C60; color:#FFF" id="dx"> 获取短信验证码</a> -->
            <input type="button" value="获取短信验证码" id="dx">
        </div>
    	<div class="psw psw3">
        	<p class="psw-p1">手机验证码</p>
            <input type="text"  name="code" />
        </div>
    	
        
        <div class="agreement">
        	<input type="checkbox" name="hobby"></input>
            <p>我有阅读并同意<span>《宅客微购网站服务协议》</span></p>
        </div>
        <button class="psw-btn">立即注册</button>
        <p class="sign-in">已有账号？请<a href="#">登录</a></p>
        </form>
        
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
         $(function(){
			    $("#dx").click(function(){
					   var tel=$("#tel").val(); 
					   //alert(tel);
					   $.ajax({
						      url:"http://www.mydshang.com/dx/sendSMS.php",
							  type:"POST",
							  async:true,
							  dataType:"json",
							  data:{'tel':tel},
						      success:function(data){
								  //alert(data.info);
							},
						   });
					 });
			 });
    
      </script>
</body>
</html>