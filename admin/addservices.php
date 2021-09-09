<?php include'header.php'; ?>
<?php include'sess.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 jumbotron">
            <h1>Add Service</h1>
            <table class="table">
                <tr>
                    <td>Service Name </td>
                    <td><input class="form-control" placeholder="Service Name" type="text" name="" id=""></td>
                </tr>
                <tr>
                    <td>Service Description </td>
                    <td><textarea class="form-control" placeholder="Service Description" name="" id="" cols="20" rows="10"></textarea></td>
                </tr>
                <tr>
                    <td>Service Image </td>
                    <td><input class="form-control" type="file" name="" id=""></td>
                </tr>
                <tr>
                    <td>Status </td>
                    <td>
                        Enable<input type="radio" name="seradio" id=""> Disable
                        <input type="radio" name="seradio" id="">
                    </td>
                </tr>
                <tr>
                    <td style="text-align center;" colspan="2"><input class="btn-primary form-control" type="Submit" name="" id=""></td>
                </tr>
            </table>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
<?php include'footer.php'; ?>
