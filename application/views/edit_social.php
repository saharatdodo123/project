<?php
    $id = $this->session->userdata["ptg_id"] ;
?>
<?php foreach($query as $item) { ?>
<h2 align="center">แก้ไขช่องทางการติดต่อ</h2>
<div class="container">
    <form action="editing_social" method="post">
        <div class="mb-3">
            <input type="text" name="pg_id" class="form-control" id="exampleFormControlInput1" value="<?php echo $id ?>" hidden>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Website</label>
            <input type="text" name="website" class="form-control" id="exampleFormControlInput1" value="<?php echo $item->website ?>">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Youtube</label>
            <input type="text" name="youtube" class="form-control" id="exampleFormControlInput1" value="<?php echo $item->youtube ?>">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Twitter</label>
            <input type="text" name="twitter" class="form-control" id="exampleFormControlInput1" value="<?php echo $item->twitter ?>">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Instagram</label>
            <input type="text" name="instagram" class="form-control" id="exampleFormControlInput1" value="<?php echo $item->instagram ?>">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Facebook</label>
            <input type="text" name="facebook" class="form-control" id="exampleFormControlInput1" value="<?php echo $item->facebook ?>">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Message</label>
            <input type="text" name="message" class="form-control" id="exampleFormControlInput1" value="<?php echo $item->message ?>">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">ความถนัด 1</label>
            <input type="text" name="favorite_job1" class="form-control" id="exampleFormControlInput1" value="<?php echo $item->favorite_job1 ?>">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">ความถนัด Job 2</label>
            <input type="text" name="favorite_job2" class="form-control" id="exampleFormControlInput1" value="<?php echo $item->favorite_job2 ?>">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">ความถนัด Job 3</label>
            <input type="text" name="favorite_job3" class="form-control" id="exampleFormControlInput1" value="<?php echo $item->favorite_job3 ?>">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">ความถนัด Job 4</label>
            <input type="text" name="favorite_job4" class="form-control" id="exampleFormControlInput1" value="<?php echo $item->favorite_job4 ?>">
        </div><div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">ความถนัด Job 5</label>
            <input type="text" name="favorite_job5" class="form-control" id="exampleFormControlInput1" value="<?php echo $item->favorite_job5 ?>">
        </div><div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">ความถนัด Job 6</label>
            <input type="text" name="favorite_job6" class="form-control" id="exampleFormControlInput1" value="<?php echo $item->favorite_job6 ?>">
        </div>
        </div>
        <center>
            <button type="submit" class="btn btn-primary btn-lg" name="submit">ยืนยัน</button>
        </center>
    </from>
</div>
<?php } ?>