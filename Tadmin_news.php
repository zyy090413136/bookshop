<?php
	$file=fopen("js/news.json","r");
	$str=fread($file,filesize("js/news.json"));
	fclose($file);

	$data=json_decode($str,true);
	
	for($i=0;$i<count($data['news']);++$i){
		$t=$_POST["n".$i];
		$data["news"][$i]=$t;
	}

	$str=json_encode($data,JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);
	echo $str;

	$file=fopen("js/news.json","w");
	fwrite($file,$str);
	fclose($file);

	echo ('<script>window.location="admin_news.php"</script>');
?>