<?php 
    include("navbar.php");
    include("icons.php");
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <title>| Cart |</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>My Cart</h1>
            </div>

            <div class="col-lg-9">
                <table class="table">
                    <thead class="text-center">
                        <tr>
                        <th scope="col">Serial No</th>
                        <th scope="col">Item Name</th>
                        <th scope="col">Item Price</th>
                        <!-- <th scope="col">Quantity</th> -->
                        <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php
                        $total=0;
                        if(isset($_SESSION['cart']))
                        {
                            foreach($_SESSION['cart'] as $key => $value)
                            {
                                $sr=$key+1;
                                $total=$total+$value['Price'];
                                echo"
                                    <tr>
                                        <td>$sr</td>
                                        <td>$value[Item_name]</td>
                                        <td>$value[Price]</td>
                                        
                                        <td>
                                            <form action='manage_cart.php' method='post'>
                                                <button name='Remove_item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
                                                <input type='hidden' name='Item_name' value='$value[Item_name]'>
                                            </form>
                                        </td>
                                    </tr> 
                                "; //<td><input class='text-center' type='number value='$value[Quantity]' min='1' max='10' </td>                
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>

            <div class="col-lg-3">
                <div class="border bg-light rounded p-4">
                    <h4>Total:</h4>
                    <h5 class="text-right" style="float:right;"><?php echo $total ?></h5>
                    <br>
                    <form class="text-center">
                        <br>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Cash On Delivery
                                </label>
                            </div>
                            <br>
                        <button class="btn btn-primary btn-block" style="width: 95%;">Make purchase</button>
                    </form>
                </div>
            </div>
        </div>
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