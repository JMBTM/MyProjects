<?php
	include "config.php";
	include "classCaller.php";
	$users->connect();
	if($_POST['login'])
	{
		$checkUserIfExist = mysql_query("SELECT * FROM users WHERE Username='".$_POST['uname']."' AND Password='".$_POST['pass']."'");
		if(mysql_num_rows($checkUserIfExist)>0)
		{
			$_SESSION['username'] = $_POST['uname'];
		}
		else{
			header("Location: index.php");
		}
	}
?>