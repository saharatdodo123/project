<div class="container-fluid">
<?php foreach($query as $item) { ?>
    <!-- /Breadcrumb -->
    <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="<?= base_url('img/'.$item->ptg_img) ?>" height="200" width="200" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">                  
                      <h4><?= $item->ptg_nickname ?></h4>
                      <p class="text-secondary mb-1">ความถนัด</p><hr>
                      <p class="text-muted font-size-sm" id='text-1' align="left">
                      - <?php echo $item->favorite_job1 ?><br>
                      - <?php echo $item->favorite_job2 ?><br>
                      - <?php echo $item->favorite_job3 ?><br>
                      - <?php echo $item->favorite_job4 ?><br>
                      - <?php echo $item->favorite_job5 ?><br>
                      - <?php echo $item->favorite_job6 ?>
                      </p>
                      <a href="<?php echo $item->message ?>" class="btn btn-outline-primary">ข้อความ</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mt-3">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg> Website </h6>
                    <span class="text-secondary"><?php echo $item->website ?></span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg viewBox="0 -61 512 512" xmlns="http://www.w3.org/2000/svg" width="24" height="24"><path d="m437 0h-362c-41.398438 0-75 33.601562-75 75v240c0 41.398438 33.601562 75 75 75h362c41.398438 0 75-33.601562 75-75v-240c0-41.398438-33.601562-75-75-75zm0 0" fill="#ff3939"/><path d="m512 75v240c0 41.398438-33.601562 75-75 75h-181v-390h181c41.398438 0 75 33.601562 75 75zm0 0" fill="#c90232"/><path d="m256 136.199219-75-41.699219v204l75-43.199219 105.601562-60.601562zm0 0" fill="#ececf1"/><path d="m361.601562 194.699219-105.601562 60.601562v-119.101562zm0 0" fill="#e2e2e7"/></svg> Youtube </h6>
                    <span class="text-secondary"><?php echo $item->youtube ?></span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg> Twitter </h6>
                    <span class="text-secondary"><?php echo $item->twitter ?></span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg> Instagram </h6>
                    <span class="text-secondary"><?php echo $item->instagram ?></span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg> Facebook </h6>
                    <span class="text-secondary"><?php echo $item->facebook ?></span>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-12">
                    <h3 align="center">ข้อมูลส่วนตัว</h3><br>
                    </div>
                    <div class="col-sm-3">
                      <h6 class="mb-0">ชื่อ</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $item->ptg_firstname ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">นามสกุล</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $item->ptg_lastname ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">เพศ</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $item->sex ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">อีเมล์</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $item->ptg_email ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">เบอร์โทรศัพท์</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $item->ptg_phone ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">จังหวัด</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $item->pg_province ?>
                    </div>
                  </div>
                  
                  <br>
                  <div class="row">
                    <div class="col-sm-12">
                    <h3 align="center">อุปกรณ์</h3><br>
                    </div>
                    <div class="col-sm-3">
                      <h6 class="mb-0">ยี่ห้อ</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <h6><?php echo $item->brand ?></h6>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">เลนส์กล้อง</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <h6><?php echo $item->camera_lens ?></h6>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">ไฟสนาม</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <h6><?php echo $item->studio_light ?></h6>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">ขาตั้งกล้อง</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <h6><?php echo $item->camera_tripod ?></h6>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">เมมโมรี่การ์ด</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <h6><?php echo $item->memory_card ?></h6>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">แบตเตอร์รี่สำรอง</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <h6><?php echo $item->battery ?></h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    <?php } ?>
    <div class="container">
    <h3 id="text">คลังรูปภาพ</h3>
      <div class="row">
      <?php foreach($query2 as $item2) { ?>
        <div class="card" id="card" style="width: 17rem;">
          <img id="img" src="<?= base_url('img/'.$item2->img) ?>" width="300" height="340" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?php echo $item2->name_img ?></h5>
            <p class="card-text"><?php echo $item2->detail_img ?></p>
          </div>
        </div>
      <?php } ?>
      </div>
    </div>
    </div>