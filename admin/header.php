<?php
error_reporting(0);
mysql_connect("localhost", "root", "");
mysql_select_db("metro");
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Metro Mall</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
	<div class="container-fluid bg-dark text-white">
		<h1>
			<center>Metro Mall Control Panel</center>
		</h1>
	</div>
	<ul class="bg-dark container navbar text-white list-unstyled">
		<li><a class=" nav nav-pills" href="home.php">Home</a></li>
		<li><a class=" nav nav-pills" href="addoffer.php">Add Offer</a></li>
		<li><a class=" nav nav-pills" href="viewoffer.php">View Offer</a></li>
		<li><a class=" nav nav-pills" href="addcategory.php">Add category</a></li>
		<li><a class=" nav nav-pills" href="viewcategory.php">View category</a></li>
		<li><a class=" nav nav-pills" href="addsub.php">Add Sub category</a></li>
		<li><a class=" nav nav-pills" href="viewsub.php">View Sub category</a></li>
		<li><a class=" nav nav-pills" href="addproduct.php">Add Product</a></li>
		<li><a class=" nav nav-pills" href="viewproduct.php">View Product</a></li>
		<li><a class=" nav nav-pills" href="addservices.php">Add Service</a></li>
		<li><a class=" nav nav-pills" href="viewservices.php">View Services</a></li>
		<li><a class=" nav nav-pills" href="addcontact.php">Add Contact</a></li>
		<li><a class=" nav nav-pills" href="viewcontact.php">View Contact</a></li>
		<li><a class=" nav nav-pills" href="users.php">Users</a></li>
		<li><a class=" nav nav-pills" href="orders.php">Orders</a></li>
		<li><a class=" nav nav-pills" href="enquiry.php">Enquiry</a></li>
		<li><a class=" nav nav-pills" href="changepassword.php">Changepassword</a></li>
		<li><a class=" nav nav-pills" href="logout.php">Logout</a></li>
	</ul>