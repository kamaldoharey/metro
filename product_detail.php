<?php include'header.php' ?>
<div class="row prodpage">
	<div class="col-md-9 ho56">
		<h1>Product</h1>
		<?php
		$selp = "select * from product where subcat='".$_GET['catname']."' ";
		$exe = mysql_query($selp);
		while ($fetchp=mysql_fetch_array($exe)) {
			?>
			<a href="buy.php?buy1=<?php echo $fetchp['sno'] ?>"> <img id="evo" src="images/product/<?php echo $fetchp['i1'] ?>" alt="error" width="150" height="150"> </a>
		<?php } ?>
	</div>
	<div class="col-md-3">
		<?php
		$selp = "select * from product where subcat='".$_GET['catname']."' ";
		$exe = mysql_query($selp);
		while ($fetchl=mysql_fetch_array($exe)) {
			?>
			<a style="margin-top: 5px;" class="btn-white form-control" href="buy.php?buy1=<?php echo $fetchl['sno'] ?>"><?php echo $fetchl['name'] ?></a>
		<?php } ?>
	</div>
</div>
<?php include'footer.php' ?>