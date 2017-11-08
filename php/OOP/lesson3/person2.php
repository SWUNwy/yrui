<?php

class person2{

	private $name;
	protected $age;

	public function __construct($name,$age)
	{
		$this-> name = $name;
		$this-> age = $age;
	}

	public function is_set($name)
	{
		return isset($this->$name);
	}

	//魔术方法 __isset() 是在类的外部用函数 isset() 判断私有的或受保护的成员属性时被自动调用
	//参数：要判断的成员属性名
	//作用：可以按需求去返回 false或true
	public function __isset($name)
	{
		return isset($this->$name);
	}

}

$person = new person2("yrui","24");
// var_dump($person->is_set("name"));
var_dump(isset($person->name));
var_dump(isset($person->age));