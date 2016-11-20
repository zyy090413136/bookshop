<?php
	session_start();

	$pid=$_GET["id"];

	$file=fopen("js/bookdata.json","r");
	$str=fread($file,filesize("js/bookdata.json"));
	fclose($file);

	$data=json_decode($str,true);

	$data['books'][$pid]['pop']+=1;

	$str=json_encode($data,JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);

	$file=fopen("js/bookdata.json","w");
	fwrite($file,$str);
	fclose($file);
?>	