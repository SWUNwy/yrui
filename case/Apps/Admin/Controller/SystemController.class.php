<?php

namespace Admin\Controller;

use Think\Controller;
/**
 * Description of SyetemController
 *
 * @author Administrator
 */
class SystemController extends Controller {
    //put your code here
    public function index() {
    	$sys = M('system')->select();
    	$this->assign('sys',$sys);
        $this->display();
    }

    public function save() {
    	$id = I('id');
    	// p($id);
    	$data = array(
    		'title'			=> I('title'),
    		'keywords'		=> I('keywords'),
    		'description'	=> I('description'),
    		'copyright' 	=> I('copyright'),
    		'icp'			=> I('icp'),
    		'modified_time'	=> date('Y-m-d H:i:s')
    		);
    	$result = M('system')->where('id='.$id)->save($data);
    	// p($result);
    	// die();
    	if ($result) {
    		echo '<script>alert("修改成功");location.href="./index.html"</script>';
    	} else {
    		echo '<script>alert("修改失败");location.href="./index.html"</script>';
    	}
    }
}
