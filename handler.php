<?php 

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$description = $_POST['description'];

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Data</title>
 </head>
 <body>
 	<h4>Name : <?php echo $name ?></h4>
 	<h4>Phone : <?php echo $phone ?></h4>
 	<h4>Email : <?php echo $email ?></h4>
 	<p>Description : <?php echo $description ?></p>
 </body>
 </html>
