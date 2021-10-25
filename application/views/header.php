<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photohrapher Gallery</title>
    <link rel="icon" href="<?php echo base_url('img'); ?>/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('public'); ?>/style_header.css">
</head>

<body>
    <div class="header-blue">
        <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
            <div class="container"><a class="navbar-brand" href="#"> <a href="<?php echo site_url('Customer_Controller/index') ?>" class="navbar-brand"><img src="<?php echo base_url('img'); ?>/logo1.png"></a> </a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav">
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="<?php echo site_url('Customer_Controller/index') ?>">หน้าแรก</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="<?php echo site_url('Payment_Controller/price') ?>">อัตราค่าบริการ</a></li>
                    </ul>
                    <form class="form-inline mr-auto" target="_self">
                        <div class="form-group"><label for="search-field"><i class="fa fa-search"></i></label><input class="form-control search-field" type="search" name="search" id="search-field"></div>
                    </form>
                    <li class="dropdown" style="list-style-type: none;"><a class="dropdown-toggle nav-link dropdown-toggle action-button" data-toggle="dropdown" aria-expanded="false" href="#">Log In</a>
                        <div class="dropdown-menu" role="menu">
                            <a class="dropdown-item" role="presentation" href="<?php echo site_url('Admin_Controller/login_admin') ?>">เข้าสู่ระบบ(แอดมิน)</a>
                            <a class="dropdown-item" role="presentation" href="<?php echo site_url('Photographer_Controller/login_ptg') ?>">เข้าสู่ระบบ(ช่างภาพ)</a>
                            <a class="dropdown-item" role="presentation" href="<?php echo site_url('Customer_Controller/login') ?>">เข้าสู่ระบบ(สมาชิก)</a>
                        </div>
                    </li>
                </div>
            </div>
        </nav>
    </div>
</body>
</html>