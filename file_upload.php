<!DOCTYPE xhtml>
<html>
	<head>
		<meta charset="utf-8" content="text/html" http-equiv="Content-Type" />
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
<?php
if ($_SERVER["REQUEST_METHOD"] != "POST") {
	exit;
}
// $basedir_upload = "./files/";
// $tmp_name_file = str_replace(".", "", $_FILES["file"]["tmp_name"]);
// $dir_upload = $basedir_upload.basename($tmp_name_file);
// $result = move_uploaded_file($tmp_name_file, $dir_upload);
$base_path = "./files/"
$file_name = str_replace(".", "", $_FILES["file"]["tmp_name"]);
$result = move_uploaded_file($file_name, $base_path.$file_name);
if ($result == true) {
	echo("success");
} else {
	echo("fail");
}
?>
