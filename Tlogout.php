<?php
	session_start();

	$preurl=$_GET['pre'];

	$username=$_SESSION['username'];
	
	unset($_SESSION['username']);
	
	$filename='session_id/'.$username;
 	unlink($filename);

	echo ('<script>window.location="'.$preurl.'"</script>');
?>
