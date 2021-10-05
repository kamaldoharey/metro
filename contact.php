<?php include 'header.php' ?>
<div class="jumbotron contact-bg text-white	">
	<center>
		<h1 class="text-white">Contact Us</h1>
	</center>
	<table class="table text-white">
		<?php
		$select_contact = "select * from contact";
		$execute_contact_query = mysql_query($select_contact);
		while ($fetch_contact = mysql_fetch_array($execute_contact_query)) {
		?>
			<tbody>
				<tr>
					<th>Name:</th>
					<td><?php echo $fetch_contact['name'] ?></td>
					<td rowspan="4">
						<img class="img-thumbnail" src="images/contact/<?php echo $fetch_contact['image'] ?>" alt="Image Not FOund" width="400" height="300">
					</td>
				</tr>
				<tr>
					<th>Contact:</th>
					<td><?php echo $fetch_contact['pno'] ?></td>
				</tr>
				<tr>
					<th>E-Mail:</th>
					<td> <span> <i class="far fa-envelope"></i> </span> <?php echo $fetch_contact['eid'] ?></td>
				</tr>
				<tr>
					<th>Address:</th>
					<td><?php echo $fetch_contact['address'] ?></td>
				</tr>
			</tbody>
		<?php } ?>
	</table>
</div>
<hr style="height: 5px;">
<div class="jumbotron form-group contact-bg text-white enquiry-page-div">
	<center>
		<h1>Enquiry</h1>
	</center>
	<table class="table text-white">
		<?php
		error_reporting(0);
		if ($_POST['submit'] == "Submit") {
			$ins = "INSERT INTO enquiry(name, enquiry, phone) VALUES ('" . $_POST['name'] . "','" . $_POST['eq'] . "','" . $_POST['phone'] . "') ";
			mysql_query($ins);
		}
		?>
		<form method="post">
			<tr>
				<td>Name</td>
				<td><input class="form-control" required placeholder="Name" type="text" name="name"></td>
			</tr>
			<tr>
				<td>Enquiry </td>
				<td><input class="form-control" required placeholder="Enquiry" type="text" name="eq"></td>
			</tr>
			<tr>
				<td>Phone No.</td>
				<td><input class="form-control" required placeholder="Phone No." type="number" name="phone"></td>
			</tr>
			<tr>
				<td colspan="2"> <input type="submit" name="submit" value="Submit" class="form-control btn"> </td>
			</tr>
		</form>
	</table>
</div>
<?php include 'footer.php' ?>