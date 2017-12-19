<?php

namespace Admin\Controller;

use Think\Controller;

class BaseController extends Controller {

	protected function _initialize() {
		$uid = session('id');
		$auth = new \Think\Auth();
		// $rule_name=MODULE_NAME.'/'.CONTROLLER_NAME.'/'.ACTION_NAME;
		// if (!$auth->check($rule_name,$session_auth['uname']['uid'])) {
		// 	$this->error('no Access',U('Login/index'));
		// }
		if (!$auth->check()) {
			die("not Allow!");
		}
	}
}