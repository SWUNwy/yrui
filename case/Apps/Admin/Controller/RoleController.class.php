<?php

namespace Admin\Controller;

use Think\Controller;
/**
 * Description of RoleController
 *
 * @author Administrator
 */
class RoleController extends Controller {
    //put your code here
    public function index() {
        $role = M('auth_rule');
        import('Org.Util.Page');

        $count = $role->count();
                //实例化分页类 传入总记录数和每页显示的记录数
        $Page = new \Think\Page($count,10);

        //分页显示输出
        $show = $Page->show();
        $list = $role->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);
        $this->assign('page',$show);                
        $this->display();
    }
    
    public function addRole() {
        $this->display();
    }
    
    public function editRole() {
        $this->display();
    }
    
}
