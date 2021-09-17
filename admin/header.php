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
	<link rel="stylesheet" href="css/bootstrap-grid.css">
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/bootstrap-reboot.css">
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
	<div class="container-fluid bg-dark text-white">
		<h1>
			<center>Metro Mall Control Panel</center>
		</h1>
	</div>
	<div class="bg-dark container navbar text-white ">
		<b><a class="nav-pills" href="home.php">Home</a></b> &nbsp &nbsp &nbsp &nbsp
		<b><a class="nav-pills" href="addoffer.php">Add Offer</a></b> &nbsp &nbsp &nbsp &nbsp
		<b><a class="nav-pills" href="viewoffer.php">View Offer</a></b> &nbsp &nbsp &nbsp &nbsp
		<b><a class="nav-pills" href="addcategory.php">Add category</a></b> &nbsp &nbsp &nbsp &nbsp
		<b><a class="nav-pills" href="viewcategory.php">View category</a></b> &nbsp &nbsp &nbsp &nbsp
		<b><a class="nav-pills" href="addsub.php">Add Sub category</a></b> &nbsp &nbsp &nbsp &nbsp
		<b><a class="nav-pills" href="viewsub.php">View Sub category</a></b> &nbsp &nbsp &nbsp &nbsp
		<b><a class="nav-pills" href="addproduct.php">Add Product</a></b> &nbsp &nbsp &nbsp &nbsp
		<b><a class="nav-pills" href="viewproduct.php">View Product</a></b> &nbsp &nbsp &nbsp &nbsp
		<b><a class="nav-pills" href="addservices.php">Add Service</a></b> &nbsp &nbsp &nbsp &nbsp
		<b><a class="nav-pills" href="viewservices.php">View Services</a></b> &nbsp &nbsp &nbsp &nbsp
		<b><a class="nav-pills" href="addcontact.php">Add Contact</a></b> &nbsp &nbsp &nbsp &nbsp
		<b><a class="nav-pills" href="viewcontact.php">View Contact</a></b> &nbsp &nbsp &nbsp &nbsp
		<b><a class="nav-pills" href="users.php">Users</a></b> &nbsp &nbsp &nbsp &nbsp
		<b><a class="nav-pills" href="orders.php">Orders</a></b> &nbsp &nbsp &nbsp &nbsp
		<b><a class="nav-pills" href="enquiry.php">Enquiry</a></b> &nbsp &nbsp &nbsp &nbsp
		<b><a class="nav-pills" href="changepassword.php">Changepassword</a></b> &nbsp &nbsp &nbsp &nbsp
		<b><a class="nav-pills" href="logout.php">Logout</a></b> &nbsp &nbsp &nbsp &nbsp
	</div>