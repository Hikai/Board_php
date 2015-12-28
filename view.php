<html>
<head>
	<title>board - view</title>
<?php
	include("./db_connect.php");
?>
</head>
<body>
<?php
	$num = $_GET["num"];
	$str_query = "select * from table_board where num='".$num."';";
	$query_result = @mysql_query($str_query) or die ("Query error");
	while ($array_result = mysql_fetch_array($query_result)) {
		$name = $array_result[1];
		$title = $array_result[2];
		$date = $array_result[3];
		$content = $array_result[4];
	}
	echo("Num : ".$num."<br />");
	echo("Name : ".$name."<br />");
	echo("Title : ".$title."<br />");
	echo("Date : ".$date."<br />");
	echo("Content : <br />".$content."<br />");
?>
<!-- 	<form action="comment.php" method="post">
		Comment : <input name="comment" type="text" />
		<input type="submit" value="Cmt write" />
	</form> -->
</body>
</html>