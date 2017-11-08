<?php

class person{
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
		echo "say...";
	}

	public function run()
	{
		echo "running...";
	}

}

class teacher extends person{
	public function teach()
	{
		echo "teach...";
	}
}

$teacher = new teacher("yrui","24","man");
var_dump($teacher);
$teacher->say();
$teacher->teach();
echo "<hr />";
class student extends person{
	public function learning()
	{
		echo "learning...";
	}
}

$student = new student("tmac","1","man");
$student->run();
$student->learning();