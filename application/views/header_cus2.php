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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="header-blue">
        <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
            <div class="container"><a class="navbar-brand" href="#"> <a href="<?php echo site_url('Customer_Controller/home_cus') ?>" class="navbar-brand"><img src="<?php echo base_url('img'); ?>/logo1.png"></a> </a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav">
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="<?php echo site_url('Customer_Controller/home_cus') ?>">หน้าแรก</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="<?php echo site_url('Payment_Controller/price_cus') ?>">อัตราค่าบริการ</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="<?php echo site_url('Contract_Controller/history') ?>">ประวัติการทำสัญญา</a></li>
                    </ul>
                    <form class="form-inline mr-auto" target="_self">
                        <div class="form-group"><label for="search-field"><i class="fa fa-search"></i></label><input class="form-control search-field" type="search" name="search" id="search-field"></div>
                    </form>
                    <li class="nav-item" style="list-style-type: none;" role="presentation"><a class="nav-link active action-button" href="<?php echo site_url('Customer_Controller') ?>">Log Out</a></li>
                </div>
            </div>
        </nav>
    </div>
</body>

</html>