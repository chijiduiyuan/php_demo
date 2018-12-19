// JavaScript Document

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
  	 url:"{:U('Car/addcar')}",
  	 data:{'id':id,'n':n},
	 dataType:"json",
  	 success:function(data){
           $("#tab .tt").remove();
		  for(i in data){
			  var tprice=data[i].num*data[i].price;
			  var html='<tr class="tt" tid="'+data[i].id+'" ><td width="108" height="102" align="center" ><img src="__ROOT__'+data[i].pic+'" width="100" height="100"></td><td width="162" align="center"  style="color:red; font-size:12px">'+data[i].name+'</td><td width="72" align="center" ><input type="button" value="删除" class="del" /></td></tr>';
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
