<?php
/**
 * 含有抽象方法的类一定是抽象类
 * 抽象类中不一定含有抽象方法
 * 抽象类中也可以有普通方法
 * 抽象类不能直接实例化，必须由一个子类去继承，并把所有父类中的抽象方法都实现（重写）
 */
abstract class person{
	

	public abstract function say();


	public function run()
	{
		echo "run...";
	}

}

class human extends person{

	public function say()
	{
		echo "say...";
	}

}

$human = new human();
$human->say();
$human->run();

