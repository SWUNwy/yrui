<?php

class Person{

	private $name;
	protected $age;

	public function set($name,$value)
	{
		$this-> $name = $value;
	}
	// 魔术方法 __set()　是在给私有的或受保护的成员属性在类的外部直接赋值时被自动调用
	// 第一个参数：要赋值的成员属性
	// 第二个参数：要赋值的值
	// 作用：可以更好的对程序进行控制
	public function __set($name,$value)
	{
		$this-> name = $value;
	}

}

$person = new Person();
// $person->set("name","yrui");
// $person->set("age","24");
$person-> name = "yrui";
$person-> age = "24";
var_dump($person);
