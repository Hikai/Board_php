<!DOCTYPE xhtml>
<html>
	<head>
		<title> File upload </title>
	</head>
	<body>
	<form action="proc_file.php" enctype="multipart/form-data" method="post">
		<input name="MAX_FILE_SIZE" type="hidden" value="7578" />
		File upload :
		<input name="upload" type="file" /><br />
		<input type="submit" />
	</form>
	</body>
</html>