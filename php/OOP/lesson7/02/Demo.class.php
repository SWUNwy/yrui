<?php

class demo {

	public $name;

	public function __construct($name) {
		$this-> name = $name;
	}
	//魔术方法：__toString() 是直接echo或print的时候自动调用
	//作用：可以直接返回字符串或用于调用流程处理
	public function __toString() {
		// return $this-> name;
		$this->run();
		$this->say();
		return '';
	}

	private function run() {
		echo "running...";
	}

	protected function say() {
		echo $this-> name;
	}
}

$demo = new demo("yrui");
echo $demo;