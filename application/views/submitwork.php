<div class="container">
<?php foreach ($query as $item) { ?>
<center>
    <div class="alert alert-dark" role="alert">
        <h3>ส่งมอบหลักฐานการส่งไฟล์งาน</h3>
    </div>
</center>
<div class="row">
    <div class="col-6">
        <center>
            <div class="alert alert-success" role="alert">
                ตัวอย่างหลักฐานการส่งผ่าน Google Dirve
            </div>
            <img src="<?php echo base_url('img'); ?>/submit.png" width="400" height="300">
        </center>
    </div>
    <div class="col-6">
        <center>
            <div class="alert alert-info" role="alert">
                ส่งมอบหลักฐาน
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                </symbol>
            </svg>
                <div class="alert alert-info d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
                        <use xlink:href="#info-fill" />
                    </svg>
                    <div>
                        &nbsp;E-Mail <?php echo $item->cus_email ?>
                    </div>
                </div>
            <br>
            <a href="https://www.google.co.th/drive/about.html" class="btn btn-outline-primary">ฉันต้องการส่งผ่าน Google Dirve</a>
            <a href="<?php echo $item->cus_fbprofile ?>" class="btn btn-primary">ฉันต้องการส่งผ่าน Facebook</a>

            <form action="<?php echo site_url('Contract_Controller/upload_file3') ?>" method="post" enctype="multipart/form-data">
                <input type="number" name="cm_id" value="<?php echo $item->cm_id ?>" hidden>
                <input type="text" name="status" value="ส่งมอบหลักฐานแล้ว" hidden>
                <br>
                <input type="file" class="form-control" name="img3" id="img3">
                <br>
                <center>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        ยืนยัน
                    </button>
                    <a href="<?php echo site_url('Contract_Controller/history_submitwork_ptg') ?>" type="button" class="btn btn-primary">ย้อนกลับ</a>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">คุณต้องการอัพโหลดหลักฐานใช่หรือไม่</h5>
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

        </center>
    </div>
</div>
<?php } ?>
</div>