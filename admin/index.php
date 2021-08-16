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
	<title>Metro Mall</title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
	<div class="container-fluid bg-dark text-white">
		<h1>
			<center>Metro Mall Control Panel</center>
		</h1>
	</div>
	<center>
		<h1>HOME</h1>
	</center>
	<?php echo $sel . $exe ?>
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="jumbotron">
				<table class="table">
					<form method="post">
						<tr>
							<td>User Name</td>
							<td><input class="form-control" placeholder="User Name" type="text" name="UN" id=""></td>
						</tr>
						<tr>
							<td>Password</td>
							<td><input class="form-control" placeholder="Password" type="password" name="PW" id=""></td>
						</tr>
						<tr>
							<td style="text-align: right;"> <input type="checkbox" name="" id=""> </td>
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
	<div class="fixed-bottom bg-dark text-white">
		<h1>
			<center>www.metromall.com</center>
		</h1>
	</div>
</body>

</html>