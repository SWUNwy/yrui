<?php
class person {
	public $name;
	private $age;
	protected $sex;

}
$person = new person();
/**
 * property_exists() 用于判断成员属性是否在一个类或对象中
 * 第一个参数：类名或对象
 * 第二个参数：要判断的成员属性名
 * return返回值：true/false
 */
// var_dump(property_exists("person", "name"));
var_dump(property_exists($person, "name"));
var_dump(property_exists($person, "age"));
var_dump(property_exists($person, "sex"));
var_dump(property_exists($person, "not"));