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
        <div class="row">
        <h1>ชำระเงิน</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ชื่อธนาคาร</th>
                        <th scope="col">สาขา</th>
                        <th scope="col">ชื่อบัญชี</th>
                        <th scope="col">เลขที่บัญชี</th>
                    </tr>
                </thead>
                <?php foreach($query as $item) { ?>
                    <tbody>
                        <tr>
                            <td id="center"><?php echo $item->bank_name ?></td>
                            <td id="center"><?php echo $item->bank_branch ?></td>
                            <td id="center"><?php echo $item->account_name ?></td>
                            <td id="center"><?php echo $item->account_number ?></td>
                        </tr>
                    </tbody>
                <?php } ?>
            </table>
            <div class="col">
                <br>
                <h5 id="center">ยอดที่ต้องชำระ <?php echo number_format($item->service_rates/3); ?> บาท</h5>
                <h5 id="center">ตัวอย่างสลิปโอนเงิน</h5>
                <center>
                <img src="<?php echo base_url('img'); ?>/krungthai.png" width="492">
                </center>
            </div>
            <div class="col">
                <br><br>
                <h5 id="center">อัพโหลดรูปภาพ</h5><br>
                <form action="upload_file" method="post" enctype="multipart/form-data">
                    <input type="number" name="cm_id" value="<?php echo $item->cm_id ?>" hidden>
                    <input type="text" name="status" value="รอตรวจสอบการชำระเงิน" hidden>
                    <input type="file" class="form-control" name="img" id="img"><br>
                    <center>
                    <input type="submit" class="btn btn-primary" value="อัพโหลด">
                    </center>
                </form>
            </div>
        </div>
    </div>
</body>
</html>