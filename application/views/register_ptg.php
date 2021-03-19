<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="container">
    <br><br>
    <center>
    <h2>สมัครเป็นช่างภาพ</h2><br>
    </center>
    <form action="register_ptg_add" method="post">
    <div class="input-group mb-3">
        <input type="text" class="form-control" id="inputGroupFile02" name="ptg_img" value="default.png" hidden>
    </div>
    <div class="row">
    <div class="col-6 mb-3">
        <label for="exampleFormControlInput1" class="form-label">ชื่อ</label>
        <input type="text" name="ptg_firstname" class="form-control" id="exampleFormControlInput1" required>
    </div>
    <div class="col-6 mb-3">
        <label for="exampleFormControlInput1" class="form-label">นามสกุล</label>
        <input type="text" name="ptg_lastname" class="form-control" id="exampleFormControlInput1" required>
    </div>
    </div>
    <div class="row">
    <div class="col-4 mb-3">
        <label for="exampleFormControlInput1" class="form-label">ชื่อเล่น</label>
        <input type="text" name="ptg_nickname" class="form-control" id="exampleFormControlInput1" required>
    </div>
    <div class="col-4 mb-3">
        <label for="exampleFormControlInput1" class="form-label">ชาย</label>
        <select class="form-select" id="inputGroupSelect01" name="sex" required>
            <option selected>Choose...</option>
            <option value="ชาย">ชาย</option>
            <option value="หญิง">หญิง</option>
        </select>
    </div>
    <div class="col-4 mb-3">
        <label for="exampleFormControlInput1" class="form-label">เบอร์โทรศัพท์</label>
        <input type="number" name="ptg_phone" class="form-control" id="exampleFormControlInput1" required>
    </div>
    </div>
    <div class="row">
    <div class="col-6 mb-3">
        <label for="exampleFormControlInput1" class="form-label">อีเมล์</label>
        <input type="email" name="ptg_email" class="form-control" id="exampleFormControlInput1" required>
    </div>
    <div class="col-6 mb-3">
        <label for="exampleFormControlInput1" class="form-label">พาสเวิร์ด</label>
        <input type="password" name="ptg_password" class="form-control" id="exampleFormControlInput1" required>
    </div>
    </div>
    <div class="row">
    <h5>ที่อยู่ :</h5>
    <div class="col-4 mb-3">
        <label for="exampleFormControlInput1" class="form-label">บ้านเลขที่</label>
        <input type="text" name="pg_house_number" class="form-control" id="exampleFormControlInput1" required>
    </div>
    <div class="col-8 mb-3">
        <label for="exampleFormControlInput1" class="form-label">ตำบล</label>
        <input type="text" name="pg_canton" class="form-control" id="exampleFormControlInput1" required>
    </div>
    </div>
    <div class="row">
    <div class="col-5 mb-3">
        <label for="exampleFormControlInput1" class="form-label">อำเภอ</label>
        <input type="text" name="pg_district" class="form-control" id="exampleFormControlInput1" required>
    </div>
    <div class="col-5 mb-3">
        <label for="exampleFormControlInput1" class="form-label">จังหวัด</label>
        <input type="text" name="pg_province" class="form-control" id="exampleFormControlInput1" required>
    </div>
    <div class="col-2 mb-3">
        <label for="exampleFormControlInput1" class="form-label">รหัสไปรษณีย์</label>
        <input type="number" name="pg_postal_code" class="form-control" id="exampleFormControlInput1" required>
    </div>
    </div>
    <div class="row">
    <h5>อุปกรณ์ :</h5>
    <div class="col-6 mb-3">
        <label for="exampleFormControlInput1" class="form-label">ยี่ห้อ</label>
        <input type="text" name="brand" class="form-control" id="exampleFormControlInput1" required>
    </div>
    <div class="col-6 mb-3">
        <label for="exampleFormControlInput1" class="form-label">เลนส์กล้อง</label>
        <input type="text" name="camera_lens" class="form-control" id="exampleFormControlInput1" required>
    </div>
    </div>
    <div class="row">
    <div class="col-3 mb-3">
        <label for="exampleFormControlInput1" class="form-label">ไฟสนาม</label>
        <select class="form-select" id="inputGroupSelect01" name="studio_light">
            <option value="มี">มี</option>
            <option value="ไม่มี">ไม่มี</option>
        </select>
    </div>
    <div class="col-3 mb-3">
        <label for="exampleFormControlInput1" class="form-label">ขาตั้งกล้อง</label>
        <select class="form-select" id="inputGroupSelect01" name="camera_tripod">
            <option value="มี">มี</option>
            <option value="ไม่มี">ไม่มี</option>
        </select>
    </div><div class="col-3 mb-3">
        <label for="exampleFormControlInput1" class="form-label">เมมโมรี่การ์ด</label>
        <select class="form-select" id="inputGroupSelect01" name="memory_card">
            <option value="มี">มี</option>
            <option value="ไม่มี">ไม่มี</option>
        </select>
    </div><div class="col-3 mb-3">
        <label for="exampleFormControlInput1" class="form-label">แบตเตอร์รี่สำรอง</label>
        <select class="form-select" id="inputGroupSelect01" name="battery">
            <option value="มี">มี</option>
            <option value="ไม่มี">ไม่มี</option>
        </select>
    </div>
    </div>
    <div class="row">
    <h5>การติดตามทางสังคม :</h5>
    <div class="col-6 mb-3">
        <label for="exampleFormControlInput1" class="form-label">Website</label>
        <input type="text" name="website" class="form-control" id="exampleFormControlInput1" required>
    </div>
    <div class="col-6 mb-3">
        <label for="exampleFormControlInput1" class="form-label">Youtube</label>
        <input type="text" name="youtube" class="form-control" id="exampleFormControlInput1" required>
    </div>
    </div>
    <div class="row">
    <div class="col-6 mb-3">
        <label for="exampleFormControlInput1" class="form-label">Twitter</label>
        <input type="text" name="twitter" class="form-control" id="exampleFormControlInput1" required>
    </div>
    <div class="col-6 mb-3">
        <label for="exampleFormControlInput1" class="form-label">Instagram</label>
        <input type="text" name="instagram" class="form-control" id="exampleFormControlInput1" required>
    </div>
    </div>
    <div class="row">
    <div class="col-6 mb-3">
        <label for="exampleFormControlInput1" class="form-label">Facebook</label>
        <input type="text" name="facebook" class="form-control" id="exampleFormControlInput1" required>
    </div>
    <div class="col-6 mb-3">
        <label for="exampleFormControlInput1" class="form-label">Message</label>
        <input type="text" name="message" class="form-control" id="exampleFormControlInput1" placeholder="https://www.facebook.com/messages/t/เลขไอดีเฟชบุ๊ค" required>
    </div>
    </div>
    <h5>ความถนัด :</h5><br>
    <div class="row">
    <div class="col form-check">
    <input class="form-check-input" type="checkbox" id="vehicle1" name="favorite_job1" value="สถาปัตยกรรม">
    <label for="vehicle1">สถาปัตยกรรม</label>
    </div>
    <div class="col form-check">
    <input class="form-check-input" type="checkbox" id="vehicle2" name="favorite_job2" value="อีเวนต์">
    <label for="vehicle2">อีเวนต์</label>
    </div>
    <div class="col form-check">
    <input class="form-check-input" type="checkbox" id="vehicle3" name="favorite_job3" value="รับปริญญา">
    <label for="vehicle3">รับปริญญา</label>
    </div>
    <div class="col form-check">
    <input class="form-check-input" type="checkbox" id="vehicle4" name="favorite_job4" value="บุคคล/แฟชั่น">
    <label for="vehicle4">บุคคล/แฟชั่น</label>
    </div>
    <div class="col form-check">
    <input class="form-check-input" type="checkbox" id="vehicle5" name="favorite_job5" value="สินค้า/อาหาร">
    <label for="vehicle5">สินค้า/อาหาร</label>
    </div>
    <div class="col form-check">
    <input class="form-check-input" type="checkbox" id="vehicle6" name="favorite_job6" value="งานแต่ง/พรีเวดดิ้ง">
    <label for="vehicle6">งานแต่ง/พรีเวดดิ้ง</label>
    </div>
    <div class="col-3"></div>
    </div><br>
    <h5>การเงิน :</h5><br>
    <div class="row">
    <div class="col-6 mb-3">
        <label for="exampleFormControlInput1" class="form-label">ชื่อธนาคาร</label>
        <input type="text" name="bank_name" class="form-control" id="exampleFormControlInput1" required>
    </div>
    <div class="col-6 mb-3">
        <label for="exampleFormControlInput1" class="form-label">สาขา</label>
        <input type="text" name="bank_branch" class="form-control" id="exampleFormControlInput1" required>
    </div>
    </div>
    <div class="row">
    <div class="col-6 mb-3">
        <label for="exampleFormControlInput1" class="form-label">ชื่อบัญชี</label>
        <input type="text" name="account_name" class="form-control" id="exampleFormControlInput1" required>
    </div>
    <div class="col-6 mb-3">
        <label for="exampleFormControlInput1" class="form-label">หมายเลขบัญชี</label>
        <input type="text" name="account_number" class="form-control" id="exampleFormControlInput1" placeholder="000-0-00000-0" required>
    </div>
    </div>
        <center>
        <button type="submit" class="btn btn-primary btn-lg" name="submit">ยืนยัน</button>
        </center>
    </form>
    </div>
    <br>
</body>
</html>