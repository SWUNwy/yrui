<?php
/**
 * PHP是单继承，一个类只能有一个父类
 * 一个类可以有多个子类
 * 支持多层继承
 */
class A {
	public $name = "yrui";
	public $age = "24";

	public function say()
	{
		return $this->name;
	}
}

class B extends A {}

class C extends B {}

$B = new B();
var_dump($B);
echo $B->say();
echo "<hr />";
$C = new C();
var_dump($C);
echo $C->say();