<?php
error_reporting(0);
session_start();

mysql_connect("localhost", "root", "");
mysql_select_db("metro");

if ($_POST['login'] == "Submit") {
	$sel = "select * from admin where uname='" . $_POST['UN'] . "' and upass='" . $_POST['PW'] . "' ";
	$exe = mysql_query($sel);
	$tot = mysql_num_rows($exe);

	if ($tot == 1) {
		$fetch = mysql_fetch_array($exe);
		$_SESSION["ADMINID"] = $fetch["sno"];
		echo '<script>window.location="home.php" </script>';
	}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Kalpana Mart</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<div class="container-fluid bg-dark text-white">
		<h1>
			<center>Kalpana Mart Control Panel</center>
		</h1>
	</div>
	<center>
		<h1>HOME</h1>
	</center>
	<?php echo $sel . $exe ?>
	<div class="row container-fluid">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="jumbotron">
				<table class="table">
					<form method="post">
						<tr>
							<td>User Name</td>
							<td><input class="form-control" placeholder="User Name" type="text" name="UN"></td>
						</tr>
						<tr>
							<td>Password</td>
							<td><input class="form-control" placeholder="Password" type="password" name="PW"></td>
						</tr>
						<tr>
							<td style="text-align: right;"> <input type="checkbox" name=""> </td>
							<td> Remember Me </td>
						</tr>
						<tr>
							<td colspan="2"><input type="submit" value="Submit" name="login" style="text-align: center;" class="form-control btn-primary"></td>
						</tr>
					</form>
				</table>
			</div>
		</div>
		<div class="col-md-3"></div>
	</div>
	<?php include 'footer.php' ?>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</body>

</html>