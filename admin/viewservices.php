<?php include 'header.php'; ?>
<?php include 'sess.php'; ?>
<?php include 'fn.php' ?>
<?php
if ($_GET['did'] != "") {
	del("offer", "sno", $_GET['did']);
}
?>

<div class="view">
	<table class="table">
		<center>
			<h1>View Service</h1>
		</center>
		<tr class="bg-dark">
			<td class="text-white">
				<center> <input class="btn-primary form-control" type="Submit" value="Delete" name="" id=""> </center>
			</td>
			<td class="text-white">
				<center> No. </center>
			</td>
			<td class="text-white">
				<center> Name </center>
			</td>
			<td class="text-white">
				<center> Description </center>
			</td>
			<td class="text-white">
				<center> Image </center>
			</td>
			<td class="text-white">
				<center> Status </center>
			</td>
			<td class="text-white">
				<center> Delete </center>
			</td>
		</tr>
		<?php
		$sel = "select * from service $src";
		$q = mysql_query($sel);
		while ($fetch = mysql_fetch_array($q)) {
		?>
			<tr>
				<td>
					<center> <input type="checkbox"> </center>
				</td>
				<td>
					<center> <?php echo $fetch['sno'] ?> </center>
				</td>
				<td>
					<center> <?php echo $fetch['name'] ?> </center>
				</td>
				<td>
					<center> <?php echo $fetch['decp'] ?> </center>
				</td>
				<td>
					<center> <img src="../images/service/<?php echo $fetch['image1'] ?>" alt="Error" width="150" height="150" class="img-thumbnail"> </center>
				</td>
				<td>
					<center> <?php echo $fetch['status'] ?> </center>
				</td>
				<td>
					<center><a class="form-control btn-primary" href="">Delete</a></center>
				</td>
			</tr>
		<?php } ?>
	</table>
</div>
<?php include 'footer.php'; ?>