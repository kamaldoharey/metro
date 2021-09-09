<?php include'header.php' ?>
<div class="row prodpage">
	<div class="col-md-9 ho56">
		<h1>Sub-Catagery</h1>
		<?php
		$s1=1;
		$selp = "select * from subcat where cat='".$_GET['catname']."' ";
		$exe = mysql_query($selp);
		while ($fetchp=mysql_fetch_array($exe)) {
			?>
			<a href="product_detail.php?catname=<?php echo $fetchp['name'] ?>" 
				id="tab-<?php echo $s1 ?>"
				onMouseMove="divchang(<?php echo $s1 ?>)" onMouseOut="hidediv(<?php echo $s1 ?>)"> 
				<img class="ho5"  src="images/sub cat/<?php echo $fetchp['image'] ?> " alt="error" width="150" height="150"> 
			</a>
			<?php $s1++; } ?>		
		</div>
		<div class="col-md-3">
			<?php
			$s2=1;

			$selp = "select * from subcat where cat='".$_GET['catname']."' ";
			$exe = mysql_query($selp);
			while ($fetchl=mysql_fetch_array($exe)) {
				?>
				<a id="evof<?php echo $s2 ?>" style="margin-top: 5px;" class="btn-white form-control"
					onMouseMove="divzoom(<?php echo $s2 ?>)" onMouseOut="zoomless(<?php echo $s2 ?>)"

					href="product_detail.php?catname=<?php echo $fetchl['name'] ?>"><?php echo $fetchl['name'] ?></a>
					<?php $s2++; } ?>
				</div>
			</div>
			<?php include'footer.php' ?>