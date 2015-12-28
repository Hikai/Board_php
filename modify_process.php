<?php
	include("./db_connect.php");
	$num = $_POST["num"];
	$name = $_POST["name"];
	$title = $_POST["title"];
	$content = $_POST["content"];
	$str_query = "update table_board set name='".$name."', title='".$title."', content='".$content."' where num='".$num."';";
	$query_result = @mysql_query($str_query) or die("Query error");
	if($query_result) {
		header("location:./index.php");
		exit();
	}
?>