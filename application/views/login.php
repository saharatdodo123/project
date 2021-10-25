    <div class="container">
        <div class="row">
            <div class="col-1">
            </div>
            <div class="col-6">
                <br>
                    <img src="<?php echo base_url('img'); ?>/login.jpg" width="550" height="500">
            </div>
            <div class="col-4">
                <br><br><br><br><br>
                <center>
                    <div class="alert alert-dark" role="alert">
                        <h4>เข้าสู่ระบบ</h4>
                    </div>
                </center>
                <br>
                <form action="logging_in" method="post">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">อีเมล์</label>
                        <input type="email" name="cus_email" class="form-control" id="exampleFormControlInput1" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">พาสเวิร์ด</label>
                        <input type="password" name="cus_password" class="form-control" id="exampleFormControlInput1" required>
                        <br>
                        <center>
                            <input type="submit" class="btn btn-secondary" name="login" value="ตกลง"></input>
                            <a href="<?php echo site_url('Customer_Controller/register') ?>" class="btn btn-secondary">สมัครสมาชิก</a>
                        </center>
                </form>
            </div>
            <div class="col-1">
            </div>
        </div>
    </div>
    </div>
    <br><br>
