<?php
/**
 * 设置私有成员与私有成员的访问———封装性
 * 封装性是面向对象编程中的三大特性之一，封装性就是把对象中的成员属性和成员方法加上访问修饰符，使其尽可能隐藏对象的内部细节，以达到对成员的访问控制
 * php5+支持以下三种访问修饰符
 * 1、public 公有的 默认*
 * 2、private 私有的
 * 3、protected 受保护的
 */

class Person {

	public $name = "Yrui";
	private $age = "24";
	protected $sex = "Man";

	// 私有的成员方法不能 不能再类的外部直接访问
	private function getName()
	{
		return $this->name;
	}
	// 受保护的成员方法 不能再类的外部直接访问
	protected function getAge()
	{
		return $this->age;
	}
	// 公有的成员方法，可以在类的外部直接访问
	public function getSex(){
		return $this->sex;
	}



}

	$person = new Person();
	echo $person->name;
	echo $person->getSex();
