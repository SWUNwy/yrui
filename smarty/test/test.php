<?php
	require('../libs/Smarty.class.php');
	$smarty = new Smarty();
	//smarty 五配置
	$smarty->left_delimiter = "{"; //左定界符
	$smarty->right_delimiter = "}"; //右定界符
	$smarty->template_dir = "tpl";	//html模板地址
	$smarty->compile_dir = "template_c"; //模板编译生成的文件
	$smarty->cache_dir = "cache";	//缓存
	//以下是开启缓存的另外两个配置，因为通常不用Smarty的缓存机制，所以此项为了解
	$smarty->caching = true; //开启缓存
	$smarty->cache_lifeting = 120; //缓存时间

	// $smarty->assign("title","标题");
	$arr = array("title"=>"标题","name"=>"命名");
	$smarty->assign("arr",$arr);
	$smarty->display("test.tpl");