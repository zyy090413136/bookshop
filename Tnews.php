<?php
	$file=fopen("js/news.json","r");
	$str=fread($file,filesize("js/news.json"));
	fclose($file);

	echo $str;
?>