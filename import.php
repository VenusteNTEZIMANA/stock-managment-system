
<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
?>
<?PHp

$conn= mysqli_connect("localhost","root","")
 or die(" noconnected");
 mysqli_select_db($conn,"test_db") or die("could no noconnected");
$sql=$product_name=$quantity=$unit_price=$total_amaunt="";
if (isset($_POST['import'])) {
	$product_name=$_POST['product_name'];
	$quantity=$_POST['quantity'];
	$unit_price=$_POST['unit_price'];
	$total_amaunt=$quantity *$unit_price;
$sql="SELECT * FROM  product WHERE product_name='$product_name'";
$result=mysqli_query($conn,$sql);
 if(mysqli_num_rows($result)>0){
 	$sql="UPDATE  product set quantity=quantity+$quantity,total_amaunt=total_amaunt+$total_amaunt WHERE product_name='$product_name'";

 	mysqli_query($conn,$sql);
 	$sql="SELECT quantity,unit_price,total_amaunt from product WHERE product_name='$product_name'";
 	mysqli_query($conn,$sql);
 	$result=mysqli_fetch_assoc($result);
    $new_total_amaunt=$quantity*$unit_price;
  
 	
 	echo "product quantity updated success fully.  total amaunt $".$total_amaunt; 
 }
 else
 {
 	$sql="INSERT INTO  product (product_name,quantity,unit_price,total_amaunt) values('$product_name','$quantity','$unit_price','$total_amaunt')";
 	mysqli_query($conn,$sql);
 	echo "product added success fully";
 }}?>
<?php  
	if (isset($_POST['export'])) {
	$product_name=$_POST['product_name'];
	$quantity=$_POST['quantity'];
	$unit_price=$_POST['unit_price'];
	$total_amaunt=$quantity *$unit_price;
$sql="SELECT * FROM  product WHERE product_name='$product_name'";
$result=mysqli_query($conn,$sql);
 if(mysqli_num_rows($result)>0){
 	$sql="UPDATE  product set quantity=quantity-$quantity,total_amaunt=total_amaunt-$total_amaunt WHERE product_name='$product_name'";
 	mysqli_query($conn,$sql);
 	$sql="SELECT quantity,unit_price from product WHERE product_name='$product_name'";
 	mysqli_query($conn,$sql);
 	$result=mysqli_fetch_assoc($result);
    $new_total_amaunt=$quantity  * $unit_price;
    $sql="UPDATE  product set total_amaunt=$quantity*$unit_price WHERE product_name='$product_name'";
 	
 	echo "product quantity exported success fully. new total amaunt $".$total_amaunt; 
 }
 else
 {
 	$sql="INSERT INTO  sale (product_name,quantity,unit_price,total_amaunt) values('$product_name','$quantity','$unit_price','$total_amaunt')";
 	mysqli_query($conn,$sql);
 	echo "product requested  added  success fully but  are not avialable in stock";
 }}

	?>
<!doctype html>
<html lang="en">
  <head>
    <style type="text/css">
    </style>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
  </head>
  <body><div class="text-center mt-5 btn-lg">
  	<h3> Stock Managment System</h3>

	 <form action="" method="POST" class="shadow w-46"  style="max-width: 400px; margin: auto; " >
	 	<font color="pink"><h4> import/export</h4></font>name
	 	<input type="text" name="product_name" placeholder="enter product_name"  value="<?php echo $product_name?>"><br>
	 	kg
	 	<input type="number" name="quantity" placeholder="enter quantity" value="<?php echo $quantity?>"><br>
	 	frw
	 	<input type="number" name="unit_price" placeholder="enter unit_price" value="<?php echo $unit_price?>"><br>
	 	<div ><div class="w-20"><button type="submit" name="import" class="btn btn-info" style="width: 200px;">import</button><button type="submit" name="export"class="btn btn-danger" style="width: 200px;">export</button><div></div>
	 	</form>
	 	<h1><?php echo $_SESSION['name'];?></h1>
	<a href="logout.php">logout</a></div>
  <?php
 
}
else{
	header("location:index1.php");
	exit();}?>