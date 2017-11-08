<?php

class Person {

	public $name;
	public $age;
	public $sex;

	public function __construct($name,$age,$sex)
	{
		$this-> name = $name;
		$this-> age = $age;
		$this-> sex = $sex;
	}

	public function say() 
	{
		echo "say";
	}


	/**
	 * [__destruct description]
	 * 析构方法 __destruct()
	 * 在对象被销毁时自动调用。
	 * 用途：可以进行资源的释放操作或文件关闭操作或者信息保存操作
	 * 注意：栈内存的操作，先进后出
	 */
	public function __destruct()
	{
		echo "886".$this->name."<br />";
	}

}

	$person = new Person("yrui","24","woman");
	$person->say();
	echo "<hr />";
	$person2 = new Person("mac","1","man");
	$person2->say();
	echo "<hr />";
