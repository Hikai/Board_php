<?php
	include("./db_connect.php");
	$id = $_POST["id"];
	$pw = $_POST["pw"];
	$str_query = "select * from table_account where id=\"".$id."\" and pw=password('".$pw."');";
	$query_result = @mysql_query($str_query) or die("Query error");
	$array_result = mysql_fetch_array($query_result);
	if ($array_result[1] == $id) {
		session_start();
		echo("<script type=\"text/javascript\">alert('Login success')</script>");
		echo("<button name=\"index_return\" type=\"button\" onclick=\"location.href='./index.php'\"> Return </button>");
		exit();
	} else {
		echo("<script type=\"text/javascript\">alert('Login error')</script>");
		echo("<button name=\"index_return\" type=\"button\" onclick=\"location.href='./index.php'\"> Return </button>");
		exit();
	}
?>
