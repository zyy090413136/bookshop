<?php
	$file=fopen("js/user.json","r");
	$str=fread($file,filesize("js/user.json"));
	fclose($file);

	$xing=$_GET["xing"];
	$ming=$_GET["ming"];
	$email=$_GET["email"];
	$id=$_GET["id"];
	$passwd=$_GET["passwd"];
	$passwd2=$_GET["passwd2"];

	$data=json_decode($str,true);
	for($i=0;$i<count($data['users']);++$i){
		if($data['users'][$i]['id']==$id){		
			break;
		}
	}

	if ($i==count($data['users'])){
		$data['users'][]=['xing'=>$xing,'ming'=>$ming,'email'=>$email,'id'=>$id,'passwd'=>$passwd,'passwd2'=>$passwd2];
		$str=json_encode($data,JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);
		echo "1";

		$file=fopen("js/user.json","w");
		fwrite($file,$str);
		fclose($file);
	}
	else{
		echo "2";
	}
	
?>