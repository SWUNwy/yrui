<?php
class person{
	public $name;
	public $age;
	public $sex;

	public function __construct($name,$age,$sex) {
		$this-> name = $name;
		$this-> age = $age;
		$this-> sex = $sex;
	}
	public function say() {
		echo "my name is ".$this->name.",my age is ".$this->age.",my sex is ".$this->sex;
	}
}

class teacher extends person {
	public $teach;
	public function __construct($name,$age,$sex,$teach) {
		// $this-> name = $name;
		// $this-> age = $age;
		// $this-> sex = $sex;
		parent::__construct($name,$age,$sex);
		$this-> teach = $teach;		
	}
	//重写:就是声明一个与父类中同名的方法
	public function say() {
		// echo "my name is ".$this->name.",my age is ".$this->age.",my sex is ".$this->sex.",my teach is ".$this->teach;
		// 重载:parent::父类中同名的方法
		parent::say();
		echo ",my teach is ".$this->teach;
	}
}
class student extends person {
	public $school;
	public function __construct($name,$age,$sex,$school) {
		// $this-> name = $name;
		// $this-> age = $age;
		// $this-> sex = $sex;
		parent::__construct($name,$age,$sex);
		$this-> school = $school;		
	}
	public function say() {
		parent::say();
		// echo "my name is ".$this->name.",my age is ".$this->age.",my sex is ".$this->sex.",my school is ".$this->school;
		echo ",my school is ".$this->school;
	}
}

$teach = new teacher(
	"yrui","24","man","php");
$teach->say();
echo "<hr />";
$student = new student("tmac","1","man","nba");
$student->say();