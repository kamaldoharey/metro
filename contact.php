<?php include 'header.php' ?>
<div class="jumbotron conttt bg-dark text-white	">
	<center>
		<h1 class="text-white">Contact Us</h1>
	</center>
	<table class="table">
		<?php
		$selcon = "select * from contact";
		$execon = mysql_query($selcon);
		while ($fetchcon = mysql_fetch_array($execon)) {
		?>
			<tbody>
				<tr>
					<th>Name:</th>
					<td><?php echo $fetchcon['name'] ?></td>
					<td rowspan="4">
						<img class="img-thumbnail" src="images/contact/<?php echo $fetchcon['image'] ?>" alt="Image Not FOund" width="400" height="300">
					</td>
				</tr>
				<tr>
					<th>Contact:</th>
					<td><?php echo $fetchcon['pno'] ?></td>
				</tr>
				<tr>
					<th>E-Mail:</th>
					<td><?php echo $fetchcon['eid'] ?></td>
				</tr>
				<tr>
					<th>Addres:</th>
					<td><?php echo $fetchcon['address'] ?></td>
				</tr>
			</tbody>
		<?php } ?>
	</table>
</div>
<hr style="height: 3px;">
<div class="jumbotron bg-dark text-white enqqq">
	<center>
		<h1>Enquiry</h1>
	</center>
	<table class="table">
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