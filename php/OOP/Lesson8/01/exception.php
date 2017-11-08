<?php
//try分支，在此处进行代码测试，如果有问题就要抛出异常，如果没有就继续执行
try{
	$num = 11;
	if ($num == 1) {
		echo "success...";
	} else{
		//throw抛出异常对象
		//Exception类有两个参数
		//第一个参数：异常信息
		//第二个参数：异常代码
		throw new Exception("Error Processing Request", 666);
	}
} 
//catch分支 就是捕捉异常对象
//参数：异常对象，使用的是类型约束，只能捕捉由Exception类实例化来的对象 
catch(Exception $e) {
	echo $e->getFile();	//得到发生异常的文件
	echo "<br />";
	echo $e->getLine();	//得到发生异常的行
	echo "<br />";
	echo $e->getCode();	//得到发生异常的代码
	echo "<br />";
	echo $e->getMessage();	//得到发生异常的信息
	echo "<br />";
	echo $e;
}