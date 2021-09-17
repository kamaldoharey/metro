<?php include 'header.php'; ?>
<?php include 'sess.php'; ?>
<?php include 'fn.php'; ?>

<?php
// pegination count
$start = 0;
$limit = 5;
$next = $_REQUEST['page'] + 1;
$pre = $_REQUEST['page'] - 1;
$start = $_REQUEST['page'] * $limit;
// End pegination count
?>


<?php
// Delete function
if ($_GET['did'] != "") {
	del("product", "sno", $_GET['did']);
}
// END Delete function
?>


<?php
$tot = count($_POST['a']);
for ($i = 0; $i < $tot; $i++) {
	$do = $_POST['a'][$i];
	del("product", "sno", $do);
}
?>

<div class="view">
	<table class="table jumbotron">
		<form method="post">

			<center>
				<h1>View Product</h1>
			</center>
			<tr class="bg-dark">
				<td class="text-white">
					<center><input class="btn-primary form-control" type="submit" value="Delete" name="a[]"></center>
				</td>
				<td class="text-white">
					<center>Sr</center>
				</td>
				<td class="text-white">
					<center>Product</center>
				</td>
				<td class="text-white">
					<center>category</center>
				</td>
				<td class="text-white">
					<center>Subcategory</center>
				</td>
				<td class="text-white">
					<center>Code</center>
				</td>
				<td class="text-white">
					<center>For</center>
				</td>
				<td class="text-white">
					<center>Mrp</center>
				</td>
				<td class="text-white">
					<center>Discount</center>
				</td>
				<td class="text-white">
					<center>Image1</center>
				</td>
				<td class="text-white">
					<center>Image2</center>
				</td>
				<td class="text-white">
					<center>Image3</center>
				</td>
				<td class="text-white">
					<center>Image4</center>
				</td>
				<td class="text-white">
					<center>About</center>
				</td>
				<td class="text-white">
					<center>Status</center>
				</td>
				<td class="text-white">
					<center>Latest</center>
				</td>
				<td class="text-white">
					<center>Edit</center>
				</td>
				<td class="text-white">
					<center>Delete</center>
				</td>
			</tr>
			<?php
			$sel = "select * from product limit $start,$limit";
			$exe = mysql_query($sel);
			while ($fetch = mysql_fetch_array($exe)) {
			?>
				<tr>
					<td>
						<center> <input type="checkbox" name="a[]" value="<?php echo $fetch['sno']; ?>" id=""> </center>
					</td>
					<td>
						<center> <?php echo $fetch['sno']; ?> </center>
					</td>
					<td>
						<center> <?php echo $fetch['name']; ?> </center>
					</td>
					<td>
						<center> <?php echo $fetch['cat']; ?> </center>
					</td>
					<td>
						<center> <?php echo $fetch['subcat']; ?> </center>
					</td>
					<td>
						<center> <?php echo $fetch['procode']; ?> </center>
					</td>
					<td>
						<center> <?php echo $fetch['fo']; ?> </center>
					</td>
					<td>
						<center> <?php echo $fetch['mrp']; ?> </center>
					</td>
					<td>
						<center> <?php echo $fetch['dismrp']; ?> </center>
					</td>
					<td>
						<center> <img class="img-thumbnail" src="../images/product/<?php echo $fetch['i1']; ?>" alt="Error"> </center>
					</td>
					<td>
						<center> <img class="img-thumbnail" src="../images/product/<?php echo $fetch['i2']; ?>" alt="Error"> </center>
					</td>
					<td>
						<center> <img class="img-thumbnail" src="../images/product/<?php echo $fetch['i3']; ?>" alt="Error"> </center>
					</td>
					<td>
						<center> <img class="img-thumbnail" src="../images/product/<?php echo $fetch['i4']; ?>" alt="Error"> </center>
					</td>
					<td>
						<center> <?php echo $fetch['about']; ?> </center>
					</td>
					<td>
						<center> <?php echo $fetch['status']; ?> </center>
					</td>
					<td>
						<center> <?php echo $fetch['lat']; ?> </center>
					</td>
					<td>
						<center> <a class="form-control btn-primary" href="addproduct.php?did=<?php echo $fetch['sno'] ?>">Edit</a> </center>
					</td>
					<td>
						<center> <a class="form-control btn-primary" href="viewproduct.php?did=<?php echo $fetch['sno'] ?>">Delete</a> </center>
					</td>
				</tr>
			<?php } ?>
		</form>
	</table>
	<center>
		<table align="center" border="1" cellpadding="10px" cellspacing="0">
			<tr>
				<td><a href="viewproduct.php?page=0">First</a></td>
				<td><a href="viewproduct.php?page=<?php echo $pre; ?>">Pre</a></td>
				<td>
					<?php $sel1 = "select count(*) as cou from product ";
					$exe1 = mysql_query("$sel1");
					$fetch1 = mysql_fetch_array($exe1);
					//print_r($fetch1);
					// $tot=mysql_num_rows($exe1);
					$pages = ceil($fetch1['cou'] / $limit);
					for ($i = 1; $i <= $pages; $i++) {
					?>
						<a class="navbar-brand" href="vireproduct.php?page=<?php echo $i - 1; ?>"><?php echo $i; ?></a>
					<?php } ?>
				</td>
				<td><a href="viewproduct.php?page=<?php echo $next; ?>"> Next </a></td>
				<td><a href="viewproduct.php?page=<?php echo $pages - 1; ?>"> Last</a></td>
			</tr>
		</table>
	</center>
</div>
<?php include 'footer.php'; ?>