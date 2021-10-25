<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo base_url('public'); ?>/getphotographer.css">
  <link rel="stylesheet" href="<?php echo base_url('public'); ?>/history.css">
</head>

<body>
  <div class="container">
    <div class="alert alert-secondary" role="alert">
      <h1>ช่างภาพในระบบ</h1>
    </div>
    <table style="background: #cdcdcd;" class="table table-striped table-hover" id="users-list">
      <thead class="table-light">
        <tr>
          <th scope="col">รูปภาพ</th>
          <th scope="col">ชื่อ-นามสกุล</th>
          <th scope="col">คะแนน</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($photographer as $item) : ?>
          <tr>
            <td id="center"><img src="<?= base_url('img/' . $item->ptg_img) ?>" height="80" width="80" alt="Photographer Img"></td>
            <td id="center"><br><?= $item->ptg_firstname ?> <?= $item->ptg_lastname ?></td>
            <!-- Score -->
            <td id="center">
              <?php
              if ($item->ptg_score >= 30) { ?>
                <br><img src="<?php echo base_url('img'); ?>/icon.png" alt="">
              <?php
              } else { ?>
                <br><img src="<?php echo base_url('img'); ?>/icon1.png" alt="">
              <?php }; ?>

              <?php
              if ($item->ptg_score >= 60) { ?>
                <img src="<?php echo base_url('img'); ?>/icon.png" alt="">
              <?php
              } else { ?>
                <img src="<?php echo base_url('img'); ?>/icon1.png" alt="">
              <?php }; ?>

              <?php
              if ($item->ptg_score >= 90) { ?>
                <img src="<?php echo base_url('img'); ?>/icon.png" alt="">
              <?php
              } else { ?>
                <img src="<?php echo base_url('img'); ?>/icon1.png" alt="">
              <?php }; ?>

              <?php
              if ($item->ptg_score >= 120) { ?>
                <img src="<?php echo base_url('img'); ?>/icon.png" alt="">
              <?php
              } else { ?>
                <img src="<?php echo base_url('img'); ?>/icon1.png" alt="">
              <?php }; ?>

              <?php
              if ($item->ptg_score >= 150) { ?>
                <img src="<?php echo base_url('img'); ?>/icon.png" alt="">
              <?php
              } else { ?>
                <img src="<?php echo base_url('img'); ?>/icon1.png" alt="">
              <?php }; ?>
            </td>
            <form action="./showphotographer_cus" method="POST">
              <td id="center">
                <input class="btn btn-info" type="text" name="ptg_id" value="<?php echo $item->ptg_id ?>" hidden><br>
                <input class="btn btn-light" type="submit" value="ดูรายละเอียด">
              </td>
            </form>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>


</body>

</html>