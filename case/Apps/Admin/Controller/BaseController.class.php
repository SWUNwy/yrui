<?php

namespace Admin\Controller;

use Think\Controller;

class BaseContrller extends Controller {

	public function _initialize() {
		$this->redriect('Login/index');
	}
}