<?php

namespace Admin\Controller;

use Think\Controller;

class IndexController extends BaseController {

    public function index() {
        $this->assign('user_id',session('id'));
        $this->assign('username',session('uname'));
        $this->display();
    }

    public function main() {
        //mysql版本信息
        $mysql_version = M()->query('SELECT VERSION() AS ver');
        $config = [
            'url' => $_SERVER['HTTP_HOST'],
            'document' => $_SERVER['DOCUMENT_ROOT'],
            'server_os' => PHP_OS,
            'server_port' => $_SERVER['SERVER_PORT'],
            'server_soft' => $_SERVER['SERVER_SOFTWARE'],
            'php_version' => PHP_VERSION,
            'mysql_version' => $mysql_version[0]['ver'],
            'max_upload_size' => ini_get('upload_max_filesize')
        ];

        $this->assign('config', $config);
        $this->display();
    }

}
