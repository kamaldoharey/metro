<?php include 'header.php' ?>
<div class="row jumbotron">
	<table class="table" style="text-align: center;">
		<tr>
			<td>Name</td>
			<td>Price</td>
			<td>Date</td>
			<td>Delete</td>
		</tr>
		<?php
		$select_order = "SELECT * FROM oder";
		$execute_order = mysql_query($select_order);
		while ($fetch_order = mysql_fetch_array($execute_order)) {
		?>
			<tr>
				<td> <?php echo $fetch_order['name']; ?> </td>
				<td> <?php echo $fetch_order['price']; ?> </td>
				<td> <?php echo $fetch_order['date']; ?> </td>
				<td> <a class="form-control btn-danger" href="">Delete</a> </td>
			</tr>
		<?php } ?>
	</table>
</div>
<?php include 'footer.php' ?>