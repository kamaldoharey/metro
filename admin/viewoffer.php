<?php include 'header.php'; ?>
<?php include 'sess.php'; ?>
<?php include 'fn.php' ?>
<?php
$start = 0;
$limit = 5;
$next = $_REQUEST['page'] + 1;
$pre = $_REQUEST['page'] - 1;
$start = $_REQUEST['page'] * $limit;
?>
<?php
if ($_GET['did'] != "") {
	del("offer", "sno", $_GET['did']);
}
?>
<?php
$tot = count($_POST['a']);
for ($i = 0; $i < $tot; $i++) {
	$do = $_POST['a'][$i];
	del("offer", "sno", $do);
}
?>
<?php include 'find.php' ?>
<div class="view">
	<table class="table jumbotron">
		<form method="post">
			<center>
				<h1>View Offer</h1>
			</center>
			<tr class="bg-dark">
				<td class="text-white ">
					<center><input class="btn-primary form-control" type="Submit" value="Delete" name="" id=""></center>
				</td>
				<td class="text-white ">
					<center>Offer ID </center>
				</td>
				<td class="text-white ">
					<center>Offers Title</center>
				</td>
				<td class="text-white ">
					<center>Offers Description</center>
				</td>
				<td class="text-white ">
					<center>Offers Image</center>
				</td>
				<td class="text-white ">
					<center>Offers Status</center>
				</td>
				<td class="text-white ">
					<center>Delete</center>
				</td>
				<td class="text-white ">
					<center>edit</center>
				</td>
			</tr>
			<?php
			$sel = "select * from offer $src limit $start,$limit";
			$q = mysql_query($sel);
			while ($fetch = mysql_fetch_array($q)) {
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
						<center> <?php echo $fetch['offerdec']; ?> </center>
					</td>
					<td>
						<center> <img class="img-thumbnail" width="100" height="100" src="../images/offer/<?php echo $fetch['image']; ?>" alt=""> </center>
					</td>
					<td>
						<center> <?php echo $fetch['status']; ?> </center>
					</td>
					<td>
						<center><a class="form-control btn-primary" href="addoffer.php?did=<?php echo $fetch['sno']; ?>">Edit</a></center>
					</td>
					<td>
						<center><a class="form-control btn-danger" href="viewoffer.php?did=<?php echo $fetch['sno']; ?>">Delete</a></center>
					</td>
				</tr>
			<?php
			}
			?>
		</form>
	</table>
	<center>
		<table align="center" border="1" cellpadding="10px" cellspacing="0">
			<tr>
				<td><a href="viewoffer.php?page=0">First</a></td>
				<td><a href="viewoffer.php?page=<?php echo $pre; ?>">Pre</a></td>
				<td>
					<?php $sel1 = "select count(*) as cou from offer ";
					$exe1 = mysql_query("$sel1");
					$fetch1 = mysql_fetch_array($exe1);
					//print_r($fetch1);
					// $tot=mysql_num_rows($exe1);
					$pages = ceil($fetch1['cou'] / $limit);
					for ($i = 1; $i <= $pages; $i++) {
					?>
						<a class="navbar-brand" href="viewoffer.php?page=<?php echo $i - 1; ?>"><?php echo $i; ?></a>
					<?php } ?>
				</td>
				<td><a href="viewoffer.php?page=<?php echo $next; ?>"> Next </a></td>
				<td><a href="viewoffer.php?page=<?php echo $pages - 1; ?>"> Last</a></td>
			</tr>
		</table>
	</center>
</div>
<?php include 'footer.php'; ?>