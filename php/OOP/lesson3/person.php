<?php

class Person{

	private $name;
	protected $age;

	public function __construct($name,$age)
	{
		$this-> name = $name;
		$this-> age = $age;
	}

	public function get($name)
	{
		return $this-> $name;
	}

	//魔术方法 __get() 在类的外部直接得到私有的或受保护的成员属性时被自动调用
	//参数：要访问的成员属性名
	//作用：可以得到私有的或受保护的成员属性，也可以对返回的结果进行控制
	public function __get($name)
	{
		return $this-> $name;
	}

}

$person = new Person("yrui","24");
echo $person-> name;

