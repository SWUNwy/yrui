<?php

include_once("usb.interface.php");

class store implements USB{

	public function run()
	{
		$this->initalize();
	}

	private function initalize()
	{
		echo "store running...";
	}
}