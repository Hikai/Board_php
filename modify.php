<html>
<head>
	<title>Modify page</title>
<?php
	include("./db_connect.php");
?>
</head>
<body>
	<form action="modify.php" method="post">
<?php
		$str_query = "select num from table_board;";
		$query_result = @mysql_query($str_query) or die("Query error");
		echo("Article number select : <select name=\"list_num\">");
		while ($array_result = mysql_fetch_array($query_result)) {
			echo("<option value=\"".$array_result[0]."\">".$array_result[0]."</option>");
		}
?>
		</select>
		<input type="submit" value="Select" />
		<br />
	</form>
<?php
	if (@($select_option = $_POST["list_num"]) != null) {
		$str_query = "select * from table_board where num='".$select_option."'";
		$query_result = @mysql_query($str_query) or die("Query error");
		echo("Article number : ".$select_option."<br />");
	}
?>
	<form action="modify_process.php" method="post">
<?php
		while ($array_reuslt = mysql_fetch_array($query_result)) {
			echo("Name : <input name=\"name\" type=\"text\" value=\"".$array_reuslt[1]."\" /> <br />");
			echo("Title : <input name=\"title\" type=\"text\" value=\"".$array_reuslt[2]."\" /> <br />");
			echo("Content : ".$array_reuslt[4]."<br /> <textarea cols=\"50\" rows=\"10\" name=\"content\"></textarea> <br />");
		}
?>
		<input type="submit" value="Modify" />
		<input type="hidden" name="num" value="<?php echo($select_option); ?>" />
	</form>
</body>
</html>