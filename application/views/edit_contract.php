<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="container">
        <h1 align="center">แก้ไขสัญญา</h1>
        <?php foreach($query as $item) { ?>
            <form action="editing_contract" method="post">
                <div class="mb-3">
                    <input type="text" name="cm_id" class="form-control" id="exampleFormControlInput1" value="<?php echo $item->cm_id ?>" hidden>
                </div>
                <div class="row">
                    <div class="col-5 mb-3">
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
                    <div class="col-5 mb-3">
                        <label for="exampleFormControlInput1" class="form-label">รูปแบบการจ้าง</label>
                        <select name="form_of_employment" class="form-select" aria-label="Default select example">
                            <option selected> - </option>
                            <option value="ครึ่งวัน">ครึ่งวัน</option>
                            <option value="1 วัน">1 วัน</option>
                            <option value="2 วัน">2 วัน</option>
                            <option value="3 วัน">3 วัน</option>
                        </select>
                    </div>
                    <div class="col-2 mb-3">
                        <label for="exampleFormControlInput1" class="form-label">ค่าบริการ</label>
                        <input type="number" name="service_rates" class="form-control" id="exampleFormControlInput1" value="<?php echo $item->service_rates ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-2 mb-3">
                        <label for="exampleFormControlInput1" class="form-label">ณ</label>
                        <input type="text" name="at" class="form-control" id="exampleFormControlInput1" value="<?php echo $item->at ?>">
                    </div>
                    <div class="col-2 mb-3">
                        <label for="exampleFormControlInput1" class="form-label">บ้านเลขที่</label>
                        <input type="text" name="house_number" class="form-control" id="exampleFormControlInput1" value="<?php echo $item->house_number ?>">
                    </div>
                    <div class="col-4 mb-3">
                        <label for="exampleFormControlInput1" class="form-label">ตำบล</label>
                        <input type="text" name="canton" class="form-control" id="exampleFormControlInput1" value="<?php echo $item->canton ?>">
                    </div>
                    <div class="col-4 mb-3">
                        <label for="exampleFormControlInput1" class="form-label">อำเภอ</label>
                        <input type="text" name="district" class="form-control" id="exampleFormControlInput1" value="<?php echo $item->district ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="exampleFormControlInput1" class="form-label">จังหวัด</label>
                        <input type="text" name="province" class="form-control" id="exampleFormControlInput1" value="<?php echo $item->province ?>">
                    </div>
                    <div class="col mb-3">
                        <label for="exampleFormControlInput1" class="form-label">วัน/เดือน/ปี</label>
                        <input type="text" name="day_month_year" class="form-control" id="exampleFormControlInput1" value="<?php echo $item->day_month_year ?>">
                    </div>
                    <div class="col mb-3">
                        <label for="exampleFormControlInput1" class="form-label">เวลา</label>
                        <input type="text" name="time" class="form-control" id="exampleFormControlInput1" value="<?php echo $item->time ?>">
                    </div>
                    <div class="col mb-3">
                        <label for="exampleFormControlInput1" class="form-label">ถึง</label>
                        <input type="text" name="to_time" class="form-control" id="exampleFormControlInput1" value="<?php echo $item->to_time ?>">
                    </div>
                </div>
                <center>
                    <button type="submit" class="btn btn-primary btn-lg" name="submit">ยืนยัน</button>
                </center>
            </from>
        <?php } ?>
    </div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>