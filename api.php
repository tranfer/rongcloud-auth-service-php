<?php
/**
 * author:tranfer
 * time:2014-07-10
 */
	error_reporting(E_ALL);
	ini_set('display_errors',1);

	require_once 'HttpClient.class.php';
	$key=" ";//appKey
	$secret=" ";//appSecret
	$userId=&$_REQUEST["userId"];
	$deviceId=&$_REQUEST["deviceId"];
	$userName=&$_REQUEST["userName"];
	
	$client = new HttpClient('auth.cn.rong.io');
//	$client->setDebug(TRUE);//是否打开调试
	$client->setApp($key,$secret);
	$param=array("format"=>"json","userId"=>$userId,"deviceId"=>$deviceId,"userName"=>$userName,"uesrPortrait"=>"");
	$client->post("/reg.json",$param);
	$pageContents = $client->getContent(); 
	echo ($pageContents);
?>