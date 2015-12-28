<?php
	$name = $_POST["name"];
	$title = $_POST["title"];
	$content = $_POST["content"];
	include("./db_connect.php");
	date_default_timezone_set('UTC');
	$date = date("Y. m. d. H:i:s");
	$date_second = substr($date, -2);
	$str_query = "insert into table_board (name, title, date, content) values ('$name', '$title', '$date', '$content');";
	$query_result = @mysql_query($str_query) or die("Query error");
	if($query_result) {
		header("location:./index.php");
		exit();
	}
?>