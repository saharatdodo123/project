<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-1">
            </div>
            <div class="col-6">
                <br>
                <img src="<?php echo base_url('img'); ?>/login_pg.jpg" width="550" height="500">
            </div>
            <div class="col-4">
                <br><br><br><br><br>
                <center>
                    <div class="alert alert-dark" role="alert">
                        <h4>เข้าสู่ระบบ</h4>
                    </div>
                </center>
                <br>
                <form action="logging_ptg_in" method="post">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">อีเมล์</label>
                        <input type="email" name="ptg_email" class="form-control" id="exampleFormControlInput1" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">พาสเวิร์ด</label>
                        <input type="password" name="ptg_password" class="form-control" id="exampleFormControlInput1" required>
                        <br>
                        <center>
                            <input type="submit" class="btn btn-secondary" name="login" value="ตกลง"></input>
                            <a href="<?php echo site_url('Photographer_Controller/register_ptg') ?>" type="button" class="btn btn-secondary">สมัครสมาชิก</a>
                        </center>
                <br>
                </form>
            </div>
            <div class="col-1">
            </div>
        </div>
    </div>
    <br><br>
</body>

</html>