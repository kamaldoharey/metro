<?php 
session_start();
if ($_SESSION["ADMINID"]=="") {
	echo '<script> window.location="index.php" </script>';
}
?>