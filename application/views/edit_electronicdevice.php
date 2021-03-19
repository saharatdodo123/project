<?php
    $id = $this->session->userdata["ptg_id"] ;
?>
<?php foreach($query as $item) { ?>
<h1 align="center">แก้ไขรายชื่ออุปกรณ์</h1>
<div class="container">
    <form action="editing_electronicdevice" method="post">
        <div class="mb-3">
            <input type="text" name="pg_id" class="form-control" id="exampleFormControlInput1" value="<?php echo $id ?>" hidden>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">ยี่ห้อ</label>
            <input type="text" name="brand" class="form-control" id="exampleFormControlInput1" value="<?php echo $item->brand ?>">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">เลนส์กล้อง</label>
            <input type="text" name="camera_lens" class="form-control" id="exampleFormControlInput1" value="<?php echo $item->camera_lens ?>">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">ไฟสนาม</label>
            <input type="text" name="studio_light" class="form-control" id="exampleFormControlInput1" value="<?php echo $item->studio_light ?>">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">ขาตั้งกล้อง</label>
            <input type="text" name="camera_tripod" class="form-control" id="exampleFormControlInput1" value="<?php echo $item->camera_tripod ?>">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">เมมโมรี่การ์ด</label>
            <input type="text" name="memory_card" class="form-control" id="exampleFormControlInput1" value="<?php echo $item->memory_card ?>">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">แบตเตอร์รี่สำรอง</label>
            <input type="text" name="battery" class="form-control" id="exampleFormControlInput1" value="<?php echo $item->battery ?>">
        </div>
        </div>
        <center>
            <button type="submit" class="btn btn-primary btn-lg" name="submit">ยืนยัน</button>
        </center>
    </from>
</div>
<?php } ?>