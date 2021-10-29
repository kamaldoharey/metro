<?php include 'header.php'; ?>
<?php include 'sess.php'; ?>
<?php
if ($_GET['did'] != "") {
	del("contact", "sno", $_GET['did']);
}
?>
<?php include 'find.php' ?>
<div class="view">
	<table class="table">
		<center>
			<h1>View Contact</h1>
		</center>
		<tr class="bg-dark">
			<td><input class="btn-primary form-control" type="submit" value="delete" name=""></td>
			<td class="text-white">
				<center>Kalpana Mart Branch </center>
			</td>
			<td class="text-white">
				<center>Branch Address </center>
			</td>
			<td class="text-white">
				<center>Image </center>
			</td>
			<td class="text-white">
				<center>Status </center>
			</td>
			<td class="text-white">
				<center>Mobile No.</center>
			</td>
			<td class="text-white">
				<center>E-mail Id </center>
			</td>
			<td class="text-white">
				<center>Branch Image </center>
			</td>
			<td class="text-white">
				<center>Status </center>
			</td>
		</tr>
		<?php
		$sel = "select * from contact $src";
		$q = mysql_query($sel);
		while ($fetch = mysql_fetch_array($q)) {
		?>
			<tr>
				<td>
					<center><input type="checkbox" name=""></center>
				</td>
				<td>
					<center> <?php echo $fetch['name']; ?> </center>
				</td>
				<td>
					<center> <?php echo $fetch['address']; ?> </center>
				</td>
				<td>
					<center> <img class="img-thumbnail" width="100" height="100" src="../images/contact/<?php echo $fetch['image']; ?>" alt=""> </center>
				</td>
				<td>
					<center> <?php echo $fetch['status']; ?> </center>
				</td>
				<td>
					<center> <?php echo $fetch['pno']; ?> </center>
				</td>
				<td>
					<center> <?php echo $fetch['eid']; ?> </center>
				</td>
				<td>
					<center><a class="form-control btn-primary" href="Addcontact.php?did=<?php echo $fetch['sno']; ?>">Edit</a></center>
				</td>
				<td>
					<center><a class="form-control btn-danger" href="addcontact.php?did=<?php echo $fetch['sno']; ?>">Delete</a></center>
				</td>
			</tr>
		<?php
		}
		?>
	</table>
</div>
<?php include 'footer.php'; ?>