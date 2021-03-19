<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('public'); ?>/history.css">
</head>
<body>
<a href="<?php echo site_url('Welcome/history_ptg')?>" type="button" class="btn btn-primary">รอการอนุมัติ</a>
<a href="<?php echo site_url('Welcome/history_success_ptg')?>" type="button" class="btn btn-primary">รอการชำระเงิน</a>
<a href="<?php echo site_url('Welcome/history_paymentcheck_ptg')?>" type="button" class="btn btn-primary">รอตรวจสอบการชำระเงิน</a>
<a href="<?php echo site_url('Welcome/history_paymentsuccess_ptg')?>" type="button" class="btn btn-primary">ชำระเงินแล้ว</a>
        <div class="card">
            <h1>รอตรวจสอบการชำระเงิน</h1>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ชื่อผู้จ้าง</th>
                                <th scope="col">ประเภทงาน</th>
                                <th scope="col">รูปแบบการจ้าง</th>
                                <th scope="col">วัน-เดือน-ปี</th>
                                <th scope="col">เวลา</th>
                                <th scope="col">ค่าบริการ</th>
                                <th scope="col">สถานะ</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <?php foreach($query as $item) { ?>
                            <?php if($item->status=='รอตรวจสอบการชำระเงิน'){ ?>
                        <tbody>
                            <tr>
                                <td id="center"><?php echo $item->cus_firstname ?> <?php echo $item->cus_lastname ?></td>
                                <td id="center"><?php echo $item->type_of_work ?></td>
                                <td id="center"><?php echo $item->form_of_employment ?></td></td>
                                <td id="center"><?php echo $item->day_month_year ?></td>
                                <td id="center"><?php echo $item->time ?> - <?php echo $item->to_time ?></td>
                                <td id="right"><?php echo number_format($item->service_rates) ?> บาท</td>
                                <td id="center"><?php echo $item->status ?></td>
                                <td id="center">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                ดูการชำระเงิน
                                </button></td>
                            </tr>
                        </tbody>
                            <?php
                            } else { ?>
                            <?php }; ?>
                        <?php } ?>
                    </table>
        </div>
    <br>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">สลิป</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <center>
        <img src="<?php echo base_url('img'); ?>/<?php echo $item->img ?>" width="300">
        </center>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
        <form action="success_payment" method="POST">
            <input type="number" name="cm_id" value="<?php echo $item->cm_id ?>" hidden>
            <input type="text" name="status" value="ชำระเงินแล้ว" hidden>
            <input class="btn btn-primary" type="submit" value="ตกลง">         
        </form>
      </div>
    </div>
  </div>
</div>
</body>
</html>