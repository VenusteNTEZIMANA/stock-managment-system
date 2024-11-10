<?php
$conn= mysqli_connect("localhost","root","")
 or die(" noconnected");
 mysqli_select_db($conn,"test_db") or die("could no noconnected");
$count_username=0;
$count_username=0;
$sql=$username=$email=$password=$pass="";
if (isset($_POST['insert'])) {
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$pass=$_POST['cpass'];
	$sql="select *from user where username='$username'";
	$result=mysqli_query($conn,$sql);
	$count_username=mysqli_num_rows($result);
	$sql="select *from user where email='$email'";
	$result=mysqli_query($conn,$sql);
	$count_email=mysqli_num_rows($result);
	if ($count_username==0 && $count_email==0){
		if ($password==$pass){
			mysqli_query($conn,"INSERT INTO user(username,email,password)values('$username','$email','$password')");
			
			}
		
		else{
			echo'<script>
			alert("password do not match ");
			window.location.href="sunup.php";
			</script>';
				}}
		else{
	if ($count_username>0) {
		echo '<script>
		window.location.href="sunup.php";
		alert("username already exist");
		</script>';

		
	}
	if ($count_email>0) {
		echo '<script>
		window.location.href="sunup.php";
		alert("username already exist");
		</script>';
	}}
}

       ?>
       <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="d-flex justify-content-center align-iterm-center vh-100">
  <form class="shadow wd-450 p-3 "action="" method="post"><a href="index1.php">login</a>
    <h4 class="display-4 fs-1 align-iterm-center">Create Account</h4>  
     <?php
      if( isset($_GET['error'])){?>
        <div class="alert alert-danger" role="alert">
       <? php echo "$_GET['error']";?></font> 
      </div>
      <?php
      }
      ?>
  <div class="mb-3">
    <label class="form-label"><i class="fa-solid fa-user" style="color: pink; size: 5px;"></i>Username</label><i class="fa fa-user-circle-o"></i>
    <input type="text" name=" username" class="form-control" id="username" placeholder="" required value="<?php  echo $username; ?>" ></div>
    <div class="mb-3">
    <label class="form-label"><i class="fa-solid fa-envelope"style="color: pink; size: 5px;"></i>email</label>
    <input type="text" class="form-control" name="email" id="email" placeholder="" required   value="<?php  echo $email; ?>" ></div>
    <div class="mb-3">
    <label class="form-label"><i class="fa-solid fa-lock" style="color:pink;"></i>Password</label>
    <input type="text" name="password"  placeholder="" class="form-control" required  value="<?php  echo $password; ?>" ></div>
     <div class="mb-3">
    <label class="form-label"><i class="fa-solid fa-lock" style="color:pink;"></i>cofirm Password</label>
    <input type="text" name="cpass" id="cpass" placeholder="" class="form-control"  required  value="<?php echo $pass;?>" ></div>
    
  <button type="submit" class="btn btn-primary" name="insert" >sunup</button>

</form>
</div>
</body>
</html>

