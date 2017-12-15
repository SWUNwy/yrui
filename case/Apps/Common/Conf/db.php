<?php
return array(
	//'配置项'=>'配置值'
    'DB_TYPE'   => 'mysql', // 数据库类型
    'DB_HOST'   => 'localhost', // 服务器地址
    'DB_NAME'   => 'wyecho', // 数据库名
    'DB_USER'   => 'root', // 用户名
    'DB_PWD'    => '', // 密码
    'DB_PORT'   => 3306, // 端口
    'DB_PREFIX' => 'yr_', // 数据库表前缀
    'DB_CHARSET'=>  'utf8', // 数据库编码默认采用utf8
    'DB_PARAMS'    =>    array(\PDO::ATTR_CASE => \PDO::CASE_NATURAL),
    'SHOW_PAGE_TRACE' => 'true' //开启调试模式

    'AUTH_CONFIG' => array(
        'AUTH_ON' => true, //认证开关
        'AUTH_TYPE' => 1, // 认证方式，1为时时认证；2为登录认证。
        'AUTH_GROUP' => 'auth_group', //用户组数据表名
        'AUTH_GROUP_ACCESS' => 'auth_group_access', //用户组明细表
        'AUTH_RULE' => 'auth_rule', //权限规则表
        'AUTH_USER' => 'user'//用户信息表
    ),
);