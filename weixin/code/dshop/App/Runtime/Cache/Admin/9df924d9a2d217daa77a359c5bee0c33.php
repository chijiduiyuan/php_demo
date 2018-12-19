<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="zh-CN">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="/Public/admin/css/common.css">
  <link rel="stylesheet" href="/Public/admin/css/style.css">
  <script type="text/javascript" src="/Public/admin/js/jquery.min.js"></script>
  <script type="text/javascript" src="/Public/admin/js/jquery.SuperSlide.js"></script>
  <script type="text/javascript">
  $(function(){
      $(".sideMenu").slide({
         titCell:"h3", 
         targetCell:"ul",
         defaultIndex:0, 
         effect:'slideDown', 
         delayTime:'500' , 
         trigger:'click', 
         triggerTime:'150', 
         defaultPlay:true, 
         returnDefault:false,
         easing:'easeInQuint',
         endFun:function(){
              scrollWW();
         }
       });
      $(window).resize(function() {
          scrollWW();
      });
  });
  function scrollWW(){
    if($(".side").height()<$(".sideMenu").height()){
       $(".scroll").show();
       var pos = $(".sideMenu ul:visible").position().top-38;
       $('.sideMenu').animate({top:-pos});
    }else{
       $(".scroll").hide();
       $('.sideMenu').animate({top:0});
       n=1;
    }
  } 

var n=1;
function menuScroll(num){
  var Scroll = $('.sideMenu');
  var ScrollP = $('.sideMenu').position();
  /*alert(n);
  alert(ScrollP.top);*/
  if(num==1){
     Scroll.animate({top:ScrollP.top-38});
     n = n+1;
  }else{
    if (ScrollP.top > -38 && ScrollP.top != 0) { ScrollP.top = -38; }
    if (ScrollP.top<0) {
      Scroll.animate({top:38+ScrollP.top});
    }else{
      n=1;
    }
    if(n>1){
      n = n-1;
    }
  }
}
  </script>
  <title>后台首页</title>
</head>
<body>
    <div class="top">
      <div id="top_t">
        <div id="logo" class="fl"></div>
        <div id="photo_info" class="fr">
          <div id="photo" class="fl">
            <a href="#"><img src="/Public/admin/images/a.png" alt="" width="60" height="60"></a>
          </div>
          <div id="base_info" class="fr">
            <div class="help_info">
              <a href="1" id="hp">&nbsp;</a>
              <a href="2" id="gy">&nbsp;</a>
              <a href="<?php echo U('Index/loginout');?>" id="out">&nbsp;</a>
            </div>
            <div class="info_center">
              <?php echo (session('username')); ?>
              <span id="nt">通知</span><span><a href="#" id="notice">3</a></span>
            </div>
          </div>
        </div>
      </div>
      <div id="side_here">
        <div id="side_here_l" class="fl"></div>
        <div id="here_area" class="fl">当前位置：</div>
      </div>
    </div>
    <div class="side">
        <div class="sideMenu" style="margin:0 auto">

          <h3>新闻管理</h3>
          <ul>
            <li><a href="<?php echo U('Index/config');?>" target="right">配置信息</a></li>
            <li><a href="<?php echo U('Index/about',array('id'=>1));?>" target="right">关于我们</a></li>
            <li><a href="<?php echo U('Index/about',array('id'=>2));?>" target="right">联系我们</a></li>



            <li><a href="<?php echo U('News/newslist');?>" target="right">新闻列表</a></li>
            <li><a href="<?php echo U('News/add_news');?>" target="right">新闻添加</a></li>
            <li><a href="<?php echo U('News/news_typelist');?>" target="right">新闻分类</a></li>
            <li ><a href="<?php echo U('News/import');?>">导出新闻数据</a></li>
            <li ><a href="<?php echo U('News/excel_export');?>" target="right">导入新闻数据</a></li>
            
            
            <li class='on' >导航菜单</li>
          </ul>
          <h3> 产品管理</h3>
          <ul>
            <li><a href="<?php echo U('Cp/cplist');?>" target="right">产品列表</a></li>
            <li><a href="<?php echo U('Cp/cp_add');?>" target="right">产品增加</a></li>
            <li>产品分类</li>
           
          </ul>
          <h3> 微信</h3>
          <ul>
            <li><a href="<?php echo U('Weixin/menu');?>" target="right">自定义菜单</a></li>
         
           
          </ul>
         
 
 
 

       </div>
    </div>
    <div class="main">
       <iframe name="right" id="rightMain" src="<?php echo U('Index/config');?>" frameborder="no" scrolling="auto" width="100%" height="auto" allowtransparency="true"></iframe>
    </div>
    <div class="bottom">
      <div id="bottom_bg">版权</div>
    </div>
    <div class="scroll">
          <a href="javascript:;" class="per" title="使用鼠标滚轴滚动侧栏" onclick="menuScroll(1);"></a>
          <a href="javascript:;" class="next" title="使用鼠标滚轴滚动侧栏" onclick="menuScroll(2);"></a>
    </div>
</body>

</html>