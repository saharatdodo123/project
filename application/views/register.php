<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<br>
<div class="container-fluid">
    <div class="row">
    <div class="col-1">
    </div>
    <div class="col-5">
    <center>
    <br><br>
    <img src="<?php echo base_url('img'); ?>/register.jpg" width="700" height="500">
    </center>
    </div>
    <div class="col-5">
    <br><br>
    <center><h1>สมัครสมาชิก</h1></center>
    <hr size = "10">
    <form action="register_add" method="post">
    <div class="row">
    <div class="col-6 mb-3">
        <label for="exampleFormControlInput1" class="form-label">Firstname</label>
        <input type="text" name="cus_firstname" class="form-control" id="exampleFormControlInput1" required>
    </div>
    <div class="col-6 mb-3">
        <label for="exampleFormControlInput1" class="form-label">Lastname</label>
        <input type="text" name="cus_lastname" class="form-control" id="exampleFormControlInput1" required>
    </div>
    <div class="row">
    <div class="col-4 mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email</label>
        <input type="email" name="cus_email" class="form-control" id="exampleFormControlInput1" required>
    </div>
    <div class="col-4 mb-3">
        <label for="exampleFormControlInput1" class="form-label">Password</label>
        <input type="password" name="cus_password" class="form-control" id="exampleFormControlInput1" required>
    </div>
    <div class="col-4 mb-3">
        <label for="exampleFormControlInput1" class="form-label">Phone</label>
        <input type="number" name="cus_phone" class="form-control" id="exampleFormControlInput1" required>
    </div>
    </div>
    <div class="row">
    <h5>Address :</h5>
    <div class="col-4 mb-3">
        <label for="exampleFormControlInput1" class="form-label">House number</label>
        <input type="text" name="cus_house_number" class="form-control" id="exampleFormControlInput1" required>
    </div>
    <div class="col-8 mb-3">
        <label for="exampleFormControlInput1" class="form-label">Canton</label>
        <input type="text" name="cus_canton" class="form-control" id="exampleFormControlInput1" required>
    </div>
    </div>
    <div class="row">
    <div class="col-5 mb-3">
        <label for="exampleFormControlInput1" class="form-label">District</label>
        <input type="text" name="cus_district" class="form-control" id="exampleFormControlInput1" required>
    </div>
    <div class="col-5 mb-3">
        <label for="exampleFormControlInput1" class="form-label">Province</label>
        <input type="text" name="cus_province" class="form-control" id="exampleFormControlInput1" required>
    </div>
    <div class="col-2 mb-3">
        <label for="exampleFormControlInput1" class="form-label">Postal_code</label>
        <input type="number" name="cus_postal_code" class="form-control" id="exampleFormControlInput1" required>
    </div>
    </div>
        <hr size = "10">
        <center>
        <button type="submit" class="btn btn-primary btn-lg" name="submit">ยืนยัน</button>
        </center>
    </form>
    </div>
    </div>
    <div class="col-1">
    </div>
    </div>
    </div>
<br><br><br><br><br><br><br><br>
</body>
</html>