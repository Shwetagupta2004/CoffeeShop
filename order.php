<?php
 error_reporting(0);
 if(!empty($_POST))
 {
    $connection = mysqli_connect("localhost","root","","CoffeeOrder");
    $pn=$_POST['productname'];
    $pq=$_POST['quantity'];
    $un=$_POST['fname'];
    $tn=$_POST['tnumber'];
    $ue=$_POST['uemail'];
    $pno=$_POST['pnumber'];
    $text=$_POST['msg'];
    $secret_key = md5($un.$ue);
  //  echo $pn.$pq.$un.$g.$e.$n,$a;
    $sql=mysqli_query($connection," INSERT INTO orders(product_name,quantity,Fullname,Table_number,email,phone_number,additional_things,secret_key) VALUES('$pn','$pq','$un','$tn','$ue','$pno','$text','$secret_key')");
    if($sql)
		{
			?>
            
            <script>
            	alert("Your order is successfully saved.");
            </script>
            
            <?php	
		}
		else
		{
				?>
            
            <script>
            	alert("Email already registered.");
            </script>
            <?php	
		}
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body><br><br><br>
<div class="container py-1 w-50 border" >
<form method="post" action="">
<br>
<h4 class="bottom-border text-center">Product Details</h4>
<div class="row g-2">
<div class="col-md-8">
<label for="">Product name</label>
<select class="form-select" aria-label="Default select example" name="productname" required>
  <option selected>--select your coffee--</option>
  <option value="Cappuccino">Cappuccino</option>
  <option value="Amiricano">Amiricano</option>
  <option value="Black Coffee">Black Coffee</option>
  <option value="Chocolate Coffee">Chocolate Coffee</option>
</select>
</div>
<div class="col-md-3">
<label for="">Quantity</label>
<input type="number" value="1" class="form-control" name="quantity" id="" required>
</div>
</div><br>
<h4 class="bottom-border text-center">Your Details</h4>
    <label for="fullname" class="form-label">Name</label>
    <input type="text" class="form-control" id="fullname" name="fname" placeholder="Enter your first name" required required>
    <label for="number" class="form-label">Table number</label>
    <input type="number" class="form-control" id="number" name="tnumber" aria-describedby="emailHelp" placeholder="Enter your table number" required>
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" name="uemail" aria-describedby="emailHelp" placeholder="Enter your email" required>
  <div class="mb-3">
    <label for="number" class="form-label">Phone number</label>
    <input type="number" class="form-control" id="number" name="pnumber" aria-describedby="emailHelp" placeholder="Enter your number" required>
  </div>
  <div class="mb-3">
    <label for="address" class="form-label">Extra something you want</label>
    <input type="text" class="form-control" id="address" name="msg" aria-describedby="emailHelp" placeholder="Enter your address" required>
  </div>
<input type="submit" value="Submit" class="btn btn-info">
<input type="reset" value="Reset" class="btn btn-info">
</form>
</div>
<br><br>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>