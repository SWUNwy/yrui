<?php
include('./demo.class.php');
$str = file_get_contents("./data.txt");
var_dump($str);
$un = unserialize($str); //可以把串行化的结果反串行化操作
var_dump($un);
var_dump($un->name);
