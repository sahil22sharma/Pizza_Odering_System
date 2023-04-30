<?php
	require("config.php");
	if(isset($_SESSION['email']))
	{
		header("location:home.php");
	}
	
	if(!empty($_POST))
	{
		$email = $_POST['email'];
		$pass = sha1($_POST['password']);
		$sql = mysqli_query($connection,"SELECT * FROM users WHERE email = '$email' AND password = '$pass'");
		if(mysqli_num_rows($sql) == 1)
		{
			$_SESSION['email'] = $_POST['email'];
			header("location:home.php");	
		}
		else
		{
			$error = "Incorrect Credentials";
			
		}
	}
	
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<title>| Login |</title>
</head>
<body>
<?php include("navbar.php"); ?>
<?php include("icons.php"); ?>
<div class="container py-5">
  <p class="display-6 border-bottom py-4">User Login</p>
  <?php 
  	if(isset($error))
	{
  ?>
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
	  <strong>Error!</strong> Incorrect credentials.
  	<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
    <?php 
	}
	?>    
  
  <form method="post" action="">
    <div class="form-floating mb-3">
      <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email" required>
      <label for="email">Email address</label>
    </div>
    
    <div class="form-floating mb-3">
      <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
      <label for="password">Password</label>
    </div>
    
    <div class="form-floating">
    	<input type="submit" value="Login" class="btn btn-dark">
        <a href="register.php" class="btn btn-info">Register</a>
    </div>
  </form>
</div>
<!--footer--> 
<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top fixed-bottom">
    <div class="col-md-4 d-flex align-items-center">
      <div class="small text-center text-muted">Copyright © <?= date("Y") ?> - Online Pizza Ordering System | <a href="mailto:sahilsharma@mail.com" target="_blank">sahilsharma@gmail.com</a></div>
    </div>

    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
      <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
      <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
      <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </ul>
  </footer>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>