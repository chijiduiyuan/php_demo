<?php
namespace Home\Model;
use Think\Model;
class RegisterModel extends Model{
protected $patchValidate = true; 
//批量提示错误
//自动检测
protected $_validate = array(
 	 array('username','checkName','用户名必须是4-8位第一位为字母或者下划线',0,'function'), //自定义函数验证	
     array('username','require','用户名必须！'), //默认情况下用正则进行验证
     array('username','','用户名称已经存在！',0,'unique',1),// 在新增的时候验证name字段是否唯一
     array('pwd','require','密码必须填写！'), //默认情况下用正则进行验证
     array('pwd1','pwd','两次密码不一致',0,'confirm'), // 验证确认密码是否和密码一致
     array('tel','/^1[3|4|5|8|]\d{9}$/','手机号码格式不正确而且必须是11位数字',0,'regex'),
     array('tel','','手机已经存在！',0,'unique',1),
     array('email','email','邮箱格式不正确',0),    
     array('email','','邮箱已经存在！',0,'unique',1),
 
     );


  //自动完成给密码加密
 protected $_auto = array ( 
         array('pwd','md5',3,'function') , // 对pwd字段在新增和编辑的时候使md5函数处理
     );

 }








