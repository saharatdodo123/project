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
    <div class="col-6">
    <br><br>
    <center>
    <img src="<?php echo base_url('img'); ?>/login_ptg.gif" width="364" height="645">
    <h3>ฉันอยากเป็นช่างภาพ</h3>
    <a href="<?php echo site_url('Welcome/register_ptg')?>" type="button" class="btn btn-primary">Go.</a>
    </center>
    </div>
    <div class="col-6">
    <br><br><br><br><br>
    <center><h1>เข้าสู่ระบบ</h1></center>
    <br><hr size = "10"><br>
    <form action="logging_ptg_in" method="post">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">อีเมล์</label>
        <input type="email" name="ptg_email" class="form-control" id="exampleFormControlInput1" required>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">พาสเวิร์ด</label>
        <input type="password" name="ptg_password" class="form-control" id="exampleFormControlInput1" required>
        <br><hr size = "10"><br>
        <center>
        <input type="submit" class="btn btn-primary btn-lg" name="login" value="ตกลง"></input>
        </center>
    </form>
    </div>
    </div>
    </div>
<br><br>
</body>
</html>