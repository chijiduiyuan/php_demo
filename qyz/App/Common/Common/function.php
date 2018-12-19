
	<?php
  //自己封装的上传文件方法
  function upload($dir='news'){
 //获取图片
    $upload = new \Think\Upload();// 实例化上传类
    $upload->maxSize   =     3145728 ;// 设置附件上传大小
    $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg','xls','xlsx');// 设置附件上传类型
    $upload->rootPath  =     './Uploads/'; // 设置附件上传根目录
    $upload->saveName = array('date', 'YmdHis');//改上传文件名
    $upload->savePath  =     $dir.'/'; // 设置附件上传（子）目录
    // 上传文件 
    $info   =   $upload->upload();
    //var_dump($info);
    //exit;

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


  //注册用户名检测
function checkName($username){
    if(!preg_match('/^[a-zA-Z_]{1}\w{3,7}$/', $username)){
        return false;
    }else{
        return true;
    }
}



?>