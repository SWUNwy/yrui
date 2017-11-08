<?php

class person{

	private $name;
	protected $age;

	public function __construct($name,$age)
	{
		$this-> name = $name;
		$this-> age = $age;
	}

	public function un_set($name)
	{
		unset($this->$name);
	}

	//魔术方法 __unset() 在类的外部用函数__unset() 释放私有的或受保护的成员属性时被自动调用
	//参数：要释放的成员属性名
	//作用：可以按需求控制成员属性的释放操作
	public function __unset($name)
	{
		unset($this->$name);
	}
}

$person = new person("yrui","24");
// $person->un_set("name");
unset($person->name);
var_dump($person);

