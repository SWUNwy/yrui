<?php
header("Content-type:text/html;charset=utf-8");
/**
 * 
 * @abstract 公共函数
 * @author yrui <admin@cdyurui.com>
 * @version 0.1
 */
	/**
	 * 格式化输出数据
	 */
	function p($var) {
	    dump($var, true, null, 0);
	}



	/**
	 * 写日志，方便测试
	 * 注意：服务器需要开通fopen配置
	 * @param $word 要写入日志里的文本内容 默认值：空值
	 */
	function setLog($word='') {
		$fp = fopen("./Public/Log/PayLog.txt","a");
		flock($fp, LOCK_EX) ;
		// fwrite($fp,"执行日期：".strftime("%Y-%m-%d %H:%I:%S",time())."\n".$word."\n");
		fwrite($fp,"执行日期：".date('Y-m-d H:i:s')."\n".$word."\n");	
		flock($fp, LOCK_UN);
		fclose($fp);
	}

	/**
	 * 发送post请求获取success验证
	 * 注意：
	 * 1.使用Crul需要修改服务器中php.ini文件的设置，找到php_curl.dll去掉前面的";"就行了
	 * @param $url 指定URL完整的路径地址 
	 * @param $para 请求的结果
	 */
	function getInfo() {

		$ch = curl_init();
		$url = "http://1s569004j3.iok.la/service";
		$timeout = 60; //单位秒 s
		curl_setopt($ch,CURLOPT_URL,$url);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
		curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
		$data = curl_exec($ch);
		curl_close($ch);
		return $data;	
	}

	/**
	 * 发送post请求
	 * 注意：
	 * 1.使用Crul需要修改服务器中php.ini文件的设置，找到php_curl.dll去掉前面的";"就行了
	 * @param $url 指定URL完整的路径地址 
	 * @param $para 请求的结果
	 */
	function SendInfo($post_data) {
		$ch = curl_init();
		// $url = "http://swunmtl.imwork.net/serviceTest"; // 测试环境
		$url = "http://1s569004j3.iok.la/service";
		$timeout = 60; //单位秒 s
		curl_setopt($ch,CURLOPT_URL,$url);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
		curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
		$data = curl_exec($ch);
		curl_close($ch);
		return $data;
	}

	/**
	 * 获取图片路径
	 * @param $id
	 * @param string $field
	 * @return bool|string
	 */
	function getImgPath($images_id){
	    $info = M('picture')->where(['id'=>$images_id])->find();
	    if($info){
	        $path = __ROOT__.'/'.$info['path'];
	    }else{
	        $path = false;
	    }
	    return $path;
	}


	/**
	 * 获取分类树(无限级分类)
	 * @param $arr
	 * @param int $pid 父级id
	 * @param int $level 级别
	 * @return array
	 */
	function getTree($arr,$pid=0,$level=0){
	    static $list = array();
	    foreach($arr as $value){
	        if($value['pid'] == $pid){
	            if($level == 0){
	                $value['level'] = '';
	            }else{
	                $value['level'] = $level == 1 ? str_repeat('|&nbsp;---&nbsp;',$level) : '|'.str_repeat('&nbsp;---&nbsp;',$level);
	            }
	            $list[] = $value;
	            getTree($arr,$value['id'],$level+1);
	        }
	    }
	    return $list;
	}	