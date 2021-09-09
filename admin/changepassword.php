<?php include'header.php'; ?>
<?php include'sess.php'; ?>
<center>
    <h1>HOME</h1>
</center>
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div class="jumbotron">
            <table class="table">
                <form method="post">
                    <tr>
                        <td>Old Password</td>
                        <td><input class="form-control" placeholder="Old Password" type="text" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>Conform Password</td>
                        <td><input class="form-control" placeholder="Conform Password" type="text" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>New Password</td>
                        <td><input class="form-control" placeholder="New Password" type="text" name="" id=""></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input style="text-align: center;" class="form-control btn-primary" type="submit" value="Submit" name="" id=""></td>
                    </tr>
                </form>
            </table>
        </div>
    </div>
    <div class="col-md-3"></div>
</div>
<?php include'footer.php'; ?>
