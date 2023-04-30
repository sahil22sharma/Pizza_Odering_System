<header>
	<?php 
	session_start();
	?>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
<div class="container-fluid">  
<!-- <img src="/pizza-logo.png" height="50" width="50" />  -->
<a class="navbar-brand" href="#"><strong>Online Pizza Ordering System</strong></a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav me-auto mb-2 mb-lg-0">
<li class="nav-item"> <a class="nav-link" aria-current="page" href="index.php">Home</a> </li>
<li class="nav-item"> <a class="nav-link" href="about.php">About</a> </li>
<li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Categories </a>
<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
<li><a class="dropdown-item" href="#beverage">Beverages</a></li>
<li><a class="dropdown-item" href="#menu">Pizza</a></li>
</ul>
<?php 
	$count=0;
	if(isset($_SESSION['cart']))
	{
		$count=count($_SESSION['cart']);
	}
	?>
<li><a class="nav-link" href="cart.php"><span><i class="fa fa-shopping-cart"></i></span>Cart(<?php echo $count; ?>)</a></li>
</ul><?php 
if(isset($_SESSION['email']))
		{
		?>
<a href="logout.php" class="btn btn-danger">Logout</a>
<?php } ?>
 </div>
</div>
</nav>
</header> <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>