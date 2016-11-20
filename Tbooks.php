<?php
	$file=fopen("js/bookdata.json","r");
	$str=fread($file,filesize("js/bookdata.json"));
	fclose($file);

	echo $str;
?>