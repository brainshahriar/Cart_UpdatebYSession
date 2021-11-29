<?php include("header.php");

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="mt-5 mb-3">Shopping Cart</h3>
                    <table class="table table-bordered">
                        <thead class="bg-primary text-white">
                            <th>Serial</th>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>Unit Price</th>
                            <th>Subtotal</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <?php
              
                            if(isset($_SESSION['cart']))
                            {
                                foreach($_SESSION['cart'] as $key => $value)
                                {
                                    $sr=$key+1;
    
                                    echo "
                                    <tr>
                                    <td>$sr</td>
                                    <td>$value[Item_name]</td>
                                    <td>
                                        <input class='text-center iquantity' min='1' max='10' type='number' onchange='subTotal()'  value='$value[Quantity]' >
                                    </td>
                                    <td>$value[Price] <input type='hidden' class='iprice' value='$value[Price]'></td>
                                    <td class='itotal'></td>
                                    <form action='manage_cart.php' method='POST'>
                                    <td><button name='Remove_item' class='btn btn-danger btn-sm'>Delete</button>
                                    <input type='hidden' name='Item_name' value='$value[Item_name]'>
                                    </td>
                                    </form>
                                    </tr>
                                    
                                    
                                    ";
                                }
                            }
                            ?>
                    </tbody>
                    <tr>
                            <td colspan="4">Total: </td>
                            <td id="gtotal"></td>
                        </tr>
                    </table>

                    <a href="" class="btn btn-success btn-sm">Update Cart</a>
                </div>
            </div>
        </div>
    </div>


<script>


    var gt=0;
    var iprice=document.getElementsByClassName('iprice');
    var iquantity=document.getElementsByClassName('iquantity');
    var itotal=document.getElementsByClassName('itotal');
    var gtotal=document.getElementById('gtotal');

    function subTotal()
    {
        gt=0;
        for(i=0;i<iprice.length;i++){
            itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
            gt=gt+(iprice[i].value)*(iquantity[i].value);
        }
        gtotal.innerText=gt;
    }

    subTotal();


</script>
</body>
</html>