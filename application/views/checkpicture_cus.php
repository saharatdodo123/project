<?php foreach ($query as $item) { ?>
    <div class="container">
        <br>
        <div class="row">
            <center>
                <div class="alert alert-secondary" role="alert">
                    ตรวจสอบการส่งหลักฐาน
                </div>
            </center>
            <div class="col-6">
                <center>
                    <div class="alert alert-success" role="alert">
                        หลักฐาน
                    </div>
                    <img id="img" class="card-img-top" src="<?= base_url('img/' . $item->img3) ?>">
                </center>
            </div>
            <div class="col-6">
                <center>
                    <div class="alert alert-info" role="alert">
                        ยืนยันการสั่งมอบหลักฐาน
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                        <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                        </symbol>
                    </svg>
                    <div class="alert alert-warning d-flex align-items-center" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
                            <use xlink:href="#info-fill" />
                        </svg>
                        <div>
                            กรุณาตรวจสอบหลักฐานก่อน
                        </div>
                    </div>
                </center>
                <form action="checkingpicture_cus" method="post" enctype="multipart/form-data">
                    <input type="number" name="cm_id" value="<?php echo $item->cm_id ?>" hidden>
                    <input type="text" name="status" value="รอการชำระเงินงวดที่3" hidden>
                    <br>
                    <center>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            ยืนยัน
                        </button>
                        <a href="<?php echo site_url('Contract_Controller/history_checkpicture_cus') ?>" type="button" class="btn btn-primary">ย้อนกลับ</a>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">คุณต้องการยืนยันใช่หรือไม่</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="<?php echo base_url('img'); ?>/item.png" width="400" height="380">
                                        <br>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" name="submit" class="btn btn-success">ใช่</button>
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">ไม่ใช่</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </center>
                </form>
            </div>
        </div>
    </div>
<?php } ?>