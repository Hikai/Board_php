<?php
	$db_passwd = "password";
	$conn = @mysql_connect("localhost", "root", $db_passwd) or die("Connect error");
	$db_select = @mysql_select_db("db_board", $conn) or die ("DB select error");
?>
