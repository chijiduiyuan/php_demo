<?php
namespace Home\Controller;
use Think\Controller;
class CarController extends ConfigController{

       public function jies(){
         $this->display();
       }


      //选择产品最终页面

       public function buy(){
         //创建token
         creatToken();

         $cpid=I("post.cpid");  //找到对应产品的cpid一维数据
         $arr=array();
         $totals=0;
         foreach($cpid as $val){
           $arr[]=$_SESSION['car'][$val]; 
           $totals+=$_SESSION['car'][$val]['price']*$_SESSION['car'][$val]['num'];
          }
        //用户对应的地址查询
         $uid=$_SESSION['id'];
         $address=M('address')->where('uid='.$uid)->order('id desc')->select();
         /*echo "<pre>";
         print_r($address);
         die; */
        //把地址里面代号转化成中文显示
        foreach($address as $key=>$val){
            $address[$key]['pro']=conv($val['pro']);
            $address[$key]['city']=conv($val['city']);
            $address[$key]['area']=conv($val['area']);
         }

         $this->address=$address;
         $this->totals=$totals;
         $this->cplist=$arr;
         $this->display();
        }


    //order 提交
      public function order(){
       //防止重复提交 如果重复提交跳转至相关页面
       if(!isset($_SESSION['TOKEN'])) {
           $this->redirect('Car/jies'); 
       }else{session('TOKEN',null);}

    
      echo "<meta charset='utf8'/>";
      //echo I('totals'); 总价
      //I('post.cpid')   //最后订的产品
      // I('post.id')    //提交地址对应的ID
       $list=M('address')->find(I('post.id'));
       $list['pro']=conv($list['pro']);
       $list['city']=conv($list['city']);
       $list['area']=conv($list['area']); 
      
        //第一步生成一个订单
        $data['sn']=uniqid(date('Ymd'));
        $data['uid']=$_SESSION['id'];
        $data['total']=I('totals');
        $data['consignee']=$list['name'];
        $data['tel']=$list['tel'];
        $data['addr']=$list['pro'].$list['city'].$list['area'].$list['address'];
        $data['status']=1;
        $data['addtime']=time();
        $id=$data['id']=M('orders')->add($data);
        //订单详情增加
        foreach(I("cpid") as $val){
            $arr=$_SESSION['car'][$val]; 
            $pdata[]=array(
                 'oid' => $id,
                 'pid' => $arr['cpid'],
                 'uid' => $_SESSION['id'],
                 'title' => $arr['cpname'],
                 'img'   => $arr['spic'],
                 'price' => $arr['price'],
                 'number' => $arr['num'],
                 'addtime' => time()
                 );
              //在购物车里面把买过的产品清除掉
               unset($_SESSION['car'][$val]);
              } 
              //批量增加
           M('ordersproduct')->addAll($pdata);
           

           $this->data=$data;
           $this->display();
      }

     //city
     public function ajax_city(){
         //$data['id']=$type=I("post.id");
         $arr['class_parent_id']=I("post.id");
         $data=M('city')->where($arr)->select();
         $this->ajaxReturn($data,'json');
     }


    //地址的添加

   public function ajax_addr(){
       $data['pro']=I('post.pro');
       $data['city']=I('post.city');  
       $data['area']=I('post.area');
       $data['address']=I('post.address');
       $data['post']=I('post.post');
       $data['tel']=I('post.tel');
       $data['name']=I('post.name');
       $data['uid']=$_SESSION['id'];
       //加到地址数据库里面去
       $data['id']=M('address')->add($data);
      //把省市区的编码再转化成中文显示
       $data['pro']=conv($data['pro']);
       $data['city']=conv($data['city']);
       $data['area']=conv($data['area']);
       $this->ajaxReturn($data,'json');
   }

    //支付成功之后
    public function pay(){
      echo "<meta charset='utf-8' />";
         $data['sn']=$sn=I('post.sn');
         $arr['payid']=I('post.payid');
         $arr['status']=2;

         M('orders')->where($data)->save($arr);
         $this->success("支付成功",U('User/order'),3);
       }

    //会员进入后台支付
        public function result(){
        
            $id=I('get.id');
            $this->data=M('orders')->find($id);
            $this->display();


         }


   

 }