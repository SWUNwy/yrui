<?php

class Demo {

	public $name;
	public $age;

	public function __construct($name,$age) {
		$this-> name = $name;
		$this-> age = $age;
	}

	public function say() {
		echo "say...";
	}
	// __clone() 魔术方法 是在克隆对象时被自动调用的
	// 作用：可以对新对象的成员属性进行赋值
	public function __clone() {
		$this-> name;
	}
}

$demo = new Demo("yrui","24");
$demo->say();
var_dump($demo);
$demonew = clone $demo;
echo "<hr />";
$demonew->say();
var_dump($demonew);
