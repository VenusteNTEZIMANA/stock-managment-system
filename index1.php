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
    <form action="login.php" method="POST" class="shadow w-45" style="max-width: 400px; margin: auto; ">
      <?php
      if( isset($_GET['error'])){?>
        <div class="alert alert-danger" role="alert">
          
        
    <? php echo "$_GET['error']";?><font>incorect username or password</font> 
      </p>
      <?php
    }
      ?>
      <button class="btn btn-lg btn-dark btn-block btn-lg">
      <i class="fa-solid fa-house" style="color:pink;"></i>LOGIN</button>
     <hr>
    
     <label for="username" class="form-label" ><i class="fa-solid fa-user " style="color:pink;"></i> Username:</label><br>
    <input type="text" name="username" class="form-contol" placeholder="username" required><br>

    <label for="password"  class="form-contol"><i class="fa-solid fa-lock"style="color:pink;"></i>Password:</label><br>

    <input type="password"  name="password"  class="form-contol" placeholder="password" required> <br>
    <div class="checkbox">
      <label class="mt-3" >
        <input type="checkbox"  value="remember-me">Remember me:
      </label>
    </div>
    <div class="mt-3">
     <button class="btn btn-lg btn-dark btn-block" type="submit"><font  color="white">Sign in</font></button></div>
     <div class="mt-3">
      <a href="register.php" class="btn btn-outline-light text-dark"><font color="green">Create Account</font></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="rest.php" class="btn btn-outline-light text-dark" ><font color="black">Forget password</font></a>
     </div>
 
 </form></div>
 <div class="text-center">
   <i class="fa-brands fa-square-twitter" style="color:skyblue; size:200px;"></i>
   <i class="fa-brands fa-facebook" style="color:"></i>
   <i class="fa-brands fa-youtube" style="color: red;"></i>
   <i class="fa-brands fa-instagram" style="color: red;"></i>
 </div>

</body>

 </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>