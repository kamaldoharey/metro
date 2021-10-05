<?php include 'header.php' ?>
<div class="row show-on-the-go">
	<div class="col-md-9">
		<?php
		$s1 = 1;
		$selp = "select * from product where fo='" . $_GET['fo'] . "' ";
		$exe = mysql_query($selp);
		while ($fetchfo = mysql_fetch_array($exe)) {
		?>
			<a onMouseMove="divchang(<?php echo $s1 ?>)" onMouseOut="hidediv(<?php echo $s1 ?>)" class="ho5" id="tab-<?php echo $s1 ?>" href="buy.php?buy1=<?php echo $fetchfo['sno'] ?>">
				<img src="images/product/<?php echo $fetchfo['i1'] ?> " alt="error" width="150" height="150">
			</a>
		<?php $s1++;
		} ?>

	</div>
	<div class="col-md-3">
		<?php
		$s2 = 1;
		$selp = "select * from product where fo='" . $_GET['fo'] . "'";
		$exe = mysql_query($selp);
		while ($fetchfo = mysql_fetch_array($exe)) {
		?>
			<a id="evof<?php echo $s2 ?>" style="margin-top: 5px;" onMouseMove="divzoom(<?php echo $s2 ?>)" onMouseOut="zoomless(<?php echo $s2 ?>)" class="btn-white form-control" href="buy.php?buy1=<?php echo $fetchfo['sno'] ?>"> <?php echo $fetchfo['name'] ?></a>
		<?php $s2++;
		} ?>
	</div>
</div>
<?php include 'footer.php' ?>