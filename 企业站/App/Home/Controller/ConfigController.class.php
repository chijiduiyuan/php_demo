<?php
namespace Home\Controller;
use Think\Controller;
class ConfigController extends Controller{

      public function _initialize(){ 
      $news_type=M('news_type')->order('sno asc')->select();
      //配置信息
       //C("title",'合肥诺博源软件科技有限公司333');
       
      $config=M('config')->find(1);
      C('conf',$config);
      $a['title']['num']=3;
      C('a',$a);
      /* echo "<pre>";
       print_r(C());
       die; */
      $this->assign('news_type',$news_type);
      }
  }













