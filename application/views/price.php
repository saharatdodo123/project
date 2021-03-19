<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('public'); ?>/showphotographer2.css">
</head>
<body>
<br><br>
<div class="container">
    <h1 align="center">อัตราค่าบริการ</h1>
    <br><br>
    <div class="row">
    <?php foreach($query as $item) { ?>
        <div class="card" id="card" style="width: 13rem;">
            <img id="img" class="card-img-top" src="<?= base_url('img/'.$item->pwr_img) ?>">
            <div class="card-body">
                <h5 align="center" class="card-title"><?php echo $item->pwr_type ?></h5><br>
                <p class="card-text">ครึ่งวัน <?php echo number_format($item->pwr_price_h); ?> บาท</p>
                <p class="card-text">เต็มวัน <?php echo number_format($item->pwr_price); ?> บาท</p>
            </div>
        </div>
    <?php } ?>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>