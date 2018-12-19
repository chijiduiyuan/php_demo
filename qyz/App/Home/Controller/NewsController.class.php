<?php
namespace Home\Controller;
use Think\Controller;
class NewsController extends ConfigController{

	//新闻页面
	public function news(){

		if(empty($_GET['typeid'])){ //第一次默认第一条新闻类型
			$aa=M('news_type')->order('sno asc')->limit(1)->select();
			$typeid=$aa[0]['typeid'];
		}else{$typeid=I('get.typeid');}
		
		//判断分页参数
		if(empty($_GET['p'])){$p=1;} //第一次默认第一页
		else{$p=$_GET['p'];}
		$aa=M('news_type')->find($typeid);
		$name=$aa['name'];// 新闻类型名称

		//分页处理
		$count=M('news')->where('type='.$typeid)->count(); //新闻总数
		$Page=new \Think\Page($count,2); //实例化分页
        $Page->parameter['typeid']=urlencode($typeid); //加传参参数
		$show=$Page->show();

		$list=M('news')->where('type='.$typeid)->page($p.',2')->select();
		$this->assign('name',$name);
		$this->assign('page',$show);
		$this->assign('list',$list);
		$this->display();
	}

	//新闻详情页面
	public function news_info(){
		header("content-type:text/html;charset=utf-8");

		$maxid=M('news')->max('newsid'); //最大id
		$minid=M('news')->min('newsid'); //最小id
		$newsid=I('get.newsid');
		$pre=M('news')->where('newsid<'.$newsid)->order('newsid desc')->limit(1)->find(); //上一篇
		$next=M('news')->where('newsid>'.$newsid)->order('newsid asc')->limit(1)->find(); //下一篇
		//判断上一页 下一页
		if($newsid>$minid && $newsid<$maxid){
			$ss='<a href="'.U('News/news_info',array('newsid'=>$pre['newsid'])).'">上一篇:'.$pre['title'].'</a><br/><a href="'.U('News/news_info',array('newsid'=>$next['newsid'])).'">下一篇:'.$next['title'].'</a>';
		}elseif($newsid==$minid){
			$ss='没有上一篇了<br/><a href="'.U('News/news_info',array('newsid'=>$next['newsid'])).'">下一篇:'.$next['title'].'</a>';
		}elseif($newsid==$maxid){
			$ss='<a href="'.U('News/news_info',array('newsid'=>$pre['newsid'])).'">上一篇:'.$pre['title'].'</a><br/>没有下一篇了';
		}
		//修改点击量
		// $arr=M('news')->find($newsid);
		// $data['count']=$arr['count']+1; //点击+1
		// M('news')->save($data);
		M('news')->where('newsid='.$newsid)->setInc('count',1); //点击量自增1 自减为setDec

		$list=M('news')->field('news.newsid,news.title,news.content,news.sj,news.count,news.newspic,a.name')->join('news_type a on news.type=a.typeid')->find($newsid);
		$this->assign('list',$list);

		//新闻评论
		$pl=M('message')->field('message.id,message.content,message.shijian,a.username,a.pic')->join('register a on a.id=message.userid')->where('newsid='.$newsid)->order('message.id desc')->select();
		$num=count($pl); //留言条数
		$this->assign('num',$num);
		$this->assign('pl',$pl);
		//var_dump($pl);
		$this->assign('ss',$ss);
		$this->display();
	}

	//新闻评论ajax
	public function pl_ajax(){
		$data['newsid']=I('post.newsid');
		$data['content']=I('post.val');
		$data['userid']=session('id');
		$data['shijian']=date('Y-m-d H:i:s');
		$id=M('message')->add($data);
		$data['id']=$id;
		$this->ajaxReturn($data,'json');
	}

	//写新闻评论删除ajax
	public function pl_del_ajax(){
		$id=I('post.id');
		M('message')->delete($id);
	}
}