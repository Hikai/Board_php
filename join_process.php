<?php
	include("./db_connect.php");
	$id = $_POST["id"];
	$pw = $_POST["pw"];
	$str_query = "insert into table_account (id, pw) values ('".$id."', password('".$pw."'));";
	$query_result = @mysql_query($str_query) or die("Query error");
	if($query_result) {
		header("location:./index.php");
		exit();
	}
?>