<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo base_url('img'); ?>/icon.png" type="image/x-icon">
    <title>Photohrapher Gallery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>

<div class="container">
<nav class="navbar navbar-expand-md navbar-light bg-light">
    <a href="<?php echo site_url('Welcome/index')?>" class="navbar-brand"><img src="<?php echo base_url('img'); ?>/logo.png"></a>
    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
        <div class="navbar-nav">
            <a href="<?php echo site_url('Welcome/index')?>" class="nav-item nav-link">หน้าแรก</a>
            <a href="<?php echo site_url('Welcome/price')?>" class="nav-item nav-link">อัตราค่าบริการ</a>
        </div>
        <div class="navbar-nav">
            <a href="<?php echo site_url('Welcome/login_ptg')?>" class="nav-item nav-link">เข้าสู่ระบบ(ช่างภาพ)</a>
            <a href="<?php echo site_url('Welcome/login')?>" class="nav-item nav-link">เข้าสู่ระบบ(สมาชิก)</a>
        </div>
    </div>
</nav>
</div>