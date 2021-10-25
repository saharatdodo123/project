<div class="container">
    <div class="row">
        <div class="col-4">

        </div>
        <div class="col-8">
            
        </div>
    </div>
    <a href="<?php echo site_url('Contract_Controller/history') ?>" type="button" class="btn btn-primary">รอช่างภาพยืนยัน</a>
    <a href="<?php echo site_url('Contract_Controller/history_success_cus') ?>" type="button" class="btn btn-primary">รอการชำระเงิน งวดที่ 1</a>
    <a href="<?php echo site_url('Contract_Controller/history_paymentcheck_cus') ?>" type="button" class="btn btn-primary">รอตรวจสอบการชำระเงิน</a>
    <a href="<?php echo site_url('Contract_Controller/history_paymentsuccess_cus') ?>" type="button" class="btn btn-primary">รอช่างภาพทำงาน</a>
    <a href="<?php echo site_url('Contract_Controller/history_success2_cus') ?>" type="button" class="btn btn-primary">รอการชำระเงิน งวดที่ 2</a>
    <a href="<?php echo site_url('Contract_Controller/history_paymentcheck2_cus') ?>" type="button" class="btn btn-primary">รอตรวจสอบการชำระเงิน งวดที่ 2</a>
    <a href="<?php echo site_url('Contract_Controller/history_checkpicture_cus') ?>" type="button" class="btn btn-primary">รอตรวจสอบหลักฐาน</a>
    <a href="<?php echo site_url('Contract_Controller/history_success3_cus') ?>" type="button" class="btn btn-primary">รอการชำระเงิน งวดที่ 3</a>
    <a href="<?php echo site_url('Contract_Controller/history_paymentcheck3_cus') ?>" type="button" class="btn btn-primary">รอตรวจสอบการชำระเงิน งวดที่ 3</a>
    <div class="card">
        <center>
            <div class="alert alert-dark" role="alert">
                <h3>รอช่างภาพยืนยัน</h3>
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
                    <?php if ($item->status == 'รอการอนุมัติ') { ?>
                        <tr>
                            <td id="center"><?php echo $item->ptg_firstname ?> <?php echo $item->ptg_lastname ?></td>
                            <td id="center"><?php echo $item->type_of_work ?></td>
                            <td id="center"><?php echo $item->form_of_employment ?></td>
                            </td>
                            <td id="center"><?php echo $item->day_month_year ?></td>
                            <td id="center"><?php echo $item->time ?> - <?php echo $item->to_time ?></td>
                            <td id="right"><?php echo number_format($item->service_rates) ?> บาท</td>
                            <td id="center"><?php echo $item->status ?></td>
                            <td id="center">
                                <form action="showcontracting" method="POST">
                                    <input type="text" name="cm_id" value="<?php echo $item->cm_id ?>" hidden>
                                    <input class="btn btn-info" type="submit" value="รายละเอียด">
                                </form>
                            </td>
                            <td id="center">
                                <form action="edit_contract" method="POST">
                                    <input type="text" name="cm_id" value="<?php echo $item->cm_id ?>" hidden>
                                    <input class="btn btn-warning" type="submit" value="แก้ไข">
                                </form>
                            </td>
                            <td id="center">
                                <form action="delete_contract" method="POST">
                                    <input type="text" name="cm_id" value="<?php echo $item->cm_id ?>" hidden>
                                    <!-- Button trigger modal -->
                                    <center>
                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            ยกเลิก
                                        </button>
                                    </center>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">คุณต้องยกเลิกสัญญาใช่หรือไม่</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <center>
                                                    <div class="modal-body">
                                                        <br>
                                                        <img src="<?php echo base_url('img'); ?>/Contract.jpg" width="450" height="400">
                                                        <br><br>
                                                    </div>
                                                </center>
                                                <div class="modal-footer">
                                                    <button type="submit" name="submit" class="btn btn-success">ใช่</button>
                                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">ไม่ใช่</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </td>
                        </tr>
                    <?php } else { ?>
                    <?php }; ?>
                <?php } ?>
            </tbody>
        </table>
        <br><br><br><br><br><br><br><br><br><br>
    </div>
</div>
<br>