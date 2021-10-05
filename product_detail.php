<?php include 'header.php' ?>
<div class="row show-on-the-go">
	<div class="col-md-9 ho56">
		<h1>Product</h1>
		<?php
		$select_product = "select * from product where subcat='" . $_GET['catname'] . "' ";
		$execute_product = mysql_query($select_product);
		while ($fetch_product = mysql_fetch_array($execute_product)) {
		?>
			<a href="buy.php?buy1=<?php echo $fetch_product['sno'] ?>"> <img id="evo" src="images/product/<?php echo $fetch_product['i1'] ?>" alt="error" width="150" height="150"> </a>
		<?php } ?>
	</div>
	<div class="col-md-3">
		<?php
		$select_product = "select * from product where subcat='" . $_GET['catname'] . "' ";
		$execute_product = mysql_query($select_product);
		while ($fetch_product = mysql_fetch_array($execute_product)) {
		?>
			<a style="margin-top: 5px;" class="btn-white form-control" href="buy.php?buy1=<?php echo $fetch_product['sno'] ?>"><?php echo $fetch_product['name'] ?></a>
		<?php } ?>
	</div>
</div>
<?php include 'footer.php' ?>