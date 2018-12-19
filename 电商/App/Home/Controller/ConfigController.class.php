<?php
namespace Home\Controller;
use Think\Controller;
class ConfigController extends Controller{
	
      public function _initialize(){ 
     
     
      $config=M('config')->find(1);
      C('conf',$config);
    
      }
  }


