<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<br><br>
    <div class="container-fluid">
    <div class="row">
    <div class="col-1">
    </div>
    <div class="col-5">
    <center>
    <img src="<?php echo base_url('img'); ?>/login.gif" width="700" height="500">
    </center>
    </div>
    <div class="col-5">
    <br><br><br>
    <center><h1>เข้าสู่ระบบ</h1></center>
    <br><hr size = "10"><br>
    <form action="logging_in" method="post">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">อีเมล์</label>
        <input type="email" name="cus_email" class="form-control" id="exampleFormControlInput1" required>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">พาสเวิร์ด</label>
        <input type="password" name="cus_password" class="form-control" id="exampleFormControlInput1" required>
        <br><hr size = "10"><br>
        <center>
        <input type="submit" class="btn btn-primary btn-lg" name="login" value="ตกลง"></input>
        <a href="<?php echo site_url('Welcome/register')?>" class="btn btn-primary btn-lg">สมัครสมาชิก</a>
        </center>
    </form>
    </div>
    <div class="col-1">
    </div>
    </div>
    </div>
    </div>
<br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>