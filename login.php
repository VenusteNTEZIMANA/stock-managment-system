<?php
session_start();
include"db_connect.php";
if(isset($_POST['username']) && isset($_POST['password'])) {
	function validate($data){
		$data=trim($data);
		$data=stripslashes($data);
		$data=htmlspecialchars($data);
		return $data;}

	
    $username=validate($_POST['username']);
	$password=validate($_POST['password']);

if(empty($username)){
	header("location:index1.php?");
  exit();}
elseif (empty($password)) {
	header("location:index1.php?error=password required");
   exit();	
	}
	else{
		$sql="SELECT *FROM user WHERE username='$username' AND password='$password'";
		$result=mysqli_query($conn,$sql);
		if (mysqli_num_rows($result)===1) {
			$row=mysqli_fetch_assoc($result);
			if ($row['username']===$username && $row['password']===$password) {
				$_SESSION['username']=$row['username'];
				$_SESSION['password']=$row['password'];
				$_SESSION['name']=$row['name'];
				$_SESSION['id']=$row['id'];
				header("location:import.php");
				exit();
			}
			else{
				header("location:index1.php?error=incorect username or password");
				exit();
			}}
			else{
				header("location:index1.php?error=incorect username or password");
				exit();
			}
			}}
?>