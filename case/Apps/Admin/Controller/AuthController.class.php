<?php

namespace Admin\Controller;

use Think\Controller;
/**
 * Description of AuthController
 *
 * @author Administrator
 */
class AuthController extends Controller {
    //put your code here
    public function index() {
        $rule = M('auth_rule');
        import('Org.Util.Page');
        $count = $rule->count();
        $page = new \Think\Page($count,10);
        $show = $page->show()
        $list = $rule->order('last_time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);
        $this->assign('page',$page);
        $this->display();
    }
    
    public function addAuth() {
        $this->display();
    }

}
