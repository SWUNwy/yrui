<?php
	//__autoload() 是在实例化对象的时候，如果类不存在，就会被自动调用
	//参数：实例化的类名
	//作用：可以用于自动引入类文件
	function __autoload($className) {
		// echo "autoload...";
		// 注意：类文件名要有规律
		// 		 类文件名要与类名统一的部分
		// 		 类文件的路径要有规律
		$file = $className.".class.php";
		$path = "./class/".$file;
		if (file_exists($path)) {
			include ($path);
		}else die("not exists");
	}

	$demo = new demo();
	var_dump($demo);
	$newdemo = new newdemo();