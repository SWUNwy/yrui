<?php
class demo {
	public $a = "a";
	public $b = "b";
	public $c = "c";
}

$demo = new demo();
/**
 * get_object_vars 
 * 返回一个由成员属性组成的关联数组，数组的下标为成员属性名，值为成员属性值
 * 参数：对象
 * 注意：只能得到公有的成员属性，私有的或受保护的成员属性无法得到
 */
var_dump(get_object_vars($demo));