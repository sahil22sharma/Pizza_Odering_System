<!DOCTYPE html>
<html lang="en">
<?php 
	session_start();
	?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>| Online Pizza Odering System |</title>
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
            <h1 class="text-white">Welcome to Online Pizza Ordering System</h1>
            <hr class="divider my-4 bg-dark" />
            <a class="btn btn-dark bg-black btn-xl js-scroll-trigger" href="#menu">Order Now</a>
        </div>
    </div>
  </div>
</div>
<!-- section -->
<div id="menu">
  <h1 class="text-center text-cursive" style="font-size:3em"><b>Menu</b></h1>
    <div class="container mt-5">
      <div class="row">
        <div class="col-lg-3">
          <form action="manage_cart.php" method="post">
            <div class="card">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRdvjgsm9UeeiY-A6QmUZDkQ3k3YXKbaLNA-A&usqp=CAU" class="card-img-top" alt="..."  style="height: 220px;">
              <div class="card-body text-center">
                <h5 class="card-title">Margherita (Medium)</h5>
                <br>
                <p class="card-text">Price:240</p>
                <button type="submit" name="Add_to_cart" class="btn btn-info">Add To Cart</button>
                <input type="hidden" name="Item_name" value="Margherita">
                <input type="hidden" name="Price" value="240">
              </div>
            </div>
          </form>
        </div>

        <div class="col-lg-3">
          <form action="manage_cart.php" method="post">
            <div class="card">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSrjeQRwUZ-0Nk1HQwNoDRVpBltKK_nGAuFxg&usqp=CAU" alt="..." style="height: 220px;">
              <div class="card-body text-center">
                <h5 class="card-title">Farmhouse (Medium)</h5>
                <br>
                <p class="card-text">Price:460</p>
                <button type="submit" name="Add_to_cart" class="btn btn-info">Add To Cart</button>
                <input type="hidden" name="Item_name" value="Farmhouse">
                <input type="hidden" name="Price" value="460">
              </div>
            </div>
          </form>
        </div>

        <div class="col-lg-3">
          <form action="manage_cart.php" method="post">
            <div class="card">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSjP7OwuFpItJO5YQ9T99HwbutMhn3xhd0S-Q&usqp=CAU" class="card-img-top" alt="..." style="height: 220px;">
              <div class="card-body text-center">
                <h5 class="card-title">Pepper Barbecue Chicken (Medium)</h5>
                <p class="card-text">Price:450</p>
                <button type="submit" name="Add_to_cart" class="btn btn-info">Add To Cart</button>
                <input type="hidden" name="Item_name" value="Pepper Barbecue Chicken">
                <input type="hidden" name="Price" value="450">
              </div>
            </div>
          </form>
        </div>

        <div class="col-lg-3">
          <form action="manage_cart.php" method="post">
            <div class="card">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTydogtCdNAEaWBIcgYahsK2Z1cfIK3REDFPRAxLLDrkP0N9BshfLHw6CWRu1watlMFtNY&usqp=CAU" class="card-img-top" alt="..."  style="height: 220px;">
              <div class="card-body text-center">
                <h5 class="card-title">Chicken Sausage (Medium)</h5>
                <br>
                <p class="card-text">Price:370</p>
                <button type="submit" name="Add_to_cart" class="btn btn-info">Add To Cart</button>
                <input type="hidden" name="Item_name" value="Chicken Sausage">
                <input type="hidden" name="Price" value="370">
              </div>
            </div>
          </form>
        </div>

      </div>
    </div>
</div>
<br>
<div id="beverage">
    <h1 class="text-center text-cursive" style="font-size:3em"><b>Beverages</b></h1>
    <div class="container mt-5">
      <div class="row">
      
      <div class="col-lg-3">
          <form action="manage_cart.php" method="post">
            <div class="card">
              <img src="https://images.unsplash.com/photo-1629203851288-7ececa5f05c4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8cGVwc2l8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="..."  style="height: 220px;">
              <div class="card-body text-center">
                <h5 class="card-title">Pepsi 475ml</h5>
                <br>
                <p class="card-text">Price:60</p>
                <button type="submit" name="Add_to_cart" class="btn btn-info">Add To Cart</button>
                <input type="hidden" name="Item_name" value="Pepsi">
                <input type="hidden" name="Price" value="60">
              </div>
            </div>
          </form>
        </div>

        <div class="col-lg-3">
          <form action="manage_cart.php" method="post">
            <div class="card">
              <img src="https://images.unsplash.com/photo-1622766815178-641bef2b4630?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8N3VwfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="..."  style="height: 220px;">
              <div class="card-body text-center">
                <h5 class="card-title">7Up 475lm</h5>
                <br>
                <p class="card-text">Price:60</p>
                <button type="submit" name="Add_to_cart" class="btn btn-info">Add To Cart</button>
                <input type="hidden" name="Item_name" value="7Up">
                <input type="hidden" name="Price" value="60">
              </div>
            </div>
          </form>
        </div>

        <div class="col-lg-3">
          <form action="manage_cart.php" method="post">
            <div class="card">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRQ8_f-1amhiPi9ylpJmYIYXNf2NS9lUlKPVutYoVE2LIZOQKiT7hHpOCUYjUPX5dwdMhE&usqp=CAU" class="card-img-top" alt="..."  style="height: 220px;">
              <div class="card-body text-center">
                <h5 class="card-title">Mirinda 475ml</h5>
                <br>
                <p class="card-text">Price:60</p>
                <button type="submit" name="Add_to_cart" class="btn btn-info">Add To Cart</button>
                <input type="hidden" name="Item_name" value="Mirinda">
                <input type="hidden" name="Price" value="60">
              </div>
            </div>
          </form>
        </div>

        <div class="col-lg-3">
          <form action="manage_cart.php" method="post">
            <div class="card">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2zbL2LcnDuAmH3i9tV9S-mL76SvIjxpU0Mw&usqp=CAU" class="card-img-top" alt="..."  style="height: 220px;">
              <div class="card-body text-center">
                <h5 class="card-title">Slice (350ml)</h5>
                <br>
                <p class="card-text">Price:50</p>
                <button type="submit" name="Add_to_cart" class="btn btn-info">Add To Cart</button>
                <input type="hidden" name="Item_name" value="Slice">
                <input type="hidden" name="Price" value="50">
              </div>
            </div>
          </form>
        </div>

      </div>
    </div>
</div>
<?php include("footer.php");?>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>