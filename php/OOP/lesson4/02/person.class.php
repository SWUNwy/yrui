<?php
/**
 * 接口 
 * 声明关键字 interface
 * 接口中可以声明常量，也可以声明抽象方法
 * 接口中的方法都是抽象方法，不需要使用abstract修饰
 * 接口不能实例化，需要一个类去实现它（implements）
 * 一个类可以实现多个接口（解决了PHP单继承的问题）
 */
interface person{

	const NAME = "yrui";

	public function say();
	public function run();

}

interface learn{
	public function study();
}
class man implements person,learn{

	public function say()
	{
		echo "say...";
	}

	public function run()
	{
		echo "run...";
	}

	public function study()
	{
		echo "learn...";
	}

}

$man = new man();
$man->say();
echo "<hr >";
echo man::NAME;
echo "<hr >";
$man->study();