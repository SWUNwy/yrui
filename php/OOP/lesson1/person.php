<?php

class person {

	public $name;
	public $age;
	public $sex;


	/**
	 * [__construct description]
	 * 构造方法 __construct() 在实例化对象时被自动调用；
	 * 可以用于初始化程序（可以给成员属性赋值，也可以调用成员方法）
	 * 语法：function __construct() {}
	 * @param [type] $n [description]
	 * @param [type] $a [description]
	 * @param [type] $s [description]
	 */
	public function __construct($n,$a,$s) 
	{
		$this-> name = $n;
		$this-> age = $a;
		$this-> sex = $s;
		$this-> say();
	}

	public function say() 
	{
		echo "my name is ".$this->name.",my age is ".$this->age.",my sex is ".$this->sex;
	}


}

	$person1 = new person("yrui",24,"man");

	echo $person1->name;
	echo "<br />";
	echo $person1->age;
	echo "<br />";
	echo $person1->sex;
	echo "<br />";

	echo $person1->say();