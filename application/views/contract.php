<br><br>
<?php
    $id = $this->session->userdata["cus_id"] ;
?>
<?php  foreach($query as $item) { ?>
<div class="container">
    <div class="row">
        <h1 align="center">สัญญาจ้าง</h1>
    </div>
    <form action="./contracting" method="post">
        <div class="mb-3">
            <input type="text" name="ptg_id" class="form-control" id="exampleFormControlInput1" value="<?php echo $item->ptg_id ?>" hidden>
        </div>
        <div class="mb-3">
            <input type="text" name="cus_id" class="form-control" id="exampleFormControlInput1" value="<?php echo $id ?>" hidden>
        </div>
        <div class="row">
        <div class="col-5">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">ประเภทงาน</label>
            <select name="type_of_work" class="form-select" aria-label="Default select example">
                <option selected> - </option>
                <option value="สถาปัตยกรรม">สถาปัตยกรรม</option>
                <option value="อีเวนต์">อีเวนต์</option>
                <option value="รับปริญญา">รับปริญญา</option>
                <option value="บุคคล/แฟชั่น">บุคคล/แฟชั่น</option>
                <option value="สินค้า/อาหาร">สินค้า/อาหาร</option>
                <option value="งานแต่ง/พรีเวดดิ้ง">งานแต่ง/พรีเวดดิ้ง</option>
            </select>
        </div>
        </div>
        <div class="col-5">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">รูปแบบการจ้างงาน</label>
            <select name="form_of_employment" class="form-select" aria-label="Default select example">
                <option selected> - </option>
                <option value="ครึ่งวัน">ครึ่งวัน</option>
                <option value="1 วัน">1 วัน</option>
                <option value="2 วัน">2 วัน</option>
                <option value="3 วัน">3 วัน</option>
            </select>
        </div>
        </div>
        <div class="col-2">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">ค่าบริการ</label>
            <input type="number" name="service_rates" class="form-control" id="exampleFormControlInput1" required>
        </div>
        </div>
        </div>
        <h5>ที่อยู่/ที่นัดหมาย</h5>
        <div class="row">
        <div class="col-5">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">ณ</label>
            <input type="text" name="at" class="form-control" id="exampleFormControlInput1" required>
        </div>
        </div>
        <div class="col-2">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">บ้านเลขที่</label>
            <input type="text" name="house_number" class="form-control" id="exampleFormControlInput1" required>
        </div>
        </div>
        <div class="col-5">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">ตำบล</label>
            <input type="text" name="canton" class="form-control" id="exampleFormControlInput1" required>
        </div>
        </div>
        </div>
        <div class="row">
        <div class="col-6">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">อำเภอ</label>
            <input type="text" name="district" class="form-control" id="exampleFormControlInput1" required> 
        </div>
        </div>
        <div class="col-6">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">จังหวัด</label>
            <input type="text" name="province" class="form-control" id="exampleFormControlInput1" required>
        </div>
        </div>
        </div>
        <div class="row">
        <div class="col-6">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">วัน เดือน ปี</label>
            <input type="text" name="day_month_year" class="form-control" id="exampleFormControlInput1" placeholder="17 มกราคม 2564 หรือ 16 มกราคม 2564 - 18 มกราคม 2564" required>
        </div>
        </div>
        <div class="col-3">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">เวลา</label>
            <input type="text" name="time" class="form-control" id="exampleFormControlInput1" placeholder="09.00 น." required>
        </div>
        </div>
        <div class="col-3">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">ถึง</label>
            <input type="text" name="to_time" class="form-control" id="exampleFormControlInput1" placeholder="13.00 น." required>
        </div>
        <div class="mb-3">
            <input type="text" name="status" class="form-control" value="รอการอนุมัติ" hidden>
        </div>
        </div>
        </div>
        </div>
        <center>
            <button type="submit" class="btn btn-primary btn-lg" name="submit">ยืนยัน</button>
        </center>
    </from>
</div>
<br><br><br><br><br><br><br><br><br><br><br>
<?php } ?>