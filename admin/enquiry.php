<?php include 'header.php'; ?>
<?php include 'sess.php'; ?>
<?php include 'fn.php' ?>

<?php
if ($_GET['did'] != "") {
	del("enquiry", "sno", $_GET['did']);
}
?>


<?php
$start = 0;
$limit = 5;
$next = $_REQUEST['page'] + 1;
$pre = $_REQUEST['page'] - 1;
$start = $_REQUEST['page'] * $limit;
?>

<?php
$tot = count($_POST['a']);
for ($i = 0; $i < $tot; $i++) {
	echo $do = $_POST['a'][$i];
	del("enquiry", "sno", $do);
}
?>


<div class="view">
	<?php include 'find.php' ?>
	<table class="table jumbotron">
		<form method="post">
			<center>
				<h1>Enquery</h1>
			</center>

			<tr class="bg-dark">
				<td class="text-white"><input class="btn-primary form-control" type="submit" value="Delete" name=""></td>
				<td class="text-white">
					<center>ID</center>
				</td>
				<td class="text-white">
					<center>User Name</center>
				</td>
				<td class="text-white">
					<center>Enquiry</center>
				</td>
				<td class="text-white">
					<center>Phone</center>
				</td>
				<td class="text-white">
					<center>Delete</center>
				</td>
			</tr>
			<?php
			$sel = "select * from enquiry $src limit $start,$limit ";
			$exe = mysql_query($sel);
			while ($fetch = mysql_fetch_array($exe)) {
			?>
				<tr>
					<td>
						<center><input type="checkbox" name="a[]" value="<?php echo $fetch['sno']; ?>"></center>
					</td>
					<td>
						<center> <?php echo $fetch['sno']; ?> </center>
					</td>
					<td>
						<center> <?php echo $fetch['name']; ?> </center>
					</td>
					<td>
						<center> <?php echo $fetch['enquiry']; ?> </center>
					</td>
					<td>
						<center> <?php echo $fetch['phone']; ?> </center>
					</td>
					<td>
						<center> <a class="form-control btn-danger" href="enquiry.php?did=<?php echo $fetch['sno']; ?>">Delete</a> </center>
					</td>
				</tr>
			<?php } ?>
		</form>
	</table>
	<center>
		<table align="center" border="1" cellpadding="10px" cellspacing="0">
			<tr>
				<td><a href="enquiry.php?page=0">First</a></td>
				<td><a href="enquiry.php?page=<?php echo $pre; ?>">Pre</a></td>
				<td>
					<?php $sel1 = "select count(*) as cou from enquiry ";
					$exe1 = mysql_query("$sel1");
					$fetch1 = mysql_fetch_array($exe1);
					//print_r($fetch1);
					// $tot=mysql_num_rows($exe1);
					$pages = ceil($fetch1['cou'] / $limit);
					for ($i = 1; $i <= $pages; $i++) {
					?>
						<a class="navbar-brand" href="enquiry.php?page=<?php echo $i - 1; ?>"><?php echo $i; ?></a>
					<?php } ?>
				</td>
				<td><a href="enquiry.php?page=<?php echo $next; ?>"> Next </a></td>
				<td><a href="enquiry.php?page=<?php echo $pages - 1; ?>"> Last</a></td>
			</tr>
		</table>
	</center>
</div>
<?php include 'footer.php'; ?>