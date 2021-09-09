<?php include'header.php' ?>
<div class="row jumbotron">
	<table class="table"  style="text-align: center;">
		<tr>
			<td>Name</td>
			<td>Price</td>
			<td>Date</td>
			<td>Delete</td>
		</tr>
		<?php
		$seloder = "SELECT * FROM oder";
		$exeoder = mysql_query($seloder);
		while ($fetchoder=mysql_fetch_array($exeoder)){
			?>
			<tr>
				<td> <?php echo $fetchoder['name']; ?> </td>
				<td> <?php echo $fetchoder['price']; ?> </td>
				<td> <?php echo $fetchoder['date']; ?> </td>
				<td> <a class="form-control btn-danger" href="">Delete</a> </td>
			</tr>
		<?php } ?>
	</table>
</div>
<?php include'footer.php' ?>