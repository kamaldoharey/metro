    <?php include 'header.php'; ?>
    <?php include 'sess.php'; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 jumbotron">
                <table class="table">
                    <?php
                    $sel = "select * from offer where sno='" . $_GET['did'] . "'";
                    $exe = mysql_query($sel);
                    $fetch = mysql_fetch_array($exe);

                    if ($_POST['submit'] == "Submit") {
                        $name = $_FILES['co3']['name'];
                        $tmp_name = $_FILES['co3']['tmp_name'];
                        $path = "../images/offer/" . $name;
                        move_uploaded_file($tmp_name, $path);
                        if ($_GET['did'] == "") {
                            $insert_offer =
                                "INSERT INTO offer(name, offerdec, image, status) VALUES ('" . $_POST['co1'] . "','" . $_POST['co2'] . "','" . $name . "','" . $_POST['co4'] . "')";
                            mysql_query($insert_offer);
                        } else {
                            $update_offer = "UPDATE offer SET name = '" . $_POST['co1'] . "',
                            offerdec = '" . $_POST['co2'] . "',
                            image = '" . $name . "',
                            status = '" . $_POST['co4'] . "',
                            where sno = '" . $_GET['did'] . "'";
                            mysql_query($update_offer);
                        }
                    }
                    ?>
                    <form method="post" enctype="multipart/form-data">
                        <center>
                            <h1>Add Offer</h1>
                        </center>
                        <tr>
                            <td>Offer Title</td>
                            <td><input class="form-control" placeholder="Offer Title" type="text" name="co1" value="<?php echo $fetch['name'] ?>"></td>
                        </tr>
                        <tr>
                            <td>Offer Description</td>
                            <td><input class="form-control" placeholder="Offer Description" type="text" name="co2" value="<?php echo $fetch['offerdec'] ?>"></td>
                        </tr>
                        <tr>
                            <td>Offer Image</td>
                            <td><input class="form-control" type="file" name="co3"></td>
                        </tr>
                        <tr>
                            <?php if ($_GET['did'] != "") {
                            ?>
                                <img class="img-thumbnail" src="../images/offer/<?php echo $fetch['image']; ?>" alt="error">
                            <?php }  ?>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td>
                                Enable <input <?php
                                                if ($fetch['status'] == 1) {
                                                    echo 'checked="checked"';
                                                }
                                                ?> type="radio" name="co4">
                                Disable <input <?php
                                                if ($fetch['status'] == 0) {
                                                    echo 'checked="checked"';
                                                }
                                                ?> value="0" type="radio" name="co3">
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: center;" colspan="2">
                                <input class="btn-primary form-control" type="submit" value="Submit" name="submit">
                            </td>
                        </tr>
                    </form>
                </table>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    <?php include 'footer.php'; ?>