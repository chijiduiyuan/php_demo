// JavaScript Document

<!-- 购物车js  -->

    $(function(){
		 //显示购物车的内容
		 $("#gwc").click(function(){
			  $("#tab").toggle();
			  
			 });
		
		
		  //显示购物车内容
		  $(".gwc").mouseover(function(){
			    $("#tab").show();
			  });
		  $(".gwc").mouseleave(function(){
			    $("#tab").hide();
			  });
		
		   // 购物车里面的加按钮
		  $(document).on('click','.jia',function(){
			  //加入购物车的提示
			
				  
				  
			     var nn=$(this).index('.jia');
				 var num=parseInt($(".tx").eq(nn).val())+1; // 当前这行的数量
				 $(".tx").eq(nn).val(num);
				 id=$(".tt").eq(nn).attr('tid');
				 ajax(id,2);
				 dzj(nn)  //单个 产品总价发生变化 
			     });

          //购物车里面的减少按钮
		   $(document).on('click','.jian',function(){
			     var nn=$(this).index('.jian');
				 var num=parseInt($(".tx").eq(nn).val())-1;
				 if(num<1){num=1;}
				 id=$(".tt").eq(nn).attr('tid');
				 ajax(id,3);//ajax调用
				 $(".tx").eq(nn).val(num);
				 dzj(nn);//单个 产品总价发生变化 
			    });

             //自己填写数量
              $(document).on('keyup','.tx',function(){
				     var nn=$(this).index('.tx');
					  var ss=$(this).val();
                       if(isNaN(ss)){   //判断如果填写的不是数字
						   $(this).val(1);
						   }
				       dzj(nn);//单个 产品总价发生变化 
				  });


		
            //点击加入购物车
		   $(document).on('click','.addcar',function(){
			     //加入购物车的提示语句
			     $("#msg").width('0px');
				 $("#msg").stop(true);
                  setTimeout(function(){
				  $("#msg").show().animate({width: '250px','opacity':1}, 500).delay(1000).fadeOut(300)},100);		  
				  
				  
			       var id=$(this).attr('uid');  //获取产品的唯一号Id
			       var img=$(this).parents('.pic').find('img').attr('src'); //获取图片地址
				   var title=$(this).parents(".pic").find(".title a").html(); //获取标题
				   var price=$(this).parents(".pic").find('.price').html(); //获取产品的价格
				   var num=0;
				   var index; //定义购物车里面的下标
				   
				     //循环所有购物车里面的产品
				    $(".tt").each(function(i){
						   var val=$(this).attr('tid');
						    if(id==val){
									num=1;
									index=i;  //找到对应的下标
								}
						});
				   
				  
				 if(num==0){  //判断没有重复
			     var html='<tr class="tt" tid="'+id+'" ><td><input type="checkbox" class="ck" /></td><td width="108" height="102" align="center" ><img src="'+img+'" width="100" height="100"></td><td width="162" align="center"  style="color:red; font-size:12px">'+title+'</td><td width="195" align="center" ><input type="button" value="-" class="jian"/><input type="text" value="1" class="tx aa" /><input type="button"   value="+" class="jia" /></td><td width="168" align="center" ><input type="text" class="dj aa" value="'+price+'" readonly/></td><td width="168" align="center" ><input type="text" value="'+price+'" class="zj bb" readonly /></td><td width="72" align="center" ><input type="button" value="删除" class="del" /></td></tr>';
				  $("#tab").append(html); //加入到购物车
				  ajax(id,1);
				  zong();
				   }

                else{    //有重复的
			    //把购物车里面的产品的数量加1
			         var nn=parseInt($(".tt").eq(index).find(".tx").val());
					     nn++;  //把数量加1
					 $(".tt").eq(index).find(".tx").val(nn);  //重新给数量赋值  
					 ajax(id,2);
					
					//单个产品总价
					dzj(index);
			       }
	
			    });
				
		  //购物车里面单个产品的删除		
		   $(document).on('click','.del',function(){
			         id=$(this).parents('.tt').attr('tid');
					 ajax(id,4);
			         $(this).parents('.tt').remove();
			         $("#num").html($(".tt").length);
			         zong();  //删除之后总价发生变化 
			   });
				
			
			//全选/全不选
			$("#qx").click(function(){
				    var aa=$("#qx").prop('checked');
					$(".ck").prop('checked',aa);
					zong();
				});	
				
			//单个选择的点击
			$(document).on('click','.ck',function(){
				  var ii=$(".ck:checked").length;
				  var ll=$(".tt").length;
				  
				  if(ii<ll){
					  $("#qx").prop("checked",false);
					  }
					else if(ii==ll){$("#qx").prop("checked",true); }
				
				  zong();
				});
			
				
				
				
		});
		
		    //单个产品总价的计算 
			function dzj(n){
				   //数量找出来
				   var s=parseFloat($(".tx").eq(n).val());
				   //单价找出来
				   var dj=parseFloat($(".dj").eq(n).val()).toFixed(2);
				   var rel=(s*dj).toFixed(2);  //保留小数点几位
				   $(".zj").eq(n).val(rel);
				   
				   zong();   // 总价发生变化 
				   
				}
		
     
	        //总个产品总价计算
			
			function zong(){
				  var ss=0;
				  //遍历所有的单个产品的总价 
				  //$(".zj").each(function(i){
				    $(".ck:checked").each(function(i){
					    ss=ss+parseFloat($(this).parents('.tt').find('.zj').val());
					  });
	  

				  $("#zongjia").html(ss);  // 给对象赋值
				  //计算产品的总个数
				  $("#num").html($(".tt").length);
				}

   //清除购物车里面所有的信息
   function delall(){
     $(".tt").each(function(){
          $(this).remove();
     });
   }



/*function ajax(id,n){
  $.ajax({
	  type:"POST",
  	 url:"{:U('Car/addcar')}",
  	 data:{'id':id},
	 dataType:"json",
  	 success:function(data){
  	 alert(data.id);
  	 },
  });
}*/