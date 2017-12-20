<?php

namespace Admin\Controller;

use Think\Controller;

class BaseController extends Controller {

	protected function _initialize() {
		$uid = $_SESSION['uid'];
		if (!isset($uid) || $uid == '') {
			$this->error('非法操作!',U('Login/index'));
		}
		if ($uid == 1) {
			return true;
		}
		$auth = new \Think\Auth();
		$rule_name = MODULE_NAME.'/'.CONTROLLER_NAME.'/'.ACTION_NAME;
		$result = $auth->check($rule_name,$uid);
		if (!$result) {
			$this->error('no Access',U('Login/index'));
		}
	}
}