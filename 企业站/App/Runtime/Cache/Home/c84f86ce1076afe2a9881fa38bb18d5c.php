<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>个人资料</title>
<link rel="stylesheet" type="text/css" href="/php/6-30/Public/person/css/style.css" />
<link rel="stylesheet" type="text/css" href="/php/6-30/Public/person/css/shopping-mall-index.css" />
<script type="text/javascript" src="/php/6-30/Public/person/js/jquery.js"></script>
<script type="text/javascript" src="/php/6-30/Public/person/js/zhonglin.js"></script>
</head>

<body style="position:relative;">

	<!--top 开始-->
    <div class="top">
    	<div class="top-con w1200">
        	<p class="t-con-l f-l">您好，欢迎<?php echo (session('register')); ?></p>
            <ul class="t-con-r f-r">
            	<li><a href="#">我 (个人中心)</a></li>
            	<li><a href="#">我的购物车</a></li>
            	<li><a href="#">我的订单</a></li>
            	<li class="erweima">
                	<a href="#">扫描二维码</a>
                    <div class="ewm-tu">
                    	<a href="#"><img src="/php/6-30/Public/person/images/erweima-tu.jpg" /></a>
                    </div>
                </li>
                <div style="clear:both;"></div>
            </ul>
            <div style="clear:both;"></div>
        </div>
    </div>
    
    <!--logo search 开始--><!--nav 开始-->
    <div style="border-bottom:2px solid #F09E0B;"></div>
    
    <!--内容开始-->
    <div class="personal w1200">
    	<div class="personal-left f-l">
        	<div class="personal-l-tit">
            	<h3>个人中心</h3>
            </div>
            <ul>
            	<li class="current-li per-li1"><a href="#">消息中心<span>></span></a></li>
            	<li class="per-li2"><a href="#">个人资料<span>></span></a></li>
            	<li class="per-li3"><a href="#">我的订单<span>></span></a></li>
            	<li class="per-li4"><a href="#">我的预约<span>></span></a></li>
            	<li class="per-li5"><a href="#">购物车<span>></span></a></li>
            	<li class="per-li6"><a href="#">管理收货地址<span>></span></a></li>
            	<li class="per-li7"><a href="#">店铺收藏<span>></span></a></li>
            	<li class="per-li8"><a href="#">购买记录<span>></span></a></li>
            	<li class="per-li9"><a href="#">浏览记录<span>></span></a></li>
            	<li class="per-li10"><a href="#">会员积分<span>></span></a></li>
            </ul>
        </div>
    	<div class="personal-r f-r">
        	<div class="personal-right">
                <div class="personal-r-tit">
                    <h3>个人资料</h3>
                </div>
                <form method="post" action="<?php echo U('Login/p_check');?>" enctype="multipart/form-data">
                <div class="data-con">
                	<div class="dt1">
                    	<p class="f-l">当前头像：</p>
                        <div class="touxiang f-l">
                        	<div class="tu f-l">
                            	<a href="#">
                                	<img src="/php/6-30/Uploads/<?php echo (session('pic')); ?>" />
                                    <input type="file" name="pic" id="" class="img1" />
                                </a>
                            </div>
                            <a href="JavaScript:;" class="sc f-l" shangchuang="">上传头像</a>
                            <div style="clear:both;"></div>
                        </div>
                        <div style="clear:both;"></div>
                    </div>
               	  <div class="dt1">
                    	<p class="dt-p f-l">用户名：</p>
                        <input type="text" value="" />
                        <div style="clear:both;"></div>
                    </div>
                    <div class="dt1 dt2">
                    	<p class="dt-p f-l">性别：</p>
                        <input type="radio" name="hobby" value="nan"></input><span>男</span>
                        <input type="radio" name="hobby" value="nan"></input><span>女</span>
                        <div style="clear:both;"></div>
                    </div>
                    <div class="dt1 dt3">
                   	  <p class="dt-p f-l">手机号：</p>
                        <input type="text" value="" />
                        <button>获取短信验证码</button>
                        <div style="clear:both;"></div>
                    </div>
                    <div class="dt1">
                   	  <p class="dt-p f-l">邮箱：</p>
                        <input type="text" value="" />
                        <div style="clear:both;"></div>
                    </div>
                    <div class="dt1 dt4">
                    	<p class="dt-p f-l">密码：</p>
                        <input type="text" value="" />
                        <button>修改密码</button>
                        <div style="clear:both;"></div>
                    </div>

                    <input type="submit" value="保存" class="btn-pst" />
                </div>
                </form>
            </div>
        </div>
        <div style="clear:both;"></div>
    </div>
    
    <!--上传头像弹窗
    <div class="tanchuang">
    	<div class="t-c-bg"></div>
    	<div class="t-c-con">
        	<div class="tc-tit">
            	<h3>上传头像</h3>
                <a href="JavaScript:;" delete=""><img src="images/t-c-del.gif" /></a>
                <div style="clear:both;"></div>
            </div>
            <div class="tc-con">
            	<a href="#"><img src="images/tc-tu.gif" /></a>
                <button>保存头像</button>
            </div>
        </div>
    </div>-->
    
    <!--底部服务-->
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