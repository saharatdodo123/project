<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('public'); ?>/showphotographer2.css">
</head>

<body>
    <br>
    <div class="container">
        <div class="alert alert-secondary" role="alert">
            <h1 align="center">อัตราค่าบริการ</h1>
        </div>
        <div class="row">
            <?php foreach ($query as $item) { ?>
                <div class="card" id="card" style="width: 27rem;">
                    <img id="img" class="card-img-top" src="<?= base_url('img/' . $item->pwr_img) ?>">
                    <div class="card-body">
                        <h4 class="card-title" style="color: #000; text-align:center;  margin-top:30px;"><?php echo $item->pwr_type ?></h4><br>
                        <p style="color: #000; text-align:center;" class="card-text">ครึ่งวัน <?php echo number_format($item->pwr_price_h); ?> บาท</p>
                        <p style="color: #000; text-align:center;" class="card-text">เต็มวัน <?php echo number_format($item->pwr_price); ?> บาท</p>
                        <br>
                    </div>
                </div>
            <?php } ?>
        </div>
        <br>
</body>

</html>