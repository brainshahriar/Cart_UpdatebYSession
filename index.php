<?php include("header.php"); ?>
 <?php session_start();
    
 ?>
<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    

    <title>Test</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    
  </head>
  <body>




<div class="container mt-5">
    <div class="row">
        <div class="col-lg-3">
            <form action="manage_cart.php" method="post">
                <div class="card">
                    <img src="https://www.pixsy.com/wp-content/uploads/2021/04/ben-sweet-2LowviVHZ-E-unsplash-1.jpeg" alt="" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Bag 1</h5>
                        <p class="card-text">Price: Tk.300</p>
                        <button type="submit"  name="add_to_cart" class="btn btn-info">Add</button>
                        <input type="hidden" name="Item_name" value="Bag 1">
                        <input type="hidden" name="Price" value="300">

                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-3">
            <form action="manage_cart.php" method="post">
                <div class="card">
                    <img src="https://www.pixsy.com/wp-content/uploads/2021/04/ben-sweet-2LowviVHZ-E-unsplash-1.jpeg" alt="" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Bag 2</h5>
                        <p class="card-text">Price: Tk.300</p>
                        <button type="submit"  name="add_to_cart" class="btn btn-info">Add</button>
                        <input type="hidden" name="Item_name" value="Bag 2">
                        <input type="hidden" name="Price" value="250">

                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-3">
            <form action="manage_cart.php" method="post">
                <div class="card">
                    <img src="https://www.pixsy.com/wp-content/uploads/2021/04/ben-sweet-2LowviVHZ-E-unsplash-1.jpeg" alt="" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Bag 3</h5>
                        <p class="card-text">Price: Tk.300</p>
                        <button type="submit"  name="add_to_cart" name="add_to_cart" class="btn btn-info">Add</button>
                        <input type="hidden" name="Item_name" value="Bag 3">
                        <input type="hidden" name="Price" value="400">

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
    

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>


  </body>
</html>