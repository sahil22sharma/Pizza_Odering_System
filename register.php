<?php
	$flag = 2;
	require("config.php");
	if(!empty($_POST))
	{
		$fn = $_POST['fullname'];
		$em = $_POST['email'];
		$pass = sha1($_POST['password']);
		$hashid = md5($fn.$em);
    $add = $_POST['address'];
    $mob = $_POST['mobile'];
		
		$sql = mysqli_query($connection,"INSERT INTO users(full_name,email,password,hashid,address,mobile) VALUES('$fn','$em','$pass','$hashid','$add','$mob')"); 	
		if($sql)
		{
			$flag = 1;
		}
		else
		{
			$flag = 0;
		}
	}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<title>| Registration |</title>
</head>
<body>
<?php include("navbar.php"); ?>
<?php include("icons.php"); ?>
<div class="container py-5">
  <p class="display-6 border-bottom py-4">Registration</p>
  
  <?php
  if($flag == 1)
  {
	  ?>
          <div class="alert alert-success alert-dismissible fade show" role="alert">
     		 <strong>Regisitered Successful!</strong> Please login to proceed.
     		 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    	  </div>
          
  <?php } elseif($flag == 0) { ?>
  
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
	  <strong>Error!</strong> <?php echo $em;?> account already exist.
  	<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
<?php } ?>
  
  <form method="post" action="" class="py-3">
  
  <div class="form-floating mb-3">
      <input type="text" class="form-control" id="fullname" placeholder="Full Name" name="fullname" required>
      <label for="fullname">Full Name</label>
    </div>
  
    <div class="form-floating mb-3">
      <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email" required>
      <label for="email">Email address</label>
    </div>
    
    <div class="form-floating mb-3">
      <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
      <label for="password">Password</label>
    </div>
    
    <div class="form-floating mb-3">
      <input type="text" class="form-control" id="address" placeholder="Address" name="address" required>
      <label for="address">Address</label>
    </div>

    <div class="form-floating mb-3">
      <input type="text" class="form-control" id="mobile" placeholder="Mobile Number" name="mobile" required>
      <label for="mobile">Mobile Number</label>
    </div>

    <div class="form-floating">
    	<input type="submit" value="Register" class="btn btn-dark">
        <a href="index.php" class="btn btn-info">Back</a>
    </div>
  </form>
</div>
<!-- footer -->
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
