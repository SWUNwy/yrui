<?php
class demo {
	public $name;
	public $age;
	public $sex;

	public function __construct($name,$age,$sex) {
		$this-> name = $name;
		$this-> age = $age;
		$this-> sex = $sex;
	}
	//魔术方法 __sleep() 是在串行化对象时被自动调用
	public function __sleep() {
		// echo "sleepping...";
		// 返回一个数组，数组的值就是要串行化的成员属性
		return array("name","age");
	}
	//魔术方法 __wakeup() 是在反串行化对象时被自动调用
	public function __wakeup() {
		// echo "__wakeup...";
		// 可以把发送改变的成员属性进行重新的赋值操作
		$this->age = $this-> age+1;
	}
}
$demo = new demo("tmac","1","man");
var_dump($demo);
$str = serialize($demo);
$handle = fopen("./data.txt", "w+");
fwrite($handle, $str);
fclose($handle);
var_dump($str);