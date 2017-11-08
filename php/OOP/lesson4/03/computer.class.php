<?php
require_once("mouse.class.php");
require_once("store.class.php");
require_once("key.class.php");
class computer {

	public function useUSB($obj)
	{
		$obj->run();
	}

}

$computer = new computer();
$computer->useUSB(new mouse());
echo "<hr />";
$computer->useUSB(new store());
echo "<hr />";
$computer->useUSB(new key());