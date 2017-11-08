<?php

class person {

}
function __autoload($className) {
	$fileName = "./class/($className).class.php";
	if (file_exists($fileName)) {
		include($fileName);
	} else {
		die("not exists");
	}
	// echo $className;
}
/**
 * class_exists() 函数，判断类是否存在
 * 第一个参数：要判断的类
 * 第二个参数：(可选)如果设置为true，则会自动调用__autoload()方法进行类的自动加载
 * 第二个参数默认为false
 */
var_dump(class_exists("stu",true));