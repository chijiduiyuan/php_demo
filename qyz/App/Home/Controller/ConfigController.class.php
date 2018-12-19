<?php
namespace Home\Controller;
use Think\Controller;
class ConfigController extends Controller{
	public function _initialize(){
		$news_type=M('news_type')->order('sno asc')->select();
		$cp_type=M('cp_type')->select();

		//配置信息
		$config=M('config')->find(1);
		C('conf',$config);
		$a['title']['num']=3;
        C('a',$a);

		$this->assign('news_type',$news_type);
	}
}