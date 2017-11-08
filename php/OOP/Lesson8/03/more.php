<?php
class myException extends Exception {
	public function getInfo() {
		return $this->getMessage();
	}
}

try{ //捕捉多个异常处理要抛出多个异常对象，不能是由一个异常处理类实例化的对象
	if ($_GET['num'] == 1) {
		throw new myException("这是自定义的异常处理");
	}elseif($_GET['num'] == 2) {
		throw new Exception("这是系统的异常处理");
	}
	echo "success...";
//在捕捉时，系统的异常处理分支要放到最后
//注意类型的约束
}catch(myException $e) {
	echo $e->getInfo();
}catch(Exception $e) {
	echo $e->getMessage();
}