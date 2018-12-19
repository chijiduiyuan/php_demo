<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends ConfigController {

    //前台主页
    public function index(){
        //公司新闻
        $data['name']="公司新闻";
        $list=M('news_type')->field('a.newsid,a.title,a.sj')->join('news a on a.type=news_type.typeid')->where('news_type.name="公司新闻"')->limit(6)->select();
        //var_dump($list);

        //新闻推荐
        $tj=M('news')->where(array('tj=1'))->select();

        //点击量最大的新闻
        $news_count=M('news')->field('title,con,newspic')->order('count desc')->limit(1)->find();
        //var_dump($news_count);

        //产品分类
        $cptype=M('cp_type')->select();
        foreach ($cptype as $key => $val) {
            $data['cp_type']=$val['typeid'];
            $cplist[$key]=M('cp')->where($data)->limit(6)->select();
        }

        $this->cptype=$cptype;
        $this->cplist=$cplist;

        $this->assign('list',$list);
        $this->assign('tj',$tj);
        $this->assign('news_count',$news_count);
        $this->display('Index/index');
    }
   

    //评论页面ajax检测
    public function pl_ajax(){
        $data['content']=I('post.message');
        $data['shijian']=time();
        $data['userid']=session('id');
        $rel=M('message')->add($data);
        $arr['info']=$rel?1:0;
        $arr['content']=$data['content'];
        $arr['shijian']=date('Y-m-d H:i:s',$data['shijian']);
        $this->ajaxReturn($arr,'json');
    }

    //关于我们页面
    public function about(){
     $this->list=M('about')->find(1);
     $this->display();
   }

   //联系页面
   public function contact(){
     $this->list=M('about')->find(2);
     $this->display();
   }

}