<?php include 'header.php' ?>
<div class="col-md-12 offer-page-div">
	<div class="">
		<div class="offeroop">
			<h1 class="bg-success text-white">Offer</h1>
		</div>
		<?php
		$select_offer =  "SELECT * FROM offer WHERE sno='" . $_GET['offid'] . "' ";
		$execute_offer = mysql_query($select_offer);
		$fetch_offer = mysql_fetch_array($execute_offer);
		?>
		<div> <b> <?php echo $fetch_offer['name']; ?> </b> </div>

		<img class="img-thumbnail" src="images/offer/<?php echo $fetch_offer['image']; ?>" alt="">
		<br>
		<?php echo $fetch_offer['offerdec']; ?>
	</div>

</div>
</div>
<?php include 'footer.php' ?>