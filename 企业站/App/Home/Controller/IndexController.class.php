<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends ConfigController{
    public function index(){
    // 公司新闻
    $list=M('news_type')->field('a.newsid,a.title,a.sj')->join('news a on a.type=news_type.typeid')->where('news_type.name="公司新闻"')->limit(6)->select();
    //新闻推荐
    $tj=M('news')->where(array('tj=1'))->select();

      //产品分类

      $cptype=M('cp_type')->select();
   
      foreach($cptype as $key=>$val){
        $data['cp_type']=$val['typeid'];
        $cplist[$key]=M('cp')->where($data)->select();
        }
      /*echo "<pre>";
      print_r($cplist);
      die; */

      $this->cptype=$cptype;
      $this->cplist=$cplist;
      
    
    


      $this->assign('tj',$tj);
    	$this->assign('list',$list);
      $this->display('Index/index');
    }

    //新闻页面
    public function news(){
      //查询数据
    $list=M('news')->field('newsid,title,sj')->select();

      $this->assign('list',$list);
      $this->display('Index/news');

    }

   //新闻详情页面
   public function news_info(){
   $newsid=$_GET['newsid'];
   $newsid=I('newsid');
   $list=M('news')->where('newsid='.$newsid)->select();
    $this->assign('list',$list);
    $this->display('Index/news_info');	  
    }

   //新闻的添加页面
    public function news_add(){

    	$this->display('Index/news_add');
    }

  //新闻添加检测页面
    public function news_check(){
        $data['title']=I('post.title');
        $data['content']=I('post.content');
        $data['type']=I('post.type');
        $data['sj']=date('Y-m-d H:i:s');
        //$maxid=M('news')->data($data)->add();
        if(empty($data['title'])||empty($data['content'])){$this->error('新闻标题或者内容不能为空');}
        $maxid=M('news')->add($data);
        if($maxid){
          $this->success('新闻添加成功',U('Index/newslist'),3);
         }

    }

   //新闻的列表
     public function newslist(){
      $list=M('news')->field('title,newsid,type,sj')->select();
      $this->assign('list',$list);
      $this->display();	
     }


  //新闻删除
     public function news_del(){
      $newsid=I('get.newsid');
      //$rel=M('news')->where('newsid='.$newsid)->delete();
      //$rel=M('news')->delete($newsid);
      $data['newsid']=$newsid;
      $rel=M('news')->where($data)->delete();
      if($rel){
         $this->success('新闻删除成功',U('Index/newslist'),3);
      }
     }

   //修改页面
     public function news_modi(){
       $newsid=I('get.newsid');
     //$list=M('news')->where('newsid='.$newsid)->find();
     $list=M('news')->find($newsid);
     $this->assign('list',$list);
     $this->display();
      }

  //修改检测页面
       public function news_modi_check(){
       	   $newsid=I('post.newsid');
           $data['newsid']=I('post.newsid');
           $data['title']=I('post.title');
           $data['content']=I('post.content');
           $data['type']=I('post.type');
           $data['sj']=date('Y-m-d H:i:s');
           $rel=M("news")->save($data);
           //$rel=M('news')->data($data)->save();
           //$rel=M('news')->where('newsid='.$newsid)->save($data);

           if($rel){
           	 $this->success('新闻修改成功',U('Index/newslist'),3);
           }
         }
    //导入自己的类
       public function bb(){
       	   //导入自己写的类
           import('Home.class.UserList');
           $cc=new \User;//要实例
           $cc->hh();
       }
   //模型
       public function dd(){        
       	 //实例化模型
        //$user=new \Home\Model\NewsModel();
        $user=D('User'); //用D方法实例化模型类NewsModel
          $rel=$user->buy(36);
          var_dump($rel);
       }


       //退出session

     public function loginout(){
       session('register',null);
       //unset($_SESSION['username']);
       $this->success('退出成功',U('Index/index'),3);
     }


   //留言

     public function pl(){
      //$list=M('message')->order('id desc')->select();
       //$MM=M();
   //$list=$MM->query("SELECT  message.content,message.shijian,register.username from message,register where message.uid=register.id order by message.id desc");

     // $mm=M('message');
     // $list=$mm->field('message.content,message.shijian,a.username')->join('register as a on message.uid=a.id')->order('message.id desc')->select();

    $mm=M("message");
   $list=$mm->table('message a,register b')->where('a.uid=b.id')->order('a.id desc')->select();
       echo $mm->getLastSql(); //获取原生态语句


       echo"<pre>";
       print_r($list);
       die;

      $this->assign('list',$list);
      $this->display();
     }

    //ajax留言
    public function pl_check(){
       $data['content']=I("post.message");
       $data['shijian']=time();
       $data['uid']=$_SESSION['id'];
       $rel=M('message')->add($data);
       $arr['info']=$rel?1:0;
       $arr['content']=$data['content'];
       $arr['shijian']=date('Y-m-d H:i:s',$data['shijian']);
       $this->ajaxReturn($arr,'json');
    }

   public function about(){
     $this->list=M('about')->find(1);
     $this->display();
   }

   public function contact(){
     $this->list=M('about')->find(2);
     $this->display();
   }

}