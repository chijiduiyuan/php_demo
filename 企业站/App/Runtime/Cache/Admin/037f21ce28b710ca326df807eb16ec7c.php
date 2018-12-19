<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="zh-CN">
<head>
	<meta charset="UTF-8">

    <link rel="stylesheet" href="/php/6-30/Public/admin/css/login.css">
    <script type="text/javascript" src="/php/6-30/Public/admin/js/jquery.min.js">  
    </script>
    <script>
	    $(function(){
			 $(".username").keyup(function(){
				   var val=$(this).val();
				   $.ajax({
					     url:"<?php echo U('Index/ajax_user');?>",
						 type:"POST",
						 dataType:"json",
						 async:true,
						 data:{'username':val},
						 success: function(data){
							    if(data.info==1){
									 $("#notice_usrename").html('用户名正确');
									}else{
									  $("#notice_usrename").html('用户名不正确');
										}
		
							 },

					   });
				 
				 });
			
			
			
			});
    
    </script>
	<title>后台登陆</title>
</head>
<body>
	<div id="login_top">
		<div id="welcome">
			欢迎使用教学质量与教学改革工程管理系统
		</div>
		<div id="back">
			<a href="#">返回首页</a>&nbsp;&nbsp; | &nbsp;&nbsp;
			<a href="#">帮助</a>
		</div>
	</div>
	<div id="login_center">
		<div id="login_area">
			<div id="login_form">
				<form action="<?php echo U('Index/login_check');?>" method="post">
					<div id="login_tip">
						用户登录&nbsp;&nbsp;UserLogin
					</div>
			<div><input type="text" class="username" name="username"/></div>
            <div id="notice_usrename" style="color:red"></div>
					<div><input type="text" class="pwd" name="pwd"></div>
					<div id="btn_area">
						<input type="submit" name="submit" id="sub_btn" value="登&nbsp;&nbsp;录">&nbsp;&nbsp;
						<input type="text" class="verify" name="code">
						<img src="<?php echo U('Index/very');?>" onClick="this.src=this.src+'?id='+Math.random()" width="80" height="40">
					</div>
				</form>
			</div>
		</div>
	</div>
	<div id="login_bottom">
		版权所有
	</div>
</body>
</html>