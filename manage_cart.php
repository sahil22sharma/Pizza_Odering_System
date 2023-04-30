<?php
    session_start();
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        if(isset($_POST['Add_to_cart']))
        {
            if(isset($_SESSION['cart']))
            {
                $myitems=array_column($_SESSION['cart'],'Item_name');
                if(in_array($_POST['Item_name'],$myitems))
                {
                    echo"<script>
                         alert('Item Added');
                        window.location.href='home.php';
                    </script>";
                }
                else
                {
                $count=count($_SESSION['cart']);
                $_SESSION['cart'][$count]=array('Item_name'=>$_POST['Item_name'],'Price'=>$_POST['Price'],'Quantity'=>1);
                echo"<script>
                    alert('Item Added');
                    window.location.href='home.php';
                </script>";
                }
            }
            else
            {
                $_SESSION['cart'][0]=array('Item_name'=>$_POST['Item_name'],'Price'=>$_POST['Price'],'Quantity'=>1); //associative array
                echo"<script>
                    alert('Item Added');
                    window.location.href='home.php';
                </script>";
            }
        }
        if(isset($_POST['Remove_item']))
        {
            foreach($_SESSION['cart'] as $key =>$value)
            {
                if($value['Item_name']==$_POST['Item_name'])
                {
                    unset($_SESSION['cart'][$key]);
                    $_SESSION['cart']=array_values($_SESSION['cart']);
                    echo"<script>
                        alert('Item Removed');
                        window.location.href='cart.php';
                    </script>";
                }
                
            }
        }
    }
?>