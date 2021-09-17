<?php include 'header.php' ?>
<div class="col-md-12 offer-page-div">
	<div class="">
		<div class="offeroop">
			<h1 class="bg-success text-white">Offer</h1>
		</div>
		<?php
		$seloop =  "SELECT * FROM offer WHERE sno='" . $_GET['offid'] . "' ";
		$exeoop = mysql_query($seloop);
		$fetchoop = mysql_fetch_array($exeoop);
		?>
		<div> <b> <?php echo $fetchoop['name']; ?> </b> </div>

		<img class="img-thumbnail" src="images/offer/<?php echo $fetchoop['image']; ?>" alt="">
		<br>
		<?php echo $fetchoop['offerdec']; ?>
	</div>

</div>
</div>
<?php include 'footer.php' ?>