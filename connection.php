<?php
session_start();
error_reporting(E_ERROR | E_PARSE);
$connection = mysqli_connect('localhost', 'root', '');
$select_db = mysqli_select_db($connection, 'hospital');

if (!isset($_SESSION)) {
	session_start();
}
?>
<h3 style="background:#990000;padding:20px;color:#FFFFFF;margin:0px">
	<span><a style="color:#FFFFFF" href="index.php">Back to Home Page</a></span>

	<span style="float:right"><a style="color:#FFFFFF" href="logout.php">Logout</a></span>
	<!-- <span style="float:right;"><a style="color:#FFFFFF" href="index.php">Home</a></span> -->
</h3>