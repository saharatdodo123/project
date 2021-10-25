<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php foreach ($query as $item) { ?>
    <div class="container">
      <div class="row">
        <div class="col-3">

        </div>
        <div class="col-8">
          <div class="row gutters-sm">
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
                      <?php echo $item->name ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">นามสกุล</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $item->lastname ?>
                    </div>
                  </div>
                  <hr>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
  <?php } ?>
</body>

</html>