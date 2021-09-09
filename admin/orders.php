<?php include'header.php'; ?>
<?php include'sess.php'; ?>
<?php include'fn.php'; ?>
<?php
$start=0;
$limit=5;
$next=$_REQUEST['page']+1;
$pre=$_REQUEST['page']-1;
$start=$_REQUEST['page']*$limit;
?>
<?php
if ($_GET['did']!="") {
	del("oder","sno",$_GET['did']);
}
?>
<?php
$tot = count($_POST['a']);
for ($i=0; $i < $tot; $i++) {
	$do = $_POST['a'][$i];
	del("oder","sno",$do);
}
?>
<div class="view">
	<table class="table jumbotron">
		<form method="post">
			
			<center>
				<h1>View Product</h1>
			</center>
			<tr class="bg-dark">
				<td class="text-white" > <center><input class="btn-primary form-control" type="submit" value="Delete" name="a[]" ></center> </td>
				<td class="text-white" > <center> S.no. </center> </td>
				<td class="text-white" > <center> Order Id </center> </td>
				<td class="text-white" > <center> Product Name </center> </td>
				<td class="text-white" > <center> Price </center> </td>
				<td class="text-white" > <center> Date </center> </td>
				<td class="text-white" > <center> Delete </center> </td>
			</tr>
			<?php
			$sel = "select * from oder limit $start,$limit";
			$exe = mysql_query($sel);
			while ($fetch=mysql_fetch_array($exe)) {
				?>
				<tr>
					<td> <center> <input type="checkbox" name="a[]" value="<?php echo $fetch['sno']; ?>" id=""> </center> </td>
					<td> <center> <?php echo $fetch['sno'] ?> </center> </td>
					<td> <center> <?php echo $fetch['uid'] ?> </center> </td>
					<td> <center> <?php echo $fetch['name'] ?> </center> </td>
					<td> <center> <?php echo $fetch['price'] ?> </center> </td>
					<td> <center> <?php echo $fetch['date'] ?> </center> </td>
					<td> <center> <a class="form-control btn-danger" href="orders.php?did=<?php echo $fetch['sno'] ?>">Delete</a> </center> </td>
				</tr>
			<?php } ?>
		</form>
	</table>
	<center>
		<table align="center" border="1" cellpadding="10px" cellspacing="0">
			<tr>
				<td><a href="orders.php?page=0">First</a></td>
				<td><a href="orders.php?page=<?php echo $pre; ?>">Pre</a></td>
				<td>
					<?php  $sel1 = "select count(*) as cou from product ";
					$exe1=mysql_query("$sel1");
					$fetch1=mysql_fetch_array($exe1);
				//print_r($fetch1);
				// $tot=mysql_num_rows($exe1);
					$pages=ceil($fetch1['cou']/$limit);
					for ($i=1; $i <=$pages ; $i++) {
						?>
						<a class="navbar-brand" href="orders.php?page=<?php echo $i-1; ?>"><?php echo $i; ?></a>
					<?php }?>
				</td>
				<td><a href="orders.php?page=<?php echo $next; ?>"> Next </a></td>
				<td><a href="orders.php?page=<?php echo $pages-1; ?>"> Last</a></td>
			</tr>
		</table>
	</center>
</div>
<?php include'footer.php'; ?>