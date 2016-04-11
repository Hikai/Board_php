<?php
if ($_SERVER["REQUEST_METHOD"] != "POST") {
	die("Unusual request method");
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
