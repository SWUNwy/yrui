<?php
//自定义异常类的时候要继承系统的异常处理类
class myException extends Exception {
	//可以自定义异常处理流程
	public function getAllInfo() {
		return "发生异常的文件为：".$this->getFile()."异常的行为：".$this->getLine()."异常的信息：".$this->getMessage()."异常的代码：".$this->getCode();
	}
}
try{
	if ($_GET['num'] == 5) {
		throw new myException("这是自定义的异常信息","666");
	}echo "success...";
//捕捉异常时，注意类型约束为自定义的异常处理类名
}catch(myException $e){
	echo $e->getAllInfo();
}