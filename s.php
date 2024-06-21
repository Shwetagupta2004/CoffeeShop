<?php
 error_reporting(0);
 if(!empty($_POST))
 {
    $connection = mysqli_connect("localhost","root","","CoffeeOrder");
    $ue=$_POST['email'];
    $pno=$_POST['pnumber'];
  //  echo $pn.$pq.$un.$g.$e.$n,$a;
    $sql=mysqli_query($connection," INSERT INTO contact(email,phone) VALUES('$ue','$pno')");
  
}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alkatra&family=Anton&family=Cinzel&display=swap" rel="stylesheet">

    <title>coffee morning!!</title>
  </head>
  <body>

       <!-- order section code start-->
       <section id="Order" class="Order">
       <div class="row p-5">
       <h2>Our Menu</h2>
            <div class="col-lg-3 text-center">
                <div class="card border-0 bg-light mb-3">
                    <div class="card-body">
                        <img src="image/americano.jpg" name="productimg" alt="" class="img-fluid">
                    </div>
                </div>
                <h6 name="product name">Americano</h6>
                <h5>Rs.80</h5>
                <a href="order.php" class="btn btn-warning" style="font-family: 'Alkatra';font-size:15px;color:white;background-color:rgb(253, 173, 0)">Order</a>
            </div>
            <div class="col-lg-3 text-center">
                <div class="card border-0 bg-light mb-3">
                    <div class="card-body">
                        <img src="image/blackcoffee.jpeg" alt="" class="img-fluid">
                    </div>
                </div>
                <h6 name="product name">Black Coffee</h6>
                <h5>Rs.99</h5>
                <a href="order.php" class="btn btn-warning" style="font-family: 'Alkatra';font-size:15px;color:white;background-color:rgb(253, 173, 0)">Order</a>
            </div>
            <div class="col-lg-3 text-center">
                <div class="card border-0 bg-light mb-3">
                    <div class="card-body">
                        <img src="image/hot_chocolate2.jpg" alt="" class="img-fluid">
                    </div>
                </div>
                <h6 name="product name">Chocolate Coffee</h6>
                <h5>Rs.200</h5>
                <a href="order.php" class="btn btn-warning" style="font-family: 'Alkatra';font-size:15px;color:white;background-color:rgb(253, 173, 0)">Order</a>
            </div>
            <div class="col-lg-3 text-center">
                <div class="card border-0 bg-light mb-3">
                    <div class="card-body">
                        <img src="image/cappuccino.jpg" alt="" class="img-fluid">
                    </div>
                </div>
                <h6 name="product name">Cappuccino</h6>
                <h5>Rs.150</h5>
                <a href="order.php" class="btn btn-warning" style="font-family: 'Alkatra';font-size:15px;color:white;background-color:rgb(253, 173, 0)">Order</a> 
            </div>
        </div>

        <div class="row p-5">
            <div class="col-lg-3 text-center">
                <div class="card border-0 bg-light mb-3">
                    <div class="card-body">
                        <img src="image/americano.jpg" name="productimg" alt="" class="img-fluid">
                    </div>
                </div>
                <h6 name="product name">Americano</h6>
                <h5>Rs.80</h5>
                <a href="order.php" class="btn btn-warning" style="font-family: 'Alkatra';font-size:15px;color:white;background-color:rgb(253, 173, 0)">Order</a>
            </div>
            <div class="col-lg-3 text-center">
                <div class="card border-0 bg-light mb-3">
                    <div class="card-body">
                        <img src="image/blackcoffee.jpeg" alt="" class="img-fluid">
                    </div>
                </div>
                <h6 name="product name">Black Coffee</h6>
                <h5>Rs.99</h5>
                <a href="order.php" class="btn btn-warning" style="font-family: 'Alkatra';font-size:15px;color:white;background-color:rgb(253, 173, 0)">Order</a>
            </div>
            <div class="col-lg-3 text-center">
                <div class="card border-0 bg-light mb-3">
                    <div class="card-body">
                        <img src="image/hot_chocolate2.jpg" alt="" class="img-fluid">
                    </div>
                </div>
                <h6 name="product name">Chocolate Coffee</h6>
                <h5>Rs.200</h5>
                <a href="order.php" class="btn btn-warning" style="font-family: 'Alkatra';font-size:15px;color:white;background-color:rgb(253, 173, 0)">Order</a>
            </div>
            <div class="col-lg-3 text-center">
                <div class="card border-0 bg-light mb-3">
                    <div class="card-body">
                        <img src="image/cappuccino.jpg" alt="" class="img-fluid">
                    </div>
                </div>
                <h6 name="product name">Cappuccino</h6>
                <h5>Rs.150</h5>
                <a href="order.php" class="btn btn-warning" style="font-family: 'Alkatra';font-size:15px;color:white;background-color:rgb(253, 173, 0)">Order</a> 
            </div>
        </div>
       </section>
       <!-- order section code end-->
       <center><a href="index.php" class="btn btn-warning mt3 rounded-pill">Back&nbsp&nbsp<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
        </svg>&nbsp&nbsp</a></center><br>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>