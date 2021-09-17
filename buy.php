<?php include 'header.php' ?>
<div class="row buy-page-div">
    <div class="col-md-12">
        <?php
        $selbuuy = "select * from product where sno='" . $_GET['buy1'] . "' ";
        $exebuuy = mysql_query($selbuuy);
        $fetchbuuy = mysql_fetch_array($exebuuy);
        ?>
    </div>
    <table class="table">
        <form method="POST">
            <tr>
                <td colspan="2">
                    <center><img src="images/product/<?php echo $fetchbuuy['i1'] ?>" class="img-thumbnail" width="300" height="400" alt="Error"></center>
                </td>
            </tr>
            <tr>
                <td style="width: 100px;"> <b> Name : </b> </td>
                <td> <label> <?php echo $fetchbuuy['name']; ?></label> </td>
            </tr>
            <tr>
                <td> <b> CODE </b> </td>
                <td> <label> <?php echo $fetchbuuy['procode']; ?></label> </td>
            </tr>
            <tr>
                <td> <b> Price : </b> </td>
                <td>
                    <s> <?php echo $fetchbuuy['mrp']; ?> </s>
                    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                    <b> <i> <label> <?php echo $fetchbuuy['dismrp']; ?> </label>
                        </i> </b>
                </td>
            </tr>
            <tr>
                <td> <b> About : </b> </td>
                <td> <label><?php echo $fetchbuuy['about']; ?></label> </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <?php
                    if ($_SESSION["USER_ID"] == "") {
                    ?>
                        <b>Please login to buy</b>
                    <?php } else { ?>
                        <input class="form-control btn-success" type="submit" value="Buy" name="buy1">
                    <?php } ?>
                    <?php
                    if ($_POST['buy1'] == "Buy") {
                        echo "Order sucessful";
                        $insbuy = "INSERT INTO oder(uid,name,price,date) VALUES('" . $_SESSION["USER_ID"] . "','" . $fetchbuuy['name'] . "','" . $fetchbuuy['dismrp'] . "','" . date("Y/m/d") . "')";
                        mysql_query($insbuy);
                    }
                    ?>
        </form>
        </td>
        </tr>
    </table>
</div>
<?php echo $_POST['name'] ?>
<?php include 'footer.php' ?>