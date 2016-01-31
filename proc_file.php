<?php
if ($_SERVER["REQUEST_METHOD"] != "POST") {
	die("Unusual request method");
}
$basedir_upload = "./files/";
$tmp_name_file = str_replace(".", "", $_FILES["file"]["tmp_name"]);
$dir_upload = $basedir_upload.basename($tmp_name_file);
$result = move_uploaded_file($tmp_name_file, $dir_upload);
if ($result == true) {
	echo("success");
} else {
	echo("fail");
}
?>
