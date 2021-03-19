<?php
    $id = $this->session->userdata["ptg_id"] ;
?>
<?php foreach($query as $item) { ?>
<h2 align="center">แก้ไขที่อยู่</h2>
<div class="container">
    <form action="editing_address" method="post">
        <div class="mb-3">
            <input type="text" name="pg_id" class="form-control" id="exampleFormControlInput1" value="<?php echo $id ?>" hidden>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">บ้านเลขที่</label>
            <input type="text" name="pg_house_number" class="form-control" id="exampleFormControlInput1" value="<?php echo $item->pg_house_number ?>">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">ตำบล</label>
            <input type="text" name="pg_canton" class="form-control" id="exampleFormControlInput1" value="<?php echo $item->pg_canton ?>">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">อำเภอ</label>
            <input type="text" name="pg_district" class="form-control" id="exampleFormControlInput1" value="<?php echo $item->pg_district ?>">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">จังหวัด</label>
            <input type="text" name="pg_province" class="form-control" id="exampleFormControlInput1" value="<?php echo $item->pg_province ?>">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">รหัสไปรษณีย์</label>
            <input type="number" name="pg_postal_code" class="form-control" id="exampleFormControlInput1" value="<?php echo $item->pg_postal_code ?>">
        </div>
        <center>
            <button type="submit" class="btn btn-primary btn-lg" name="submit">ยืนยัน</button>
        </center>
    </from>
</div>
<?php } ?>