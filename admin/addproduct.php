<?php include 'header.php'; ?>
<?php include 'sess.php'; ?>

<?php
// BUG Update product is not working

//file upload

?>

<?php
if ($_POST['submit'] == "Submit") {
    if ($_GET['did'] == "") {
        $name1 = $_FILES['im1']['name'];
        $tmp_name = $_FILES['im1']['tmp_name'];
        $path = "../images/product/" . $name1;
        move_uploaded_file($tmp_name, $path);

        $name2 = $_FILES['im2']['name'];
        $tmp_name = $_FILES['im2']['tmp_name'];
        $path = "../images/product/" . $name2;
        move_uploaded_file($tmp_name, $path);

        $name3 = $_FILES['im3']['name'];
        $tmp_name = $_FILES['im3']['tmp_name'];
        $path = "../images/product/" . $name3;
        move_uploaded_file($tmp_name, $path);

        $name4 = $_FILES['im4']['name'];
        $tmp_name = $_FILES['im4']['tmp_name'];
        $path = "../images/product/" . $name4;
        move_uploaded_file($tmp_name, $path);
        $ins = "INSERT INTO product(name, cat, subcat, procode, fo, mrp, dismrp, i1, i2, i3, i4, about, status, lat) VALUES (
                '" . $_POST['name'] . "',
                '" . $_POST['cat'] . "',
                '" . $_POST['subcat'] . "',
                '" . $_POST['code'] . "',
                '" . $_POST['for1'] . "',
                '" . $_POST['mrp'] . "',
                '" . $_POST['dmrp'] . "',
                '" . $name1 . "',
                '" . $name2 . "',
                '" . $name3 . "',
                '" . $name4 . "',
                '" . $_POST['about'] . "',
                '" . $_POST['status'] . "',
                '" . $_POST['latest'] . "')
                ";
        mysql_query($ins);
    } else {
        $name1 = $_FILES['im1']['name'];
        $tmp_name = $_FILES['im1']['tmp_name'];
        $path = "../images/product/" . $name1;
        move_uploaded_file($tmp_name, $path);

        $name2 = $_FILES['im2']['name'];
        $tmp_name = $_FILES['im2']['tmp_name'];
        $path = "../images/product/" . $name2;
        move_uploaded_file($tmp_name, $path);

        $name3 = $_FILES['im3']['name'];
        $tmp_name = $_FILES['im3']['tmp_name'];
        $path = "../images/product/" . $name3;
        move_uploaded_file($tmp_name, $path);

        $name4 = $_FILES['im4']['name'];
        $tmp_name = $_FILES['im4']['tmp_name'];
        $path = "../images/product/" . $name4;
        move_uploaded_file($tmp_name, $path);
        $upd = "
                UPDATE product SET 
                name='" . $_POST['name'] . "',
                cat='" . $_POST['cat'] . "',
                subcat='" . $_POST['subcat'] . "',
                procode='" . $_POST['code'] . "',
                fo='" . $_POST['for1'] . "',
                mrp='" . $_POST['mrp'] . "',
                dismrp='" . $_POST['dmrp'] . "',
                i1='" . $name1 . "',
                i2='" . $name2 . "',
                i3='" . $name3 . "',
                i4='" . $name4 . "',
                about='" . $_POST['about'] . "',
                status='" . $_POST['status'] . "',
                lat='" . $_POST['latest'] . "'
                WHERE sno='" . $_GET['did'] . "'
                ";
        mysql_query($upd);
    }
}

?>
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 jumbotron">
            <center>
                <h1>Add Product</h1>
            </center>
            <table class="table">
                <?php
                /* Fetching the information of the product */
                $sel_product = "select * from product where sno='" . $_GET['did'] . "'";
                $exe_product = mysql_query($sel_product);
                $fetch_product = mysql_fetch_array($exe_product);
                ?>
                <form method="post" enctype="multipart/form-data">
                    <tr>
                        <td>Product Name </td>
                        <td><input class="form-control" type="text" name="name" placeholder="Product Name" value="<?php echo $fetch_product['name'] ?>"></td>
                    </tr>
                    <tr>
                        <td>category </td>
                        <td>
                            <select class="form-control" name="cat">
                                <?php
                                $sel = "Select name from cat";
                                $q = mysql_query($sel);
                                while ($fetch = mysql_fetch_array($q)) {
                                ?>
                                    <option <?php
                                            if ($fetch['name'] == $fetch_product['cat']) {
                                                echo "selected";
                                            }
                                            ?> value="<?php echo $fetch['name']; ?>"> <?php echo $fetch['name']; ?></option>
                                <?php } ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Sub-category </td>
                        <td>
                            <select class="form-control" name="subcat">
                                <?php
                                $sel = "Select name from subcat";
                                $q = mysql_query($sel);
                                while ($fetch = mysql_fetch_array($q)) {
                                ?>
                                    <option <?php
                                            if ($fetch['name'] == $fetch_product['subcat']) {
                                                echo "selected";
                                            }
                                            ?> value="<?php echo $fetch['name']; ?>"><?php echo $fetch['name']; ?></option>
                                <?php } ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Product Code </td>
                        <td><input class="form-control" type="text" name="code" placeholder="Product Code" value="<?php echo $fetch_product['procode'] ?>"></td>
                    </tr>
                    <tr>
                        <td>For</td>
                        <td>
                            <select class="form-control" name="for1">
                                <option <?php
                                        if ("all" == $fetch_product['fo']) {
                                            echo "selected";
                                        }
                                        ?> value="All">All</option>
                                <option <?php
                                        if ("Man" == $fetch_product['fo']) {
                                            echo "selected";
                                        }
                                        ?> value="Man">Man</option>
                                <option <?php
                                        if ("Woman" == $fetch_product['fo']) {
                                            echo "selected";
                                        }
                                        ?> value="Woman">Woman</option>
                                <option <?php
                                        if ("Kids" == $fetch_product['fo']) {
                                            echo "selected";
                                        }
                                        ?> value="Kids">Kids</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Mrp Price </td>
                        <td><input class="form-control" type="text" name="mrp" placeholder="MRP Price" value="<?php echo $fetch_product['mrp'] ?>"></td>
                    </tr>
                    <tr>
                        <td>Discounted Price </td>
                        <td><input class="form-control" type="text" name="dmrp" placeholder="Discounted Price" value="<?php echo $fetch_product['dismrp'] ?>"></td>
                    </tr>
                    <tr>
                        <td>Image 1</td>
                        <td>
                            <?php
                            if ($_GET['did'] != "") {
                            ?>
                                <img class="img-thumbnail" src="../images/product/<?php echo $fetch_product['i1'] ?>" src="" alt="">
                            <?php } ?>
                            <input class="form-control" type="file" name="im1">
                            <input type="hidden" name="update_image_1" value="../images/product/<?php echo $fetch_product['i1'] ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Image 2</td>
                        <td> <?php
                                if ($_GET['did'] != "") {
                                ?>
                                <img class=" img-thumbnail" src="../images/product/<?php echo $fetch_product['i2'] ?>" src="" alt="">
                            <?php } ?>
                            <input class="form-control" type="file" name="im2" value="../images/product/<?php echo $fetch_product['i2'] ?>">
                            <input type="hidden" name="update_image_2" value="../images/product/<?php echo $fetch_product['i2'] ?>">

                        </td>
                    </tr>
                    <tr>
                        <td>Image 3</td>
                        <td><?php
                            if ($_GET['did'] != "") {
                            ?>
                                <img class=" img-thumbnail" src="../images/product/<?php echo $fetch_product['i3'] ?>" src="" alt="">
                            <?php } ?>
                            <input class="form-control" type="file" name="im3" value="../images/product/<?php echo $fetch_product['i3'] ?>">
                            <input type="hidden" name="update_image_3" value="../images/product/<?php echo $fetch_product['i3'] ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Image 4</td>
                        <td>
                            <?php
                            if ($_GET['did'] != "") {
                            ?>
                                <img class=" img-thumbnail" src="../images/product/<?php echo $fetch_product['i4'] ?>" src="" alt="">
                            <?php } ?>
                            <input class="form-control" type="file" name="im4" value="../images/product/<?php echo $fetch_product['i4'] ?>">
                            <input type="hidden" name="update_image_4" value="../images/product/<?php echo $fetch_product['i4'] ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>About Product</td>
                        <td><input class=" form-control" type="text" name="about" placeholder="About Product" value="<?php echo $fetch_product['about'] ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>
                            Enable <input <?php
                                            if ($fetch_product['status'] == 1) {
                                                echo 'checked="checked"';
                                            }
                                            ?> type="radio" name="status">
                            Disable <input <?php
                                            if ($fetch_product['status'] == 0) {
                                                echo 'checked="checked"';
                                            }
                                            ?> name="status" value="" type="radio" name="status">
                        </td>
                    </tr>
                    <tr>
                        <td>Latest </td>
                        <td>
                            Enable <input <?php
                                            if ($fetch_product['lat'] == 1) {
                                                echo 'checked="checked"';
                                            }
                                            ?> type="radio" name="latest" value="1">
                            Disable <input <?php
                                            if ($fetch_product['lat'] == 0) {
                                                echo 'checked="checked"';
                                            }
                                            ?> type="radio" name="latest" value="0">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"><input class="form-control btn-primary" type="submit" value="Submit" name="submit"></td>
                    </tr>
                </form>
            </table>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
<?php include 'footer.php'; ?>