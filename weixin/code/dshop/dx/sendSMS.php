<?php
session_start();
/*--------------------------------
����:HTTP�ӿ� ���Ͷ���
˵��:		http://http.yunsms.cn/tx/?uid=�����û���&pwd=MD5λ32����&mobile=����&content=����
״̬:
	100 ���ͳɹ�
	101 ��֤ʧ��
	102 ���Ų���
	103 ����ʧ��
	104 �Ƿ��ַ�
	105 ���ݹ���
	106 �������
	107 Ƶ�ʹ���
	108 �������ݿ�
	109 �˺Ŷ���
	110 ��ֹƵ����������
	111 ϵͳ�ݶ�����
	112	�д������
	113	��ʱʱ�䲻��
	114	�˺ű�����10���Ӻ��¼
	115	����ʧ��
	116 ��ֹ�ӿڷ���
	117	��IP����ȷ
	120 ϵͳ����
--------------------------------*/
$uid = '';		//�����û���
$pwd = '';		//����






$tel=$_POST['tel'];
$mobile	 = $tel;	//����
$_SESSION['tt']=mt_rand(100000,999999);
$content = 'ע����֤�룺'.$_SESSION['tt'].'��һ�����ύ��Ч����л����ע�ᣡ����è�̳ǡ�';		//����
//��ʱ����
$res = sendSMS($uid,$pwd,$mobile,$content);
$data['info']=$_SESSION['tt'];
echo json_encode($data);

//��ʱ����
/*
$time = '2010-05-27 12:11';
$res = sendSMS($uid,$pwd,$mobile,$content,$time);
echo $res;
*/
function sendSMS($uid,$pwd,$mobile,$content,$time='',$mid='')
{

	$http = 'http://http.yunsms.cn/tx/';
	$data = array
		(
		'uid'=>$uid,					//�����û���
		'pwd'=>strtolower(md5($pwd)),	//MD5λ32����
		'mobile'=>$mobile,				//����
		'content'=>$content,				//���� ����Է���utf-8���룬����ת��iconv('gbk','utf-8',$content); �����gbk������ת��
		'time'=>$time,		//��ʱ����
		'mid'=>$mid						//����չ��
		);
	$re= postSMS($http,$data);			//POST��ʽ�ύ
	if( trim($re) == '100' )
	{
		return "���ͳɹ�!";
	}
	else 
	{
		return "����ʧ��! ״̬��".$re;
	}
}

function postSMS($url,$data='')
{
	$post='';
	$row = parse_url($url);
	$host = $row['host'];
	$port = isset($row['port'] )? $row['port']:80;
	$file = $row['path'];
	while (list($k,$v) = each($data)) 
	{
		$post .= rawurlencode($k)."=".rawurlencode($v)."&";	//תURL��׼��
	}
	$post = substr( $post , 0 , -1 );
	$len = strlen($post);
	$fp = @fsockopen( $host ,$port, $errno, $errstr, 10);
	if (!$fp) {
		return "$errstr ($errno)\n";
	} else {
		$receive = '';
		$out = "POST $file HTTP/1.0\r\n";
		$out .= "Host: $host\r\n";
		$out .= "Content-type: application/x-www-form-urlencoded\r\n";
		$out .= "Connection: Close\r\n";
		$out .= "Content-Length: $len\r\n\r\n";
		$out .= $post;		
		fwrite($fp, $out);
		while (!feof($fp)) {
			$receive .= fgets($fp, 128);
		}
		fclose($fp);
		$receive = explode("\r\n\r\n",$receive);
		unset($receive[0]);
		return implode("",$receive);
	}
}
?>