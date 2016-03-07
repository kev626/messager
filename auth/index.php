<?php
$config = include("/res/config.php");
$mysql = mysqli_connect($config['host'], $config['username'], $config['password'], $config['db']);

$username = mysqli_real_escape_string($mysql, $_GET['username']);
$password = md5($_GET['password']);

$query = "SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password' LIMIT 1;";
$result = mysqli_query($mysql, $query) or die(mysqli_error($mysql));
$rows = mysqli_num_rows($result);
if ($rows == 0) {
	echo "0";
} else {
	echo "1";
}
?>