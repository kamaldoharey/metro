<?php include 'header.php'; ?>
<?php include 'sess.php'; ?>
<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6 jumbotron">
			<center>
				<h1>Add Category</h1>
			</center>
			<table class="table">
				<form method="post" enctype="multipart/form-data">
					<?php
					$sel = "select * from cat where sno='" . $_GET['did'] . "'";
					$exe = mysql_query($sel);
					$fetch = mysql_fetch_array($exe);
					// file upload code
					// co2  is for file upload
					$name = $_FILES['co2']['name'];
					$tmp_name = $_FILES['co2']['tmp_name'];
					$path = "../images/cat/" . $name;
					move_uploaded_file($tmp_name, $path);
					// code end here
					if ($_POST['submit'] == "Submit") {

						if ($_GET['did'] == "") {
							$ins = "insert into cat(name,image,status) values('" . $_POST['co1'] . "','" . $name . "','" . $_POST['catradio'] . "')";
							mysql_query($ins);
						} else {
							$upd = "UPDATE offer set
							name='" . $_POST['co1'] . "',
							offerdec='" . $_POST['co2'] . "',
							image='" . name . "',
							status='" . $_POST['co4'] . "',
							where sno='" . $_GET['did'] . "' ";
							mysql_query($upd);
						}
					}
					?>
					<tr>
						<td>category Title </td>
						<td><input class="form-control" placeholder="category Title" type="text" name="co1" value="<?php echo $fetch['name'] ?>"></td>
					</tr>
					<tr>
						<td>category Image :</td>
						<td><input class="form-control" type="file" name="co2"></td>
					</tr>
					<tr>
						<td>Status :</td>
						<td>
							Enable <input type="radio" name="catradio" value="1">
							Disable <input type="radio" name="catradio" value="0">
						</td>
					</tr>
					<tr>
						<?php if ($_GET['did'] != "") { ?>
							<img class="img-thumbnail" src="../images/cat/<?php echo $fetch['image'] ?> " alt="">
						<?php } ?>
					</tr>
					<tr>
						<td colspan="2"><input class="btn-primary form-control" type="submit" name="submit" value="Submit"></td>
					</tr>
				</form>
			</table>
		</div>
		<div class="col-md-3"></div>
	</div>
</div>
<?php include 'footer.php'; ?>