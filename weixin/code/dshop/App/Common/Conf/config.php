<?php
return array(
    //'配置项'=>'配置值'
    //模板替换


    'TMPL_PARSE_STRING' => array(
        //'__PUBLIC__' => '/Common', // 更改默认的/Public 替换规则
        '__JS__' => __ROOT__ . '/Public/Assets/JS',
        '__CSS__' => __ROOT__ . '/Public/Assets/css'
    ),
    // 模板引擎普通标签开始标记
    'TMPL_L_DELIM' => '{',
    // 模板引擎普通标签结束标记        
    'TMPL_R_DELIM' => '}',
    'URL_MODEL' => '1',
    /* 数据库设置 */
    'DB_TYPE' => 'mysql', // 数据库类型
    'DB_HOST' => '106.14.154.161', // 服务器地址
    'DB_NAME' => 'dshop', // 数据库名
    'DB_USER' => 'dshop', // 用户名
    'DB_PWD' => 'dshop', // 密码
    'DB_PORT' => 3306, // 端口
    //'DB_PREFIX'             =>  '',    // 数据库表前缀
    'DB_CHARSET' => 'utf8', // 数据库编码默认采用utf8
    'DB_PARAMS' => array(\PDO::ATTR_CASE => \PDO::CASE_NATURAL), //字段名按照原始的方式
);
