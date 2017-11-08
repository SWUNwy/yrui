<?php

class demo {
	public function d() {}
}
$demo = new demo();
/**
 * method_exists() 用于判断一个成员方法是否是在一个对象或类中
 * 第一个参数：类名或对象
 * 第二个参数：成员方法名
 * return返回值：true/false
 */
// var_dump(method_exists("demo", "d"));
var_dump(method_exists($demo, "d"));