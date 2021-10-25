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
        <a href="<?php echo site_url('Contract_Controller/history_ptg') ?>" type="button" class="btn btn-primary">รอการอนุมัติ</a>
        <a href="<?php echo site_url('Contract_Controller/history_success_ptg') ?>" type="button" class="btn btn-primary">รอการชำระเงิน</a>
        <a href="<?php echo site_url('Contract_Controller/history_paymentcheck_ptg') ?>" type="button" class="btn btn-primary">รอตรวจสอบการชำระเงิน</a>
        <a href="<?php echo site_url('Contract_Controller/history_paymentsuccess_ptg') ?>" type="button" class="btn btn-primary">ชำระเงินแล้ว</a>
        <a href="<?php echo site_url('Contract_Controller/history_submitwork_ptg') ?>" type="button" class="btn btn-primary">รอส่งงาน</a>
        <a href="<?php echo site_url('Contract_Controller/history_checkpicture_ptg') ?>" type="button" class="btn btn-primary">รอตรวจสอบหลักฐาน</a>
        <div class="card">
            <center>
                <div class="alert alert-dark" role="alert">
                    <h3>รอการชำระเงิน งวดที่ 1</h3>
                </div>
            </center>
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
                <?php foreach ($query as $item) { ?>
                    <?php if ($item->status == 'รอการชำระเงินงวดที่1') { ?>
                        <tbody>
                            <tr>
                                <td id="center"><?php echo $item->cus_firstname ?> <?php echo $item->cus_lastname ?></td>
                                <td id="center"><?php echo $item->type_of_work ?></td>
                                <td id="center"><?php echo $item->form_of_employment ?></td>
                                </td>
                                <td id="center"><?php echo $item->day_month_year ?></td>
                                <td id="center"><?php echo $item->time ?> - <?php echo $item->to_time ?></td>
                                <td id="right"><?php echo number_format($item->service_rates) ?> บาท</td>
                                <td id="center"><?php echo $item->status ?></td>
                                <td id="center">
                            </tr>
                        </tbody>
                    <?php
                    } else { ?>
                    <?php }; ?>
                <?php } ?>
            </table>
        </div>
    </div>
    <br>
</body>

</html>