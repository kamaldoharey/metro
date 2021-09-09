<?php include'header.php'; ?>
<?php include'sess.php'; ?>
<?php include'fn.php' ?>
<?php
if ($_GET['did']!="") {
	del("regis","sno",$_GET['did']);
}
?>
<?php
$tot = count($_POST['a']);
for ($i=0; $i < $tot; $i++) {
	echo $do = $_POST['a'][$i];
	del("regis","sno",$do);
}
?>
<?php
$start=0;
$limit=5;
$next=$_REQUEST['page']+1;
$pre=$_REQUEST['page']-1;
$start=$_REQUEST['page']*$limit;
?>
<?php include'find.php' ?>
<?php echo $src ?>
<div class="view">
	<table class="table jumbotron">
		<form method="post" >
			<center>
				<h1>View regisagory</h1>
			</center>
			<tr class="bg-dark">
				<td class="text-white"> <center> <input class="form-control btn-primary" type="submit" name="" id=""> </center> </td>
				<td class="text-white"> <center>  Name  </center> </td>
				<td class="text-white"> <center>  Gender  </center> </td>
				<td class="text-white"> <center>  Date of Birth  </center> </td>
				<td class="text-white"> <center>  Address  </center> </td>
				<td class="text-white"> <center>  State  </center> </td>
				<td class="text-white"> <center>  Qualification  </center> </td>
				<td class="text-white"> <center>  Phone No.  </center> </td>
				<td class="text-white"> <center>  Email  </center> </td>
				<td class="text-white"> <center>  Photo  </center> </td>
				<td class="text-white"> <center>  Password  </center> </td>
				<td class="text-white"> <center>  Delete  </center> </td>
			</tr>
			<?php
			$sel = "select * from regis $src limit $start,$limit ";
			$q=mysql_query($sel);
			while($fetch=mysql_fetch_array($q))
			{
				?>
				<tr>
					<td>  <center> <input type="checkbox" name="" id=""> </center> </td>
					<td>  <center> <?php echo $fetch['name'] ?> </center> </td>
					<td>  <center> <?php echo $fetch['gender'] ?> </center> </td>
					<td>  <center> <?php echo $fetch['dob'] ?> </center> </td>
					<td>  <center> <?php echo $fetch['address'] ?> </center> </td>
					<td>  <center> <?php echo $fetch['state'] ?> </center> </td>
					<td>  <center> <?php echo $fetch['check1'] ?> </center> </td>
					<td>  <center> <?php echo $fetch['phone'] ?> </center> </td>
					<td>  <center> <?php echo $fetch['email'] ?> </center> </td>
					<td>  <center> <img class="img-thumbnail" src="../images/user/<?php echo $fetch['photo'] ?>" width="200" alt="Error"> </center> </td>
					<td>  <center> <?php echo $fetch['password'] ?> </center> </td>
					<td>  <center> <a class="form-control btn-primary" href="">Delete</a> </td>
					<?php } ?>
				</tr>
			</form>
		</table>
		<center>
			<table align="center" border="1" cellpadding="10px" cellspacing="0">
				<tr>
					<td><a href="users.php?page=0">First</a></td>
					<td><a href="users.php?page=<?php echo $pre; ?>">Pre</a></td>
					<td>
						<?php  $sel1 = "select count(*) as cou from regis ";
						$exe1=mysql_query("$sel1");
						$fetch1=mysql_fetch_array($exe1);
				//print_r($fetch1);
				// $tot=mysql_num_rows($exe1);
						$pages=ceil($fetch1['cou']/$limit);
						for ($i=1; $i <=$pages ; $i++) {
							?>
							<a class="navbar-brand" href="users.php?page=<?php echo $i-1; ?>"><?php echo $i; ?></a>
						<?php }?>
					</td>
					<td><a href="users.php?page=<?php echo $next; ?>"> Next </a></td>
					<td><a href="users.php?page=<?php echo $pages-1; ?>"> Last</a></td>
				</tr>
			</table>
		</center>
	</div>
	<?php include'footer.php'; ?>