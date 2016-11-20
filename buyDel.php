<?php
	session_start();

	$pid=$_GET["id"];
	$urllll=$_GET["url"];
	$arr=$_SESSION["mycar"];

    unset($arr[$pid]);

	$_SESSION["mycar"]=$arr;
	header ('Location: '.$urllll);
?>	