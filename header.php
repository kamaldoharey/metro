<?php
// error_reporting
error_reporting(0);
// error_reporting

mysql_connect("localhost", "root", "");
mysql_select_db("kalpana");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Kalpana Mart</title>
    <!-- /* -------------------------------- bootstrap ------------------------------- */ -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- /* ------------------------------- fontawesome ------------------------------ */ -->
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <script src="fontawesome/js/all.js"></script>
    <!-- /* -------------------------------------------------------------------------- */ -->
    <link rel="stylesheet" href="css/style.css">
    <script src="js/on1.js"></script>
</head>

<body>
    <!-- /* --------------------------- header starts here --------------------------- */ -->
    <header class="container-fluid custom-bg-1" id="header">
        <div class="container custom-bg-1">
            <ul class="row">
                <li class="col-md-3 list-unstyled">
                    <h1>Kalpana Mart</h1>
                    <td colspan="2">
                </li>
                <!-- /* ----------------------------- navigation bar ----------------------------- */ -->
                <li class="col-md-9 list-unstyled" id="header-right-side">
                    <Ul class="navbar list-unstyled navigation-colum">
                        <li><a class="navbar-brand text-dark" href="index.php">Home</a></li>
                        <li><a class="navbar-brand text-dark" href="about.php">About Us</a></li>
                        <li><a class="navbar-brand text-dark navbar-product-menu" href="product.php">Products</a>
                            <div id="drop-down-menu">
                                <a href="pbg.php?fo=Man">Man</a> <br>
                                <a href="pbg.php?fo=Woman">Woman</a> <br>
                                <a href="pbg.php?fo=Kids">Kids</a> <br>
                            </div>
                        </li>
                        <li><a class="navbar-brand text-dark" href="service.php">Services</a></li>
                        <li><a class="navbar-brand text-dark" href="contact.php">Contact Us</a></li>
                    </Ul>
                </li>
                <!-- /* ------------------------- navigation bar end here ------------------------ */ -->
            </ul>
        </div>
    </header>
    <!-- /* ---------------------------- header ends here ---------------------------- */ -->
    <div id="eater"></div>
    <div class="container">
        <div class="row">
            <aside class="col-md-3">
                <div class="home-page-user-login">
                    <h3 class="text-white custom-bg-1 header-login-div-title"> User login </h3>
                    <table class="table">
                        <?php
                        /* If login detail are found */
                        if ($_POST['login'] == "Log in") {
                            $sel = "select * from regis where name='" . $_POST['UN'] . "' AND password='" . $_POST['UP'] . "' ";
                            $exe = mysql_query($sel);
                            $tot = mysql_num_rows($exe);
                            if ($tot == 1) {
                                $fetch = mysql_fetch_array($exe);
                                $_SESSION["USER_ID"] = $fetch["sno"];
                            }
                        }
                        ?>
                        <?php if ($_SESSION["USER_ID"] == "") {    ?>
                            <form method="post">
                                <tr>
                                    <input class="form-control" required name="UN" placeholder="User name" type="text">
                                </tr>
                                <tr>
                                    <input class="form-control" required name="UP" placeholder="Password" type="password">
                                </tr>
                                <tr>
                                    <td style="font-size: 0.5em !important;" colspan="1">
                                        <center>
                                            <a class="btn form-control btn-dark" href="reg.php"> Sign Up </a>
                                        </center>
                                        <center>
                                            <input class="btn form-control btn-dark" type="submit" name="login" value="Log in">
                                        </center>
                                    </td>
                                </tr>
                            </form>
                        <?php } else { ?>
                            <table>
                                <tr> <a style="margin-top: 5px;" class="form-control btn-primary" href="profile.php">My Profile</a> </tr>
                                <tr> <a style="margin-top: 5px;" class="form-control btn-primary" href="order.php">My Order</a> </tr>
                                <tr> <a style="margin-top: 5px;" class="form-control btn-primary" href="">Change Password</a> </tr>
                                <tr> <a style="margin-top: 5px;" class="form-control btn-primary" href="logout.php">Log Out</a> </tr>
                            </table>
                        <?php } ?>
                    </table>
                </div>
                <!-- /* ------------------------ latest-product-div-items ------------------------ */ -->
                <div id="latest-product">
                    <h3 class="custom-bg-1 text-white">Latest Products</h3>
                    <div class="latest-product-div-items">
                        <!-- logic start here -->
                        <?php
                        $select_latest_product = "select * from product ORDER BY sno DESC limit 0,4";
                        $execute_latest_product = mysql_query($select_latest_product);
                        while ($fetch = mysql_fetch_array($execute_latest_product)) {
                        ?>

                            <img class="img-fluid" src="images/product/<?php echo $fetch['i1']; ?>" width="auto" height="50px" alt="">
                        <?php } ?>



                        <!-- logic ends start here -->
                    </div>
                </div>
                <!-- /* ------------------------ latest product ends here ------------------------ */ -->
            </aside>
            <div class="col-md-9">