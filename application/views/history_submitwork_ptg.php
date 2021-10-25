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
                    <h3>รอส่งงาน</h3>
                </div>
            </center>
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
                    <?php foreach ($query as $item) { ?>
                        <?php if ($item->status == 'ชำระเงินงวดที่2แล้ว') { ?>
                            <tr>
                                <td id="center"><?php echo $item->cus_firstname ?> <?php echo $item->cus_lastname ?></td>
                                <td id="center"><?php echo $item->type_of_work ?></td>
                                <td id="center"><?php echo $item->form_of_employment ?></td>
                                <td id="center"><?php echo $item->day_month_year ?></td>
                                <td id="center"><?php echo $item->time ?> - <?php echo $item->to_time ?></td>
                                <td id="right"><?php echo number_format($item->service_rates) ?> บาท</td>
                                <td id="center"><?php echo $item->status ?></td>
                                <td id="center">
                                    <form action="<?php echo site_url('Photographer_Controller/submitwork') ?>" method="POST">
                                        <input type="text" name="cus_id" value="<?php echo $item->cs_id ?>" hidden>
                                        <input class="btn btn-info" type="submit" value="ส่งงาน">
                                    </form>
                                </td>
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