<?php
 namespace Admin\Controller;
 use Think\Controller;
 echo "<meta charset='utf8'/>";
 class NewsController extends Controller{
 	//新闻列表
 	public function newslist(){
 		$count = M("news")->count(); //算新闻总数
 		$Page=new \Think\Page($count,2);  //实例化分页类
 		$show=$Page->show(); //得到分页
 		
 		
 		//if($_GET['']==""){$_GET['p']=1;}
 		$list=M('news')->field('news.newsid,news.title,news.type,news.content,news.sj,news.newspic,news.count,news.tj,a.name')->join('news_type a on news.type=a.typeid')->limit($Page->firstRow.','.$Page->listRows)->order('news.newsid asc')->select();
 		//$list=M('news')->field('news.newsid,news.title,news.sj,news.newspic,a.name')->join('news_type a on news.type=a.typeid')->page($_GET['p'].',2')->select();

 		session('list',$list);
 		$this->assign('page',$show); // 赋值分页输出
 		//$this->assign('p',$_GET['p']); //传页码
 		$this->assign('list',$list);
 		$this->display();
 	}

 	//新闻添加
 	public function news_add(){
 		$type=M('news_type')->order('sno asc')->select();
 		$this->assign('type',$type);
 		$this->display();
 	}

 	//新闻添加检测
 	public function news_add_check(){
 		$data['title']=I('post.title');
 		$data['content']=I('post.content');
 		$data['type']=I('post.type');
 		$data['sj']=date("Y-m-d H:i:s");
 		$data['tj']=I('post.tj');
 		$data['con']=I('post.con');

 		$file=$_FILES['newspic'];
 		if(!empty($file['name'])){
	        $arr=upload();//调用自定义上传函数
	        $arr1='./Uploads/'.$arr[0];

	        water($arr1);//调用自己写的水印方法,给上传的图片加图片水印
	        $data['newspic']=$arr[0];
      	}

 		M('news')->add($data);
 		$this->success('添加成功',U('News/newslist'),1);
 	}

 	//新闻修改页面
 	public function news_modi(){
 		$newsid=I('get.newsid');
 		//$p=$_GET['p'];
 		$list=M('news')->find($newsid);
 		$type=M('news_type')->field('news_type.typeid,news_type.name')->select();
 		$this->assign('list',$list);
 		$this->assign('type',$type);
 		//$this->assign('p',$p);
 		$this->display();
 	}

 	//新闻修改检测页面
 	public function news_modi_check(){
 		//$p=I('post.p');
 		$data['title']=I('post.title');
 		$data['content']=I('post.content');
 		$data['type']=I('post.type');
 		$data['sj']=date('Y-m-d H:i:s');
 		$data['tj']=I('post.tj');
 		$data['con']=I('post.con');
 		$data['newsid']=I('post.newsid');
 		$newspic1='./Uploads/'.I('post.newspic1'); //获取已有的图片地址

 		$file=$_FILES['newspic']; //获取新的图片地址
 		if(!empty($file['name'])){
	        unlink($newspic1);  //删除之前的图片

	        $arr=upload();//调用自定义上传函数
	        $arr1='./Uploads/'.$arr[0];
	        
	         water($arr1);//给上传的图片加图片水印,调用自己写的水印方法
	        
	        $data['newspic']=$arr[0];
        }

 		M('news')->save($data);
 		$this->success('修改成功',U('News/newslist'),1);
 	}

 	//新闻分类
 	public function news_typelist(){
 		$list=M('news_type')->order('sno asc')->select();
 		//var_dump($list);
 		$this->assign('list',$list);
 		$this->display();
 	}

 	//新闻分类修改
 	public function news_type_check(){
 		$name=I('post.name');
 		$sno=I('post.sno');
 		$typeid=I('post.typeid');
 		$len=count($name);
 		for($i=0;$i<$len;$i++){
 			$data['name']=$name[$i];
 			$data['sno']=$sno[$i];
 			$data['typeid']=$typeid[$i];
 			M('news_type')->save($data);
 		}
 		$this->success('批量修改成功',U('News/news_typelist'),2);
 	}

 	//新闻分类ajax修改
 	public function type_modi_ajax(){
 		$data['typeid']=I('post.typeid');
 		$data['name']=I('post.name');
 		$data['sno']=I('post.sno');
 		$rel=M('news_type')->save($data);
 		$arr['info']=$rel?1:0;
 		$this->ajaxReturn($arr,'json');
 	}

 	//新闻分类ajax删除
 	public function type_del_ajax(){
        $typeid=I('post.typeid');
        M('news_type')->where('typeid='.$typeid)->delete();
        M('news')->where('type='.$typeid)->delete();      
    }

 	//新闻分类ajax添加a
 	public function type_add_ajax(){
 		$data['name']=I('post.name');
 		$data['sno']=I('post.sno');
 		$rel=M('news_type')->add($data);
 		$arr['info']=$rel?1:0;
 		$this->ajaxReturn($arr,'json');
 	}

 	//新闻数据导出
 	public function news_import(){
 		$news_list=session('list');

 		//重组需要的数据
 		foreach ($news_list as $key => $val) {
 			$data[$key][newsid]=$val['newsid'];
 			$data[$key][title]=$val['title'];
            $data[$key][content]=$val['content'];
 			$data[$key][name]=$val['name'];
            $data[$key][type]=$val['type'];
 			$data[$key][count]=$val['count'];
 			$data[$key][sj]=$val['sj'];
 		}

 		// echo "<pre>";
 		// var_dump($data);
 		// die;

 		//给excel做标题
 		$headArr=array('新闻ID','新闻标题','新闻内容','新闻分类','新闻分类id','新闻点击','发布时间');
        //给导出的excel命名(前缀)

 		//给导出的excel命名（前缀）
 		$filename="news_list";
 		$this->getExcel($filename,$headArr,$data);
 	}

 	//导入类库
 	private  function getExcel($fileName,$headArr,$data){
        //导入PHPExcel类库，因为PHPExcel没有用命名空间，只能import导入
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


    //数据导入
    public function news_export(){
    	$this->display();
    }

    //数据导入检测
    public function export_check(){
    	$file=$_FILES['exceldata'];
    	$name=$file['name'];
    	$name=explode('.',$name);
    	$hz=array_pop($name);
    	if($hz=='xls'|| $hz=='xlsx'){$aa=upload('excel');}
    	else{$this->error('上传文件名不对');}
    	$excel=$aa[0];
    	$filename='./Uploads/'.$excel;
    	$this->excel_save($filename,$hz);
    }

    //调用获取的excel数据保存到数据库表中
    public function excel_save($filename, $exts='xls'){
		//导入PHPExcel类库，因为PHPExcel没有用命名空间，只能import导入
        import("Org.Util.PHPExcel");//创建PHPExcel对象，注意，不能少了\
        $PHPExcel=new \PHPExcel();//如果excel文件后缀名为.xls，导入这个类
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
       		$address=$currentColumn.$currentRow; //A1 B2
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
	    $this->success('数据插入成功',U('News/newslist'),1);
	}














 }

 ?>