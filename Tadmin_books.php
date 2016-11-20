<?php
	$file=fopen("js/bookdata.json","r");
	$str=fread($file,filesize("js/bookdata.json"));
	fclose($file);

	$data=json_decode($str,true);
	
	for($i=0;$i<count($data['books']);++$i){
		$t=$_POST["n".$i];
		$data["books"][$i]["name"]=$t; 
		$t=$_POST["a".$i];
		$data["books"][$i]["author"]=$t;
		$t=$_POST["m".$i];
		$data["books"][$i]["much"]=$t;
		$t=$_POST["u".$i];
		$data["books"][$i]["url"]=$t;
		
	}

	$str=json_encode($data,JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);
	echo $str;

	$file=fopen("js/bookdata.json","w");
	fwrite($file,$str);
	fclose($file);

	echo ('<script>window.location="admin_books.php"</script>');
?>