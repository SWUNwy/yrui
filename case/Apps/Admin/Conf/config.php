<?php
return array(
	//'配置项'=>'配置值'

    //配置静态资源路径
    'TMPL_PARSE_STRING' => array(
        '__JS__'        => __ROOT__.'/public/Admin/js',
        '__CSS__'       => __ROOT__.'/public/Admin/css',
        '__IMG__'       => __ROOT__.'/public/Admin/img',
        '__FONT__'      => __ROOT__.'/public/Admin/fonts',
        '__PLUGINS__'   => __ROOT__.'/public/Admin/plugins'
    ),

    'AUTH_CONFIG' => array(
        'AUTH_ON' => true, //认证开关
        'AUTH_TYPE' => 1, // 认证方式，1为时时认证；2为登录认证。
        'AUTH_GROUP' => 'yr_auth_group', //用户组数据表名
        'AUTH_GROUP_ACCESS' => 'yr_auth_group_access', //用户组明细表
        'AUTH_RULE' => 'yr_auth_rule', //权限规则表
        'AUTH_USER' => 'yr_user'//用户信息表
    ),

);