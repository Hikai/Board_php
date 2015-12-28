<!DOCTYPE html>
<html>
<head>
	<title>board</title>
</head>
<body>
	<table style="width:100%; border:10px;" >
		<tr>
			<td>Number</td>
			<td>Name</td>
			<td>Title</td>
			<td>Date</td>
		</tr>
<?php
		include("./db_connect.php");
		$str_query = "select * from table_board order by num desc;";
		$query_result = @mysql_query($str_query) or die ("Query error");
		while ($array_result = mysql_fetch_array($query_result)) {
			echo("<tr><td>".$array_result[0]."</td><td>".$array_result[1]."</td><td><a href=\"./view.php?num=".$array_result[0]."\">".$array_result[2]."</a></td><td>".$array_result[3]."</td></tr>");
		}
		mysql_close($conn);
?>
	</table>
	<button name="write" type="button" onclick="location.href='./write.php'"> 
		Write
	</button>
	<button name="modify" type="button" onclick="location.href='./modify.php'"> 
		Modify
	</button>
	<button name="delete" type="button" onclick="location.href='./delete.php'"> 
		Delete
	</button>
	<br /><br /><br /><br /><br />
	<button name="join" type="button" onclick="location.href='./join.php'">
		Join
	</button>
	<button name="login" type="button" onclick="location.href='./login.php'">
		Login
	</button>
</body>
</html>
