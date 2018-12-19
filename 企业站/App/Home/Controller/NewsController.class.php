<?php
namespace Home\Controller;
use Think\Controller;
 class NewsController extends ConfigController{

      public function news(){
      	if(empty(I('get.typeid'))){
   $aa=M('news_type')->order('sno asc')->limit(1)->select();
        $typeid=$aa[0]['typeid'];   
         }
         else{$typeid=I('get.typeid');}
         //判断分页参数
         if(empty($_GET['p'])){
         	 $p=1; //第一次打开默认为第一页
         }else{
         	 $p=$_GET['p'];
         }

         $aa=M('news_type')->find($typeid);
         $name=$aa['name'];

       //分页处理

         $count=M("news")->where('type='.$typeid)->count();
         $Page= new \Think\Page($count,2);
         //加传参参数
         $Page->parameter['typeid']   =   urlencode($typeid);

         $show= $Page->show();// 分页显示输出 

         $list=M('news')->where('type='.$typeid)->page($p.',2')->select();
         $this->assign('name',$name);
         $this->assign('list',$list);
         $this->assign('page',$show);
         $this->display();
      }


     public function news_info(){

     	$maxid=M('news')->max('newsid');
     	$minid=M('news')->min('newsid');
        $newsid=I('get.newsid');

         

       if($newsid>$minid && $newsid<$maxid){
       	$pre=M('news')->where('newsid<'.$newsid)->order('newsid desc')->limit(1)->find();
   
       	$next=M('news')->where('newsid>'.$newsid)->order('newsid asc')->limit(1)->find();
       
    $ss='上一篇:<a href="'.U('News/news_info',array('newsid'=>$pre['newsid'])).'" >'.$pre['title'].'</a><br/>下一篇:<a href="'.U('News/news_info',array('newsid'=>$next['newsid'])).'">'.$next['title'].'</a>';
        }

        elseif($newsid==$minid){

$next=M('news')->where('newsid>'.$newsid)->order('newsid asc')->limit(1)->find();
      
 $ss='没有上一篇<br/>下一篇:<a href="'.U('News/news_info',array('newsid'=>$next['newsid'])).'">'.$next['title'].'</a>';

        }

    elseif($newsid==$maxid){
	$pre=M('news')->where('newsid<'.$newsid)->order('newsid desc')->limit(1)->find();
    $ss='上一篇:<a href="'.U('News/news_info',array('newsid'=>$pre['newsid'])).'" >'.$pre['title'].'</a><br/>没有下一篇';
       }
     M('news')->where('newsid='.$newsid)->setInc('count',1); //点击量增加

        $list=M('news')->field('news.title,news.newsid,news.content,news.sj,news.count,a.name')->join('news_type a on news.type=a.typeid')->find($newsid);
        $this->assign('list',$list);

       //留言评论

        $pl=M('message')->field('message.id,message.content,message.shijian,a.username,a.pic')->join('register a on a.id=message.userid')->where('newsid='.$newsid)->order('message.id desc')->select();
        $num=count($pl);//留言条数
        $this->assign('num',$num);
        $this->assign('pl',$pl);
        
        $this->assign('ss',$ss);
        $this->display();

     }


    //新闻评论ajax提交
     public function pl_ajax(){
         $data['newsid']=I('post.newsid');
         $data['content']=I('post.val');
         $data['userid']=session('id');
         $data['shijian']=date('Y-m-d H:i:s');
         $id=M('message')->add($data);
         $data['id']=$id;
         $this->ajaxReturn($data,'json');
     }

   //留言删除ajax
     public function pl_del_ajax(){
         $id=I('post.id');
         M('message')->delete($id);
     }

  }








