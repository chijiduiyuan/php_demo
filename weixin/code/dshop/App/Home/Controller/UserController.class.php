<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends ConfigController{
       public function index(){
         isuser(); //判断是否登录
         $this->list=M('register')->find($_SESSION['id']);

         $this->display();     
       }


   //用户的修改
       public function user_modi(){
          $code=I('post.code');
          if($code!=$_SESSION['tel']){
           $this->error('对不起验证码不正确');
          }

         die;
         $mm=M('register');
         $mm->create();
         $file=$_FILES['pic'];
         //判断如果上传图片了
         if(!empty($file['name'])){
             $pic1=I('post.pic1');
             unlink('./Uploads/'.$pic1);
             $pic=upload('person');
             $mm->pic=$pic[0];
           }
         $mm->save();
         $this->success('用户修改成功',U('User/index'),2);
       }


   //会员订单的管理
       public function order(){
           isuser();//会员是否登录
         echo "<meta charset='utf-8' />";

          //查询对应会员的订单 (订单表的查询)
          $data['uid']=$_SESSION['id'];
          //获取当前用户所有的订单信息
          $orders=M('orders')->where($data)->select();
         
          foreach($orders as $key=>$val){
              $arr['oid']=$val['id'];
              $orders[$key]['son']=M('ordersproduct')->where($arr)->select();
            }

          //echo "<pre>";
          //print_r($orders);

         /* foreach($orders as $val){
              echo $val['sn']."<br/>";
              
             foreach($val['son'] as $sonval){
                   echo $sonval['title']."<br/>";

              }
             echo "--------------------<br/>";
          }  */


          $this->list=$orders;
          $this->display();
         }


   //用户注册验证短信

        public function user_check(){

           $code=I('post.code');
           if($code!=$_SESSION['tt']){
              $this->error('手机验证码不正确');
           }
           echo '验证码正确';

        }


   //抽奖模板
        public function cj(){
          isuser();
          $this->display();
        }

  //抽奖判断
       
        public function cj_ajax(){
         

  $prize_arr = array(
      '0' => array('id' => 1, 'prize' => '谢谢参与', 'v' => 1000),
      '1' => array('id' => 2, 'prize' => '代金卷5元', 'v' => 30),
      '2' => array('id' => 3, 'prize' => '代金卷1元', 'v' => 50),
      '3' => array('id' => 4, 'prize' => '代金卷10元', 'v' => 20),
      '4' => array('id' => 5, 'prize' => '谢谢参与', 'v' => 1000),
      '5' => array('id' => 6, 'prize' => '代金卷20元', 'v' => 10),
      '6' => array('id' => 7, 'prize' => '代金卷50元', 'v' => 1),
      '7' => array('id' => 8, 'prize' => '代金卷30元', 'v' => 5)
      );

    foreach ($prize_arr as $v) {     
     //组装成一个一维数组
          $arr[$v['id']] = $v['v'];        //array('1'=>1,'2'=>2,'3'=>5)
           }     
   $prize_id = getRand($arr)-1; //获取二维数组的真正下标
   $n=$prize_id;//获取下标
   $pname=$prize_arr[$prize_id]['prize']; //获取名称

          $user=M('register')->find($_SESSION['id']);

          //判断当前抽奖的时间是不是当天
          if($user['sj']!=date('Y-m-d')){
              $user['count']=0;
              $user['sj']=date("Y-m-d");
            }

          $num=$user['count'];
          $num++;

          //判断能否抽奖
          if($num<=2){
            $user['count']++;
            M('register')->save($user);
            $pz['p_name']=$pname;
            $pz['username']=$_SESSION['user'];
            $pz['sj']=date('Y-m-d');
            $pz['uid']=$_SESSION['id'];
            M('price')->add($pz);
           }

          $data['count']=$num;
          $data['n']=$n;
          $data['name']=$pname;
          $data['jf']=$user['jf'];
          $this->ajaxReturn($data,'json');
        }


   public function cc(){

    $n=mt_rand(0,7);//获取下标
    echo $n;

   }

}
