<?php
	session_start();

	$pid=$_GET["id"];
	$arr=$_SESSION["mycar"];

	$file=fopen("js/bookdata.json","r");
	$str=fread($file,filesize("js/bookdata.json"));
	fclose($file);

	$data=json_decode($str,true);

	if(is_array($arr)){
     	if(array_key_exists($pid,$arr)){
     		$uu=$arr[$pid]; 
          	$uu["num"]=$uu["num"]+1; 
          	$arr[$pid]=$uu;
     	}else{
          	$arr[$pid]=array("pid"=>$pid,"name"=>$data['books'][$pid]["name"],"money"=>$data['books'][$pid]["much"],"url"=>$data['books'][$pid]["url"],"num"=>1);	
     	}
	}else{
 		$arr[$pid]=array("pid"=>$pid,"name"=>$data['books'][$pid]["name"],"money"=>$data['books'][$pid]["menoy"],"url"=>$data['books'][$pid]["url"],"num"=>1); 
	}
	$_SESSION["mycar"]=$arr;
?>	