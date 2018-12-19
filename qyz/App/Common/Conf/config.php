<?php
return array(
	//'配置项'=>'配置值'
	'URL_HTML_SUFFIX'       =>  'java|html|shtml',  // URL伪静态后缀设置
	'TMPL_TEMPLATE_SUFFIX'  =>  '.html',     // 默认模板文件后缀
	'DEFAULT_MODULE'        =>  'Home',  // 默认模块
	'DEFAULT_CONTROLLER'    =>  'Index', // 默认控制器名称
	'URL_MODEL'             =>  1,       // URL访问模式,可选参数0、1、2、3,代表以下四种模式：
    // 0 (普通模式); 1 (PATHINFO 模式); 2 (REWRITE  模式); 3 (兼容模式)  默认为PATHINFO 模式
    //'LOAD_EXT_FILE'			=>'common', //自动加载函数名
    'TMPL_PARSE_STRING'  =>array(
         //'__PUBLIC__' => '/Common', // 更改默认的/Public 替换规则     
         '__JS__'     => __ROOT__.'/Public/Assets/js', // 增加新的JS类库路径替换规则     
         '__CSS__' => __ROOT__.'/Public/Assets/css', // 增加新的上传路径替换规则

	),

    'TMPL_L_DELIM'          =>  '{',            // 模板引擎普通标签开始标记
    'TMPL_R_DELIM'          =>  '}',            // 模板引擎普通标签结束标记

    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  '106.14.154.161', // 服务器地址
    'DB_NAME'               =>  'qyz',          // 数据库名
    'DB_USER'               =>  'qyz',      // 用户名
    'DB_PWD'                =>  'qyz',          // 密码
    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8
	);