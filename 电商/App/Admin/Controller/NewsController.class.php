<?php
namespace Admin\Controller;
use Think\Controller;
class NewsController extends Controller{

      public function newslist(){
         //第一步算总数
      	$count = M("news")->count();
      	//实例化分页类
      	$Page=new \Think\Page($count,3);
      	$show=$Page->show();//得到分页
        if(empty($_GET['p'])){$_GET['p']=1;}
        //session('p',$_GET['p']);
        $mm=M('news');
        $list=$mm->field('news.newsid,news.tj,news.title,news.type,news.content,news.count,news.sj,news.newspic,a.name')->join('news_type a on news.type=a.typeid')->page($_GET['p'].',3')->select();
        //echo $mm->getLastSql();
        //die;

        // echo "<pre>";
         //print_r($list);
        session('list',$list);
        $this->assign('list',$list);
        $this->assign('page',$show);
        $this->assign('p',$_GET['p']);//页码
      	$this->display();
      }


     public function add_news(){
       $type=M('news_type')->select();
       $this->assign('type',$type);
       $this->display();	
     }


    public function news_check(){
        $data['title']=I('post.title');
        $data['content']=I('post.content');
        $data['type']=I('post.type');
        $data['sj']=date('Y-m-d H:i:s');
        $data['con']=I('post.con');
        $data['tj']=I('post.tj');

     $file=$_FILES['newspic'];
     if(!empty($file['name'])){
        $arr=upload();//调用自定义上传函数
        $arr1='./Uploads/'.$arr[0];

        //给上传的图片加图片水印
        //调用自己写的水印方法
         water($arr1);
        $data['newspic']=$arr[0];
      }

        //把图片的地址放到表里面   
        M('news')->add($data);
        $this->success('新闻添加成功',U('News/newslist'),2);
    }


  
   public function pic(){
        $mm=M('news');
        $mm->join('news_type a on news.type=a.typeid')->where('news.type=3')->delete();
        echo $mm->getLastSql();
     }

   //新闻修改页面
    public function news_modi(){
        
        $newsid=I('get.newsid');
        $p=I('get.p');
        $list=M('news')->find($newsid);
        $type=M('news_type')->field('news_type.typeid,news_type.name')->select();
        $this->assign('type',$type);
        $this->assign('list',$list);
        $this->assign('p',$p);
        $this->display();

    }


  //新闻修改验证页面
    public function news_modi_check(){
       $p=I('post.p');
       $data['title']=I('post.title');
       $data['content']=I('post.content');
       $data['type']=I('post.type');
       $data['con']=I('post.con');
       $data['tj']=I('post.tj');
       $data['sj']=date('Y-m-d H:i:s');
       $data['newsid']=I('post.newsid');
       $newspic1='./Uploads/'.I('post.newspic1');

     $file=$_FILES['newspic'];
       
     if(!empty($file['name'])){
        unlink($newspic1);  //删除之前的图片

        $arr=upload();//调用自定义上传函数
        $arr1='./Uploads/'.$arr[0];
        //给上传的图片加图片水印
        //调用自己写的水印方法
         water($arr1);
        
        $data['newspic']=$arr[0];
       }

          $rel=M('news')->save($data);

          $this->success('修改成功',U('News/newslist',array('p'=>$p)),2);

    }


    //新闻分类
    public function news_typelist(){
       $list=M('news_type')->order('sno asc')->select();
       $this->assign('list',$list);
       $this->display();

    }

   public function news_type_check(){
         $typeid=I('post.typeid');
         $name=I('post.name');
         $sno=I('post.sno');
         /*echo "<pre>";
         print_r($typeid);
         print_r($name);*/
         $len=count($name);
         for($i=0;$i<$len;$i++){
            $data['typeid']=$typeid[$i];
            $data['name']=$name[$i];
            $data['sno']=$sno[$i];
            M('news_type')->save($data);
         }
         $this->success('批量修改成功',U('News/news_typelist'),3);

    }

     //ajax修改新闻分类

    public function news_type_ajax(){
         $data['name']=I('post.name');
         $data['typeid']=I('post.typeid');
         $data['sno']=I('post.sno');
         
         $rel=M('news_type')->save($data);
         $aa['info']=$rel?1:0;
         $this->ajaxReturn($aa,'json');
    }

   //分类删除
    public function news_del_ajax(){
        $typeid=I('post.typeid');
        M('news_type')->delete($typeid);
        M('news')->where('type='.$typeid)->delete();  
        $rr['info']=1;
        $this->ajaxReturn($rr,'json');
    }

    //分类添加

    public function news_add_ajax(){

        $data['name']=I('post.name');
        $data['sno']=I('post.sno');
        $typeid=M('news_type')->add($data);

       
    }

  //新闻数据导出
    public function import(){
        $news_list=session('list');
        /*echo "<pre>";
        print_r($news_list);
        die; */
        //重新组装需要的数据
       foreach($news_list as $key=>$val){
         $data[$key][newsid]=$val['newsid'];
         $data[$key][title]=$val['title'];
         $data[$key][content]=$val['content'];
         $data[$key][name]=$val['name'];
         $data[$key][type]=$val['type'];
         $data[$key][count]=$val['count'];
         $data[$key][sj]=$val['sj'];

        }
      

     //给excel做标题 
        $headArr=array('新闻ID','新闻标题','新闻内容','新闻分类','新闻分类id','新闻点击','发布时间');
        //给导出的excel命名(前缀)
         $filename="news_list";
         $this->getExcel($filename,$headArr,$data);
    }


private  function getExcel($fileName,$headArr,$data){
        //导入PHPExcel类库，因为PHPExcel没有用命名空间，只能inport导入
        import("Org.Util.PHPExcel");
        import("Org.Util.PHPExcel.Writer.Excel5");
        import("Org.Util.PHPExcel.IOFactory.php");

        $date = date("Y_m_d_H:i:s",time());
        $fileName .= "_{$date}.xls";

        //创建PHPExcel对象，注意，不能少了\
        $objPHPExcel = new \PHPExcel();
        $objProps = $objPHPExcel->getProperties();

        //设置表头
        $key = ord("A");
        //print_r($headArr);exit;
        foreach($headArr as $v){
            $colum = chr($key);
            $objPHPExcel->setActiveSheetIndex(0) ->setCellValue($colum.'1', $v);
            $objPHPExcel->setActiveSheetIndex(0) ->setCellValue($colum.'1', $v);
            $key += 1;
        }

        $column = 2;
        $objActSheet = $objPHPExcel->getActiveSheet();

        //print_r($data);exit;
        foreach($data as $key => $rows){ //行写入
            $span = ord("A");
            foreach($rows as $keyName=>$value){// 列写入
                $j = chr($span);
                $objActSheet->setCellValue($j.$column, $value);
                $span++;
            }
            $column++;
        }

        $fileName = iconv("utf-8", "gb2312", $fileName);

        //重命名表
        //$objPHPExcel->getActiveSheet()->setTitle('test');
        //设置活动单指数到第一个表,所以Excel打开这是第一个表
        $objPHPExcel->setActiveSheetIndex(0);
        ob_end_clean();//清除缓冲区,避免乱码
        header('Content-Type: application/vnd.ms-excel');
        header("Content-Disposition: attachment;filename=\"$fileName\"");
        header('Cache-Control: max-age=0');

        $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
        $objWriter->save('php://output'); //文件通过浏览器下载
        exit;
    }


    //数据的导入

    public function excel_export(){
       $this->display();
    }

    public function export_check(){
         $file=$_FILES['exceldata'];
         $name=$file['name'];
         $name=explode('.',$name);
         $hz=array_pop($name);
         if($hz=='xls'|| $hz=='xlsx'){
         $aa=upload('excel');
         }
         else{
            $this->error('上传文件名不对');
         }
         $excel=$aa[0];
         $filename='./Uploads/'.$excel;  
         $this->excel_save($filename,$hz);
      }

      //调用获取的excel数据保存到数据库表中

    public function excel_save($filename, $exts='xls'){
//导入PHPExcel类库，因为PHPExcel没有用命名空间，只能inport导入
        import("Org.Util.PHPExcel");
        //创建PHPExcel对象，注意，不能少了\
        $PHPExcel=new \PHPExcel();
        //如果excel文件后缀名为.xls，导入这个类

      if($exts == 'xls'){
            import("Org.Util.PHPExcel.Reader.Excel5");
            $PHPReader=new \PHPExcel_Reader_Excel5();
        }else if($exts == 'xlsx'){
            import("Org.Util.PHPExcel.Reader.Excel2007");
            $PHPReader=new \PHPExcel_Reader_Excel2007();
        }
   //载入文件
        $PHPExcel=$PHPReader->load($filename);
  //获取表中的第一个工作表，如果要获取第二个，把0改为1，依次类推
        $currentSheet=$PHPExcel->getSheet(0);
        //获取总列数
        $allColumn=$currentSheet->getHighestColumn();
        //获取总行数
        $allRow=$currentSheet->getHighestRow();
 //循环获取表中的数据，$currentRow表示当前行，从哪行开始读取数据，索引值从0开始
for($currentRow=2;$currentRow<=$allRow;$currentRow++){
  //从哪列开始，A表示第一列
   for($currentColumn='A';$currentColumn<=$allColumn;$currentColumn++){
       //数据坐标
       $address=$currentColumn.$currentRow; //A1 B1
     //读取到的数据，保存到数组$arr中
                $cell =$currentSheet->getCell($address)->getValue();
    //封装二维数组
        $data[$currentRow][$currentColumn]=$cell;

        }//列循环
      
   
} //行循环
      
    //插入到数据库
    $all=array();
    foreach($data as $val){
        $arr['title']=$val['B'];
        $arr['content']=htmlspecialchars($val['C']);
        $arr['type']=$val['E'];
        $arr['count']=$val['F'];
        $arr['sj']=$val["G"];
        $all[]=$arr;
        }
        //批量插入
       M('news')->addAll($all);
         //删除上传的excel
         unlink($filename);
         $this->success('数据插入成功',U('News/newslist'),3);
     }
  //excel数据导入结束

}

 