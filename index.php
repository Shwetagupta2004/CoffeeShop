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
      <!-- navbar code start -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><span style="font-weight:bold;color:rgb(245, 188, 66);">Morning</span>Coffee</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active fs-5" aria-current="page" href="#Home" style="font-family: 'Alkatra'">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active fs-5" aria-current="page" href="#About" style="font-family: 'Alkatra'">About</a>
              </li>
              <li class="nav-item">
            <a class="nav-link active fs-5" aria-current="page" href="#Order" style="font-family: 'Alkatra'">Order</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active fs-5" aria-current="page" href="#Review" style="font-family: 'Alkatra'">Review</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active fs-5" aria-current="page" href="#Contact" style="font-family: 'Alkatra'">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- navbar code end -->

      <!-- carousel code start -->
      <section class="Home" id="Home">
        <div class="content">
          <h3>Fresh coffee</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores nesciunt,<br> corporis dolores magnam enim labore consequatur voluptas ex sequi voluptatem.<br>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, quis.
          </p>
          <center>
          <a href="order.php" class="btn btn-warning" style="font-family:'Alkatra';font-size:15px;color:white;background-color:rgb(253, 173, 0)">Order Now</a></center>
        </div>
      </section><br>
 <!-- carousel code end -->

<!-- about section code start-->
    <section id="About" class="About">
      <div class="container">
          <div><h2>About Us</h2></div>
          <div class="aboutcontainer">
          <div class="col d-flex justify-content-center">
          <div class="card mb-3" style="max-width: 840px;">
          <div class="row g-0">
          <div class="col-md-5">
          <img src="image/carouselimg.jpg" class="img-fluid rounded-start" alt="...">
          </div>
           <div class="col-md-7">
          <div class="card-body">
            <br>
        <h3 class="card-title">Cappuccino</h3>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.Lorem ipsum dolor sit amet consectetur adipisicing elit. Non dolore, aliquid eos a inventore eius facilis! Velit possimus, voluptas alias nobis omnis saepe quidem recusandae ullam, sapiente, facilis eligendi explicabo!</p>
      </div>
      </div>
       </div>
      </div>
      </div></div></div>
      </section>
      <!-- about section code end-->
   
       <!-- order section code start-->
       <section id="Order" class="Order">
       <div class="row p-5">
       <h2>Order</h2>
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
       <center><a href="s.php" class="btn btn-warning mt3 rounded-pill">More&nbsp&nbsp<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
        </svg>&nbsp&nbsp</a></center><br>
        <br>
       <!-- order section code end-->
        <!-- review section code start-->
  <section id="Review" class="Review">
        <h2 style="text-align: center;color:rgb(247, 175, 19);font-family: 'Alkatra';font-weight: bold;">Review</h2>
       <div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="card-wrapper container-sm d-flex  justify-content-around">
      <div class="card  " style="width: 18rem;">
  <img src="image/rs4.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa obcaecati voluptatibus maiores laudantium, aut nam earum, explicabo velit labore placea Doloremque."<br><br>- jinny morto</h5>
    
  </div>
</div><div class="card" style="width: 18rem;">
  <img src="image/rs5.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa obcaecati voluptatibus maiores laudantium, aut nam earum, explicabo velit labore placea Doloremque."<br><br>- mony</h5>
    
  </div>
        </div>
        <div class="card" style="width: 18rem;">
  <img src="image/rs6.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa obcaecati voluptatibus maiores laudantium, aut nam earum, explicabo velit labore placea Doloremque."<br><br>- vichea</h5>
    
  </div>
</div>
</div>
    </div>
    <div class="carousel-item">
      <div class="card-wrapper container-sm d-flex   justify-content-around">
      <div class="card  " style="width: 18rem;">
  <img src="image/rs1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa obcaecati voluptatibus maiores laudantium, aut nam earum, explicabo velit labore placea Doloremque."<br><br>- ninate pi</h5>
    
  </div>
</div><div class="card" style="width: 18rem;">
  <img src="image/rs2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa obcaecati voluptatibus maiores laudantium, aut nam earum, explicabo velit labore placea Doloremque."<br><br>- morlo royal</h5>
    
  </div>
        </div>
        <div class="card" style="width: 18rem;">
  <img src="image/rs3.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa obcaecati voluptatibus maiores laudantium, aut nam earum, explicabo velit labore placea Doloremque."<br><br>- sujhii<h5>
  </div>
</div>
    </div>
    </div>
  </div>
</div>
    </div>
  </div>
  <button class="carousel-control-prev warning" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div></section>
       <!-- Review section code end-->
<section id="Contact" class="Contact">
<div class="container py-5">
  <h2>Contact</h2>
  <div class="row g-0">
    <div class="col-md-4">
      <img src="image/map.jpg" class="img-fluid rounded-start" alt="...">
    </div>
        <div class="col-md-8">
      <div class="card-body">
        <form method="post" action="">
        <div class="mb-1">
        <label for="exampleInputEmail1" class="form-label" style="color:white;">Email address</label>
        <input type="email" class="form-control" name="email" id="exampleInputEmail1"aria-describedby="emailHelp" placeholder="Enter your email" required>
        </div>
        <div class="mb-1">
         <label for="exampleInputPassword1" class="form-label" style="color:white;" >Contact no.</label>
        <input type="number" name="pnumber" class="form-control" id="exampleInputPassword1" placeholder="Enter your phone number" required>
        </div><br>
        <input type="submit" value="Submit" class="btn btn-primary">
        </form>
      </div>
    </div>
</section>

<!-- footer -->
<div class="container">
  <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About</a></li>
    </ul>
    <p class="text-center text-body-secondary">© 2023 Company, Inc</p>
  </footer>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>