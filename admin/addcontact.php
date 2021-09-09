<?php include'header.php'; ?>
<?php include'sess.php'; ?>

<?php

if ($_POST['submit']=="Submit")
{
	if ($_GET['did']=="")
	{
		$ins = "
		INSERT INTO contact(name, address, image, pno, eid, status) VALUES 
		(
		'".$_POST['loc']."',
		'".$_POST['add1']."',
		'".$name."',
		'".$_POST['mobile']."',
		'".$_POST['eid']."',
		'".$_POST['conradio']."')
		";
		mysql_query($ins);
	}
	else
	{
		$upd = "UPDATE contact SET
		name='".$_POST['loc']."',
		address='".$_POST['add1']."',
		image='".$name."',
		pno='".$_POST['mobile']."',
		eid='".$_POST['eid']."',
		status='".$_POST['conradio']."'
		WHERE sno='".$_GET['did']."' ";
		mysql_query($upd);
	}
}

?>

<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6 jumbotron">
			<center><h1>Add Contact</h1>
			</center>
			<table class="table">
				<form method="post" enctype="multipart/form-data">
					<tr>
						<td>Metro mall Branch </td>
						<td><input class="form-control" placeholder="Metro mall Branch" type="text" name="loc" ></td>
					</tr>
					<tr>
						<td>Branch Address</td>
						<td><input class="form-control" placeholder="Branch Address" type="text" name="add1" ></td>
					</tr>
					<tr>
						<td>Branch Image :</td>
						<td><input class="form-control" type="file" name="image" ></td>
					</tr>
					<tr>
						<td>Mobile No.</td>
						<td><input class="form-control" placeholder="Mobile No." type="text" name="mobile" ></td>
					</tr>
					<tr>
						<td>E-mail Id</td>
						<td><input class="form-control" placeholder="E-mail Id" type="text" name="eid" ></td>
					</tr>
					<tr>
						<td>Status</td>
						<td>
							Enable <input type="radio" name="conradio" value="1">
							Disable <input type="radio" name="conradio" value="0">
						</td>
					</tr>
					<tr>
						<td colspan="2"> <input class="form-control btn-primary" type="submit" value="Submit" name="submit" > </td>
					</tr>
				</form>
			</table>
		</div>
		<div class="col-md-3"></div>
	</div>
</div>
<?php include'footer.php'; ?>