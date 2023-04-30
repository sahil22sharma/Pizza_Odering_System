<!DOCTYPE html>
<html lang="en">
<?php 
	session_start();
	?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>| About |</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <style>
      .masthead{
        background-image:url("https://wallpapercave.com/wp/wc1813154.jpg");
        height:860px;
      }
    </style>
</head>
<body>
<?php include("navbar.php"); ?>
<?php include("icons.php"); ?>
<!-- header -->
<div class="masthead">
  <div class="container h-100">
    <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-center mb-4 page-title">
            <h1 class="text-white">About Us</h1>
            <hr class="divider my-4 bg-dark" />
        </div>
    </div>
  </div>
</div>
<div class="about">
<h1 class="text-center text-cursive" style="font-size:5em"><b>About Us</b></h1>
    <div class="container mt-5">
        <div class="row"style="font-size:20px;">
            <p>It is just not about food but we strive to give you a memorable experience with loads of smiles over gorgeous food. With comfortable and youthful ambience, friendly and efficient service, elaborate menu and delectable food.It’s a simple equation that keeps our customers coming back for more. Always fresh toppings and great service plus low, low prices equals great pizza. <br> <br>Our customers can count on prompt and quality service, high-quality food made from high-quality products with the freshest ingredients available and great prices. Whether you’re looking to feed your family or cater a gathering or lunch meeting, feeding a large group is both easy and affordable </p>
        </div>
    </div>
</div>
<?php include("footer.php");?>
</body>