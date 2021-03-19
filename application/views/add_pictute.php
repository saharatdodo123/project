<br><br>
    <?php
        $id = $this->session->userdata["ptg_id"] ;
    ?>
    <h1 align="center">เพิ่มรูปภาพ</h1><br>
    <div class="container">
    <form action="adding_picture" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <input type="text" name="pg_id" class="form-control" id="exampleFormControlInput1" value="<?php echo $id ?>" hidden>
        </div>
        <div class="input-group mb-3">
            <input type="file" class="form-control" id="inputGroupFile02" name="img">
            <label class="input-group-text" for="inputGroupFile02">กรุณาเพิ่มรูปภาพ.</label>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">ชื่อรูปภาพ</label>
            <input type="text" name="name_img" class="form-control" id="exampleFormControlInput1" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">รายละเอียดรูปภาพ</label>
            <input type="text" name="detail_img" class="form-control" id="exampleFormControlInput1" required>
        </div>
        <center>
            <button type="submit" class="btn btn-primary btn-lg" name="submit">ยืนยัน</button>
        </center>
    </from>
</div>