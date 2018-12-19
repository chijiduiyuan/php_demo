<?php
  //自己封装的上传文件方法
  function upload($dir='news'){
 //获取图片
    $upload = new \Think\Upload();// 实例化上传类
    $upload->maxSize   =     3145728 ;// 设置附件上传大小
    $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg','xls','xlsx');// 设置附件上传类型
    $upload->rootPath  =     './Uploads/'; // 设置附件上传根目录
    //$upload->saveName = array('date', 'YmdHis');//改上传文件名
    $upload->savePath  =     $dir.'/'; // 设置附件上传（子）目录
    // 上传文件 
    $info   =   $upload->upload();


    if(!$info) {// 上传错误提示错误信息
        echo $upload->getError();
        exit;
    }else{
        $arr=array();
        foreach($info as $val){
          $arr[]=$val['savepath'].$val['savename'];
         }

        //var_dump($arr);
      }
      return $arr;
}

   //加水印的方法

  function water($arr1){

        $image = new \Think\Image(); 
        $image->open($arr1)->water('./water.png',5,50)->save($arr1);



  }


  //检测用户

  //注册用户名检测
function checkName($username){
    if(!preg_match('/^[a-zA-Z_]{1}\w{3,7}$/', $username)){
        return false;
    }else{
        return true;
    }
}


  //把省市区转化成中文输出
  function conv($class_id){
        $rel=M('city')->where(array('class_id'=>$class_id))->find();
        return $rel['class_name'];
  }


//创建TOKEN
function creatToken() {
    $code = chr(mt_rand(0xB0, 0xF7)) . chr(mt_rand(0xA1, 0xFE)) . chr(mt_rand(0xB0, 0xF7)) . chr(mt_rand(0xA1, 0xFE)) . chr(mt_rand(0xB0, 0xF7)) . chr(mt_rand(0xA1, 0xFE));
    session('TOKEN', authcode($code));
}

//判断TOKEN
function checkToken($token) {
    if ($token == session('TOKEN')) {
        session('TOKEN', NULL);
        return TRUE;
    } else {
        return FALSE;
    }
}

/* 加密TOKEN */
function authcode($str) {
    $key = "ANDIAMON";
    $str = substr(md5($str), 8, 10);
    return md5($key . $str);
}

 
function  isuser(){
  header("content-type:text/html;charset=utf-8");
 if(!isset($_SESSION['user'])){
   //$this->success("对不起请登录",U('Login/index'),3);
      echo "对不起不能登录";
      header("refresh:2;url=".U('Login/index'));
         exit;
         }
}

 //算概率的函数
function getRand($proArr) {   //中奖的概率
     $data = '';
     //array('1'=>1,'2'=>2,'3'=>5)
    $proSum = array_sum($proArr); //概率数组的总概率精度  
    foreach ($proArr as $k => $v) { //概率数组循环
    //1,2,5,7,10,25,50,100,100
        $randNum = mt_rand(1, $proSum);  //       1,100   1,2,3,4,5
        if ($randNum <= $v) {
            $data = $k;
            break;
        } else {
            $proSum -= $v;
        }
    
    }
    unset($proArr);
    return $data;  
           }


?>