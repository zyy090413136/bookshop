<?php
	$file=fopen("js/user.json","r");
	$str=fread($file,filesize("js/user.json"));
	fclose($file);

	$data=json_decode($str,true);
	
	for($i=0;$i<count($data['users']);++$i){
		$t=$_POST["id".$i];
		$data["users"][$i]["id"]=$t; 
		$t=$_POST["pw".$i];
		$data["users"][$i]["passwd"]=$t;
		$t=$_POST["pw2".$i];
		$data["users"][$i]["passwd2"]=$t;
		$t=$_POST["x".$i];
		$data["users"][$i]["xing"]=$t;
		$t=$_POST["m".$i];
		$data["users"][$i]["ming"]=$t;
		$t=$_POST["em".$i];
		$data["users"][$i]["emil"]=$t;
		
	}

	$str=json_encode($data,JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);
	echo $str;

	$file=fopen("js/user.json","w");
	fwrite($file,$str);
	fclose($file);

	echo ('<script>window.location="admin_users.php"</script>');
?>