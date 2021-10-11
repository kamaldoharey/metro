<?php include 'header.php'; ?>
<?php
error_reporting(0);
// file upload code start here
$name = $_FILES['photo']['name'];
$tmp_name = $_FILES['photo']['tmp_name'];
$path = "imageupload/user/" . $name;
move_uploaded_file($tmp_name, $path);
// file upload code end here
if ($_POST['submit'] == "Submit") {
	if ($_GET['did'] == "") {
		$ins = " INSERT INTO regis(name, gender, dob, address, state, check1, phone, email, photo, password) VALUES (
				'" . $_POST['name'] . "',
				'" . $_POST['gender'] . "',
				'" . $_POST['bod'] . "',
				'" . $_POST['address'] . "',
				'" . $_POST['state'] . "',
				'" . $_POST['check'] . "',
				'" . $_POST['phone'] . "',
				'" . $_POST['email'] . "',
				'" . $name . "',
				'" . $_POST['password'] . "') ";
		mysql_query($ins);
	} else {
		$upd = "UPDATE regis SET
				name='" . $_POST['name'] . "',
				gender='" . $_POST['gender'] . "',
				dob='" . $_POST['bod'] . "',
				address='" . $_POST['address'] . "',
				state='" . $_POST['state'] . "',
				check1='" . $_POST['check'] . "',
				phone='" . $_POST['phone'] . "',
				email='" . $_POST['email'] . "',
				photo='" . $name . "',
				password='" . $_POST['password'] . "' WHERE sno='" . $_GET['did'] . "' ";
		mysql_query($upd);
	}
}
?>
<div class="row">
	<div class="col-md-12 jumbotron registration-page-div">
		<center>
			<h1>Registration</h1>
		</center>
		<table class="table">
			<form method="post" enctype="multipart/form-data">
				<tr>
					<td>Name</td>
					<td><input type="text" required placeholder="Name" name="name" required class="form-control"></td>
				</tr>
				<tr>
					<td>Gender</td>
					<td>
						Male <input type="radio" name="gender" value="1">
						Female <input type="radio" name="gender" value="2">
					</td>
				</tr>
				<tr>
					<td>Birthday</td>
					<td><input required class="input-group date" required type="date" class="form-control" name="bod"></td>
				</tr>
				<tr>
					<td>Address</td>
					<td><textarea required placeholder="Address" class="form-control" name="address" cols="30" rows="10" required></textarea></td>
				</tr>
				<tr>
					<td>State</td>
					<!-- 
						TODO  state list are not in drop down 
					 -->
					<!-- <td><input required type="text" name="state"></td> -->
					<td>
						<select class="form-control" name="state">
							<option value="Andhra Pradesh"> Andhra Pradesh </option>
							<option value="Arunachal Pradesh"> Arunachal Pradesh </option>
							<option value="Assam"> Assam </option>
							<option value="Bihar"> Bihar </option>
							<option value="Chhattisgarh"> Chhattisgarh </option>
							<option value="Goa"> Goa </option>
							<option value="Gujarat"> Gujarat </option>
							<option value="Haryana"> Haryana </option>
							<option value="Himachal Pradesh"> Himachal Pradesh </option>
							<option value="Jharkhand"> Jharkhand </option>
							<option value="Karnataka"> Karnataka </option>
							<option value="Kerala"> Kerala </option>
							<option value="Madhya Pradesh"> Madhya Pradesh </option>
							<option value="Maharashtra"> Maharashtra </option>
							<option value="Manipur"> Manipur </option>
							<option value="Meghalaya"> Meghalaya </option>
							<option value="Mizoram"> Mizoram </option>
							<option value="Nagaland"> Nagaland </option>
							<option value="Odisha"> Odisha </option>
							<option value="Punjab"> Punjab </option>
							<option value="Rajasthan"> Rajasthan </option>
							<option value="Sikkim"> Sikkim </option>
							<option value="Tamil Nadu"> Tamil Nadu </option>
							<option value="Telangana"> Telangana </option>
							<option value="Tripura"> Tripura </option>
							<option value="Uttar Pradesh"> Uttar Pradesh </option>
							<option value="Uttarakhand"> Uttarakhand </option>
							<option value="West Bengal"> West Bengal </option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Qualification</td>
					<td>
						10th<input type="checkbox" name="check" value="10">
						12th<input type="checkbox" name="check" value="12">
						Graduated<input type="checkbox" name="check" value="15">
					</td>
				</tr>
				<tr>
					<td>Phone No.</td>
					<td><input required placeholder="Phone no" type="number" maxlength="10" required class="form-control" name="phone" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"></td>
				</tr>
				<tr>
					<td>Email ID</td>
					<td><input required placeholder="Email Address" type="Email" required class="form-control" name="email"></td>
				</tr>
				<tr>
					<td>Upload Photo</td>
					<td><input required type="file" class="form-control" name="photo"></td>
				</tr>
				<tr>
					<td>Enter Password</td>
					<td><input required placeholder="Password" type="password" required class="form-control" name="password"></td>
				</tr>
				<tr>
					<td colspan="2">
						<input class="form-control btn" type="submit" name="submit" value="Submit">
					</td>
				</tr>
			</form>
		</table>
	</div>
</div>
<?php include 'footer.php'; ?>