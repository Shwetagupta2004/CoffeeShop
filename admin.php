<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alkatra&family=Anton&family=Cinzel&display=swap" rel="stylesheet">

    <title>coffee morning!!</title>
  </head>
  <body>

<div class="container">
<a name="records"></a>
	<table class="table">
  <thead>
    <center><h2>Orders</h2></center>
    <tr>
      <th scope="col">sr no.</th>
      <th scope="col">product_name</th>
      <th scope="col">quantity</th>
      <th scope="col">Full Name</th>
      <th scope="col">Table_number</th>
      <th scope="col">email</th>
      <th scope="col">phone_number</th>
      <th scope="col">additional_things</th>
    </tr>
  </thead>
  
  <tbody>
    <?php
		$connection = mysqli_connect("localhost","root","","coffeeorder");
		$sql = mysqli_query($connection,"SELECT * FROM  orders");
		$sr = 1;
		while($p = mysqli_fetch_array($sql))
		{	
	?>
    <tr>
      <th scope="row"><?php echo $sr++;?></th>
      <td><?php echo $p['product_name'];?></td>
      <td><?php echo $p['quantity'];?></td>
      <td><?php echo $p['Fullname'];?></td>
      <td><?php echo $p['Table_number'];?></td>
      <td><?php echo $p['email'];?></td>
      <td><?php echo $p['phone_number'];?></td>
      <td><?php echo $p['additional_things'];?></td>
    </tr>
    <?php 
		
		}
		
	?>
  
  </tbody>
</table>
</div>
  </body>
