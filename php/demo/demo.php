<?php

$str = "Once upon a time there was a turtle";
//将字符串分解为独立的字
$words = explode(' ',$str);
//反转这个字数组
$words = array_reverse($words);
//重建反转后的字符串
$str = implode(' ',$words);
print_r($str);