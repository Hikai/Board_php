<html>
<head>
	<title>Delete page</title>
<?php
	include("./db_connect.php");
?>
</head>
<body>
	<form action="delete.php" method="post">
<?php
		$str_query = "select num from table_board;";
		$query_result = @mysql_query($str_query) or die("Query error");
		echo("Article number select : <select name=\"list_num\">");
		while ($array_result = mysql_fetch_array($query_result)) {
			echo("<option value=\"".$array_result[0]."\">".$array_result[0]."</option>");
		}
?>
		<input type="submit" value="Delete" />
	</form>
	</select>
	<br />
<?php
	if (@($select_option = $_POST["list_num"]) != null) {
		$str_query = "delete from table_board where num='".$select_option."';";
		$query_result = @mysql_query($str_query) or die("Query error");
		if($query_result) {
			header("location:./index.php");
			exit();
		}
	}
?>
</body>
</html>