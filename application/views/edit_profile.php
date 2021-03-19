<?php
    $id = $this->session->userdata["ptg_id"] ;
?>
<?php foreach($query as $item) { ?>
<h1 align="center">แก้ไขข้อมูลส่วนตัว</h1><br>
<div class="container">
    <form action="editing_profile" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <input type="text" name="ptg_id" class="form-control" id="exampleFormControlInput1" value="<?php echo $id ?>" hidden>
        </div>
        <div class="input-group mb-3">
            <input type="file" class="form-control" id="inputGroupFile02" name="ptg_img">
            <label class="input-group-text" for="inputGroupFile02">กรุณาเพิ่มรูปภาพ.</label>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">ชื่อ</label>
            <input type="text" name="ptg_firstname" class="form-control" id="exampleFormControlInput1" value="<?php echo $item->ptg_firstname ?>">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">นามสกุล</label>
            <input type="text" name="ptg_lastname" class="form-control" id="exampleFormControlInput1" value="<?php echo $item->ptg_lastname ?>">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">ชื่อเล่น</label>
            <input type="text" name="ptg_nickname" class="form-control" id="exampleFormControlInput1" value="<?php echo $item->ptg_nickname ?>">
        </div>
        <div class="mb-3">
        <select class="form-select" id="inputGroupSelect01" name="sex" value="<?php echo $item->sex ?>">
            <option value="ชาย">ชาย</option>
            <option value="หญิง">หญิง</option>
        </select>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">อีเมล์</label>
            <input type="email" name="ptg_email" class="form-control" id="exampleFormControlInput1" value="<?php echo $item->ptg_email ?>">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">พาสเวิร์ด</label>
            <input type="password" name="ptg_password" class="form-control" id="exampleFormControlInput1" value="<?php echo $item->ptg_password ?>">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">เบอร์โทรศัพท์</label>
            <input type="number" name="ptg_phone" class="form-control" id="exampleFormControlInput1" value="<?php echo $item->ptg_phone ?>">
        </div>
        </div>
        <center>
            <button type="submit" class="btn btn-primary btn-lg" name="submit">ยืนยัน</button>
        </center>
    </from>
</div>
<?php } ?>