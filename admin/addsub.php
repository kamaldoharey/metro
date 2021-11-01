<?php include 'header.php'; ?>
<?php include 'sess.php'; ?>
<?php
$sel_sub_cat = "select * from subcat where sno='" . $_GET['did'] . "' ";
$exe_sub_cat = mysql_query($sel_sub_cat);
$fetch_sub_cat = mysql_fetch_array($exe_sub_cat);
?>
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 jumbotron">
            <?php
            // file upload code
            // sub_cat_img  is for file upload
            $name = $_FILES['sub_cat_img']['name'];
            $tmp_name = $_FILES['sub_cat_img']['tmp_name'];
            $path = "../iamges/sub cat/" . $name;
            move_uploaded_file($tmp_name, $path);
            // code end here
            if ($_POST['submit'] == "Submit") {
                if ($_GET['did'] == "") {
                    $ins_sc = "insert into subcat(cat,name,image,status) values('" . $_POST['obj'] . "','" . $_POST['sub_cat'] . "','" . $name . "','" . $_POST['subradio'] . "') ";
                    mysql_query($ins_sc);
                } else {
                    $ins_upd = "UPDATE subcat SET cat='" . $_POST['obj'] . "',name='" . $_POST['sub_cat'] . "',image='" . $name . "',status='" . $_POST['subradio'] . "' WHERE sno='" . $_GET['did'] . "' ";
                    mysql_query($ins_upd);
                }
            }
            ?>
            <center>
                <h1>Add Sub-Catagery</h1>
            </center>
            <form method="post" enctype="multipart/form-data">
                <table class="table">
                    <tr>
                        <td>category Title </td>
                        <td>
                            <select class="form-control" name="obj">
                                mysql_connect("localhost","root","");
                                <?php
                                mysql_select_db("kalpana");
                                $sel = "Select * from cat";
                                $q = mysql_query($sel);
                                while ($fetch = mysql_fetch_array($q)) {
                                ?>
                                    <option value="<?php echo $fetch['name']; ?>"><?php echo $fetch['name']; ?></option>
                                <?php } ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <?php if ($_GET['did'] != "") {
                        ?>
                            <img class="img-thumbnail" src="../images/sub cat/<?php echo $fetch_sub_cat['image']; ?>" alt="">
                        <?php }  ?>
                    </tr>
                    <tr>
                        <td>Sub category </td>
                        <td><input class="form-control" placeholder="Sub-Catagery" type="text" value="<?php echo $fetch_sub_cat['name'] ?>" name="sub_cat"></td>
                    </tr>
                    <tr>
                        <td>category Image </td>
                        <td><input class="form-control" type="file" name="sub_cat_img"></td>
                    </tr>
                    <tr>
                        <td>Status </td>
                        <td>
                            Enable <input type="radio" value="1" name="subradio">
                            Disable <input type="radio" value="0" name="subradio">
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align center;" colspan="2"><input class="btn-primary form-control" type="submit" name="submit" value="Submit"></td>
                    </tr>
                </table>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
<?php include 'footer.php'; ?>