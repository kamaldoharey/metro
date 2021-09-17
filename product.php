<?php include 'header.php' ?>
<div class="row prodpage">
	<div class="col-md-9 ho56">
		<h1>Catagery</h1>
		<?php
		$s1 = 1;
		$selp = "select * from cat";
		$exe = mysql_query($selp);
		while ($fetchp = mysql_fetch_array($exe)) {
		?>
			<a href="subcatagery.php?catname=<?php echo $fetchp['name']; ?>" onMouseMove="divchang(<?php echo $s1 ?>)" onMouseOut="hidediv(<?php echo $s1 ?>)">
				<img class="ho5" id="tab-<?php echo $s1 ?>" src="images/cat/<?php echo $fetchp['image'] ?> " alt="error" width="150" height="150">
			</a>
		<?php $s1++;
		} ?>
	</div>
	<div class="col-md-3">
		<?php
		$s2 = 1;
		$selp = "select * from cat";
		$exe = mysql_query($selp);
		while ($fetchp = mysql_fetch_array($exe)) {
		?>
			<a id="evof<?php echo $s2 ?>" style="margin-top: 5px;" class="btn-white form-control" onMouseMove="divzoom(<?php echo $s2 ?>)" onMouseOut="zoomless(<?php echo $s2 ?>)" href="subcatagery.php?catname=<?php echo $fetchp['name']; ?>">
				<?php echo $fetchp['name'] ?>
			</a>
		<?php $s2++;
		} ?>
	</div>
</div>
<?php include 'footer.php' ?>