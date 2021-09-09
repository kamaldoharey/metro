<?php include'header.php' ?>
<div class="row prodpage">
	<div class="col-md-9">
		<h1>Service</h1>
		<?php
		$selp = "select * from service";
		$exe = mysql_query($selp);
		while ($fetchs=mysql_fetch_array($exe)) {
			?>

			<a href=""><img id="evo" src="images/service/<?php echo $fetchs['image1'] ?> " alt="error" width="150" height="150"></a>

		<?php } ?>

	</div>
	<div class="col-md-3">
		<?php
		$selp = "select * from service";
		$exe = mysql_query($selp);
		while ($fetchs=mysql_fetch_array($exe)) {
			?>
			<a style="margin-top: 5px;" class="btn-white form-control" href=""> <?php echo $fetchs['name'] ?></a>
		<?php } ?>
	</div>
</div>
<?php include'footer.php' ?>
