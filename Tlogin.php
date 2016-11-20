<?php
	session_start();
	header("Content-type: text/html; charset=utf-8");

	$username=$_POST['username'];
	$password=$_POST['password'];

	$file=fopen("js/user.json","r");
	$str=fread($file,filesize("js/user.json"));
	fclose($file);

	$data=json_decode($str,true);
	for($i=0;$i<=count($data['users']);++$i){
		if($data['users'][$i]['id']==$username&&$data['users'][$i]['passwd']==$password){
 			$_SESSION['username']=$username;
   
 			if(!file_exists('session_id')){
  				mkdir('session_id');
 			}
			$filename='session_id/'.$username;
 			$session_id=session_id();
 			file_put_contents($filename,$session_id);

 			if ($username=="admin") header ('Location: admin_news.php');
 				else header ('Location: index.php');
 			break;
 		}
	}
 	echo ('<script>window.location="login.php"</script>');
?>