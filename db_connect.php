<?php
$name="localhost";
$username="root";
$password="";
$db="test_db";

$conn=mysqli_connect($name,$username,$password,$db);
if (!$conn) {
	echo "connection failed";
}
?>