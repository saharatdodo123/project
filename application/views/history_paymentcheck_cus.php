<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('public'); ?>/history.css">
</head>
<body>
    <div class="container">
        <a href="<?php echo site_url('Welcome/history')?>" type="button" class="btn btn-primary">รอช่างภาพยืนยัน</a>
        <a href="<?php echo site_url('Welcome/history_success_cus')?>" type="button" class="btn btn-primary">รอการชำระเงิน</a>
        <a href="<?php echo site_url('Welcome/history_paymentcheck_cus')?>" type="button" class="btn btn-primary">รอตรวจสอบการชำระเงิน</a>
        <a href="<?php echo site_url('Welcome/history_paymentsuccess_cus')?>" type="button" class="btn btn-primary">ชำระเงินแล้ว</a>
        <div class="card">
            <h1>รอตรวจสอบการชำระเงิน</h1>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ชื่อผู้รับจ้าง</th>
                                <th scope="col">ประเภทงาน</th>
                                <th scope="col">รูปแบบการจ้าง</th>
                                <th scope="col">วัน-เดือน-ปี</th>
                                <th scope="col">เวลา</th>
                                <th scope="col">ค่าบริการ</th>
                                <th scope="col">สถานะ</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($query as $item) { ?>
                                <?php if($item->status=='รอตรวจสอบการชำระเงิน'){ ?>
                                    <tr>
                                        <td id="center"><?php echo $item->ptg_firstname ?> <?php echo $item->ptg_lastname ?></td>
                                        <td id="center"><?php echo $item->type_of_work ?></td>
                                        <td id="center"><?php echo $item->form_of_employment ?></td>
                                        <td id="center"><?php echo $item->day_month_year ?></td>
                                        <td id="center"><?php echo $item->time ?> - <?php echo $item->to_time ?></td>
                                        <td id="right"><?php echo number_format($item->service_rates) ?> บาท</td>
                                        <td id="center"><?php echo $item->status ?></td>
                                    </tr>
                                <?php } else { ?>
                                <?php }; ?>
                            <?php } ?>
                        </tbody>
                    </table>
        </div>
    </div>
    <br>
</body>
</html>