<?php
$src = "";
if ($_POST['Find'] != "") {
	$src = " where name=" . $_POST['st1'];
}
?>
<center>
	<table class="table jumbotron bg-dark">
		<form method="post">
			<tr>
				<td><input class="form-control" type="text" name="st1" placeholder="Search"></td>
				<td><input class="form-control btn-primary" type="submit" name="Find" value="Find" id=""></td>
			</tr>
		</form>
	</table>
</center>