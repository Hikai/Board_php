<?php
$db_passwd = "password";
$conn = @mysqli_connect("localhost", "root", $_dbpasswd) or die("Connect error");
$db_select = @mysqli_select_db($conn, "db_admin") or die("DB select error");
?>
