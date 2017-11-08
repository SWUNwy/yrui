<?php

class Db {
	//魔术方法：__call() 是在调用一个不存在的方法时被调用
	//第一个参数：调用的方法名
	//第二个参数：调用方法时传的参数列表(数组格式)
	/*public function __call($methodName,$args) {
		echo "you have used method".$this->$methodName."()";
		print_r($args);
		echo "not exists";
	}*/
	private $sql = array(
		'table' => '',
		'field' => '',
		'where' => '',
		'order' => '',
		'limit' => ''
		);
	public function __call($methodName,$args) {
		//判断调用的方法名是否是成员属性数组的下标
		if (array_key_exists($methodName, $this->sql)) {
			//如果是，则进行赋值操作
			$this->sql[$methodName] = $args['0'];
		} else {
			//如果不是，则给出提示信息
			die("used method not exists");
		}
		// 返回本对象，实现连贯操作
		return $this;
	}

	public function select() {
		if ($this->sql['where']) {
			$where = "WHERE ".$this->sql['where'];
		}
		if ($this->sql['order']) {
			$order = "ORDER ".$this->sql['order'];
		}
		if ($this->sql['limit']) {
			$limit = "LIMIT ".$this->sql['limit'];
		}
		$sql = "SELECT {$this->sql['field']} FROM {$this->sql['table']} {$where} {$order} {$limit}"	;
		echo $sql;
		// $sql = "SELECT * FROM user WHERE uname=yrui ORDER id ASC limit id>1"
	}
}

$db = new Db();
$db->table("user")
   ->field("id,uname,pwd")
   ->where("uname=yrui")
   ->order("ASC")
   ->limit("id>1")
   ->select();
var_dump($db);