<?php
// error_reporting
// error_reporting(0);
// error_reporting

mysql_connect("localhost","root","");
mysql_select_db("metro");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Metro Mall</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/on1.js"></script>
</head>
<body>
    <header class="container-fluid bg-success" id="header">
        <div class="container bg-success" >
            <ul class="row">
                <li class="col-md-3 list-unstyled">
                    <h1>Metro Mall</h1>
                    <td colspan="2">
                    </li>
                    <li class="col-md-9 list-unstyled" id="pd1">
                        <Ul class="navbar list-unstyled navcol">
                            <li><a class="navbar-brand text-dark" href="index.php">Home</a></li>
                            <li><a class="navbar-brand text-dark" href="about.php">About Us</a></li>
                            <li><a class="navbar-brand text-dark pubg" href="product.php">Products</a>
                                <div id="ddmenu">
                                    <a href="pbg.php?fo=Man">Man</a> <br>
                                    <a href="pbg.php?fo=Woman">Woman</a> <br>
                                    <a href="pbg.php?fo=Kids">Kids</a> <br>
                                </div>
                            </li>
                            <li><a class="navbar-brand text-dark" href="service.php">Services</a></li>
                            <li><a class="navbar-brand text-dark" href="contact.php">Contact Us</a></li>
                        </Ul>
                    </li>
                </ul>
            </div>
        </header>
        <div id="eater"></div>
        <div class="container">
            <div class="row">
                <aside class="col-md-3">
                    <div class="login1">
                        <table class="table">
                            <h3 class="text-white bg-success"> <b>&nbsp User Login</b> </h3>
                            <?php
                            if ($_POST['login']=="Login") {
                                $sel = "select * from regis where name='".$_POST['UN']."' AND password='".$_POST['UP']."' ";
                                $exe = mysql_query($sel);
                                $tot = mysql_num_rows($exe);
                                if ($tot==1)
                                {
                                    $fetch=mysql_fetch_array($exe);
                                    $_SESSION["USER_ID"]=$fetch["sno"];
                                }
                            }
                            ?>
                            <?php if ($_SESSION["USER_ID"]=="") {    ?>
                                <form method="post">
                                    <tr>
                                        <input class="form-control" required name="UN" placeholder="User name" type="text">
                                    </tr>
                                    <tr>
                                        <input class="form-control" required name="UP" placeholder="Password" type="password">
                                    </tr>
                                    <tr>
                                        <td><a class="form-control btn-primary" href="reg.php">Registrantion</a>
                                            <input class="form-control btn-primary" type="submit" name="login" value="Login" >
                                        </td>
                                    </tr>
                                </form>
                            <?php }
                            else
                            {
                                ?>
                                <table>
                                    <tr><a style="margin-top: 5px; " class="form-control btn-primary" href="profile.php">My Profile</a></tr>
                                    <tr><a style="margin-top: 5px; " class="form-control btn-primary" href="order.php">My Order</a></tr>
                                    <tr><a style="margin-top: 5px; " class="form-control btn-primary" href="">Change Password</a></tr>
                                    <tr><a style="margin-top: 5px; " class="form-control btn-primary" href="logout.php">Log Out</a></tr>
                                </table>
                            <?php } ?>
                        </table>
                    </div>
                    <div id="lastpod">
                        <h3 class="bg-success text-white">Latest Products</h3>
                        <div class="row1">
                            <center>
                                <img  src="images/download.jpg" width="80" height="80" alt="error">
                                <img  src="images/download.jpg" width="80" height="80" alt="error">
                            </center>
                            <center>
                                <img  src="images/download.jpg" width="80" height="80" alt="error">
                                <img  src="images/download.jpg" width="80" height="80" alt="error">
                            </center>
                        </div>
                    </div>
                </aside>
                <div class="col-md-9">