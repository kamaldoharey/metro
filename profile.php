<?php include 'header.php' ?>
<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-10 jumbotron promnm" style="margin: 1em; border-radius: 1em;">
		<center>
			<h1>Profile</h1>
		</center>
		<table class="table ">
			<?php
			$sel = "select * from regis where sno='" . $_SESSION["USER_ID"] . "' ";
			$exe = mysql_query($sel);
			$fetch_p = mysql_fetch_array($exe);
			?>
			<tr>
				<center><img class="img-thumbnail" src="images/user/<?php echo $fetch_p['photo'] ?>" alt="Error" width="200" height="200"></center>
			</tr>
			<tr>
				<td>Name</td>
				<td><?php echo $fetch_p['name']; ?></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td><?php echo $fetch_p['gender']; ?></td>
			</tr>
			<tr>
				<td>Date of Birth</td>
				<td><?php echo $fetch_p['dob']; ?></td>
			</tr>
			<tr>
				<td>Address</td>
				<td><?php echo $fetch_p['address']; ?></td>
			</tr>
			<tr>
				<td>State</td>
				<td><?php echo $fetch_p['state']; ?></td>
			</tr>
			<tr>
				<td>Qualtication</td>
				<td><?php echo $fetch_p['check1']; ?></td>
			</tr>
			<tr>
				<td>Mobile no</td>
				<td><?php echo $fetch_p['phone']; ?></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><?php echo $fetch_p['email']; ?></td>
			</tr>
		</table>
	</div>
	<div class="col-md-1"></div>
</div>
<?php include 'footer.php' ?>