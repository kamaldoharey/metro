<?php include 'header.php'; ?>
<?php
error_reporting(0);
	// file upload code start here
$name = $_FILES['photo']['name'];
$tmp_name = $_FILES['photo']['tmp_name'];
$path = "imageupload/user/".$name;
move_uploaded_file($tmp_name, $path);
	// file upload code end here
if($_POST['submit']=="Submit")
{
	if ($_GET['did']=="")
	{
		$ins = " INSERT INTO regis(name, gender, dob, address, state, check1, phone, email, photo, password) VALUES (
		'".$_POST['name']."',
		'".$_POST['gender']."',
		'".$_POST['bod']."',
		'".$_POST['address']."',
		'".$_POST['state']."',
		'".$_POST['check']."',
		'".$_POST['phone']."',
		'".$_POST['email']."',
		'".$name."',
		'".$_POST['password']."') ";
		mysql_query($ins);
	}
	else
	{
		$upd = "UPDATE regis SET
		name='".$_POST['name']."',
		gender='".$_POST['gender']."',
		dob='".$_POST['bod']."',
		address='".$_POST['address']."',
		state='".$_POST['state']."',
		check1='".$_POST['check']."',
		phone='".$_POST['phone']."',
		email='".$_POST['email']."',
		photo='".$name."',
		password='".$_POST['password']."' WHERE sno='".$_GET['did']."' ";
		mysql_query($upd);
	}
}
?>
<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8 jumbotron regoo">
		<center><h1>Registration</h1></center>
		<table class="table">
			<form method="post" enctype="multipart/form-data">
				<tr>
					<td>Name</td>
					<td><input type="text" required placeholder="Name" name="name" required class="form-control"></td>
				</tr>
				<tr>
					<td>Gender</td>
					<td>
						Male <input  type="radio" name="gender" value="1" >
						Female <input  type="radio" name="gender" value="2" >
					</td>
				</tr>
				<tr>
					<td>Birthdate</td>
					<td><input required class="input-group date" required  type="date" class="form-control" name="bod"  ></td>
				</tr>
				<tr>
					<td>Addres</td>
					<td><textarea required placeholder="Address" class="form-control" name="address"  cols="30" rows="10" required></textarea></td>
				</tr>
				<tr>
					<td>State</td>
					<td><input required type="text" name="state" ></td>
				</tr>
				<tr>
					<td>Qualification</td>
					<td>
						10th<input type="checkbox" name="check" value="10" >
						12th<input type="checkbox" name="check" value="12" >
						Graduated<input type="checkbox" name="check" value="15" >
					</td>
				</tr>
				<tr>
					<td>Phone No.</td>
					<td><input required placeholder="Phone no" type="number" required class="form-control" name="phone" ></td>
				</tr>
				<tr>
					<td>Email ID</td>
					<td><input required placeholder="Email Address" type="Email" required class="form-control" name="email" ></td>
				</tr>
				<tr>
					<td>Upload Photo</td>
					<td><input required  type="file" class="form-control" name="photo" ></td>
				</tr>
				<tr>
					<td>Enter Password</td>
					<td><input required placeholder="Paasword" type="password" required class="form-control" name="password" ></td>
				</tr>
				<tr>
					<td colspan="2">
						<input class="form-control btn" type="submit" name="submit" value="Submit" >
					</td>
				</tr>
			</form>
		</table>
	</div>
	<div class="col-md-2"></div>
</div>
<?php include 'footer.php'; ?>