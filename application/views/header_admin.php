<!DOCTYPE html>
<html>

<head>
	<title>Photohrapher Gallery</title>
	<link rel="icon" href="<?php echo base_url('img'); ?>/icon.png" type="image/x-icon">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
	<link rel="stylesheet" href="<?php echo base_url('public'); ?>/home_ptg2.css">
</head>

<body>

	<div class="wrapper">
		<nav id="sidebar">
			<div class="sidebar-header">
				<center>
					<h3>PHOTOGRAPHER<br>GALLERY</h3>
				</center>
			</div>
			<center><br>
				<h5>สถานะ : ผู้ดูแลระบบ</h5><br>
			</center>
			<ul class="lisst-unstyled components">
				<li>
					<a href="<?php echo site_url('Admin_Controller/home_admin') ?>">โปรไฟล์</a>
				</li>
				<li>
					<a href="<?php echo site_url('Contract_Controller/history_paymentcheck_admin') ?>">ข้อมูลการชำระเงิน</a>
				</li>
				<li>
					<a href="<?php echo site_url('Admin_Controller/home_admin') ?>">เพิ่มผู้ดูแลระบบ</a>
				</li>
				<li>
					<a href="<?php echo site_url('Admin_Controller/logout') ?>">ออกจากระบบ</a>
				</li>
			</ul>
		</nav>

		<div id="content">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="container-fluid">
					<button type="button" id="sidebarCollapse" class="btn  btn-info">
						<i class="fas fa-align-left"></i>
						<span>Toggle Sidebar</span>
					</button>
				</div>
			</nav>
			<br><br>