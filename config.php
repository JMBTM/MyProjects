<?php
include "session.php";
class Users{
	private $host;
	private $uname;
	private $pass;
	private $db;

	public function connect(){
		$host = "localhost";
		$uname = "root";
		$pass = "";
		$db = "worcap";
		mysql_connect($host,$uname,$pass) or die("Couldn't connect to the server!");
		mysql_select_db($db) or die("Couldn't connect to the database!");
	}

}

?>