<?php
$arr = array(
	"name" => "yrui",
	"num"  => "1"
	);
$str = serialize($arr);
var_dump($str);
$arr1 = unserialize($str);
var_dump($arr1);