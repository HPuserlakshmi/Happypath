<!DOCTYPE html>
<html lang="en">

<head>
	<title>HappyPath</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link rel="shortcut icon" href="<?=base_url()?>/public/assets/img/favicon.png">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?=base_url()?>/public/assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url()?>/public/assets/fonts/icofont/icofont.min.css">
	<link rel="stylesheet" href="<?=base_url()?>/public/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.css">
	<link rel="stylesheet" href="<?=base_url()?>/public/assets/plugins/apex/apexcharts.css">
	<link rel="stylesheet" href="<?=base_url()?>/public/assets/css/style.css"> 
</head>

<body>
	<div class="offcanvas-overlay"></div>
	<div class="wrapper">
		<header class="header white-bg fixed-top d-flex align-content-center flex-wrap">
			<div class="logo"> <a href="index.html" class="default-logo"><img class="shadowlogo" src="<?=base_url()?>/public/assets/img/logo.png" alt=""></a> <a href="index.html" class="mobile-logo"><img src="<?=base_url()?>/public/assets/img/logo.png" alt=""></a> </div>
			<!-- Main Header -->
			<div class="main-header">
				<div class="container-fluid">
					<div class="row justify-content-between">
						<div class="col-3 col-lg-1 col-xl-4">
							<div class="main-header-left h-100 d-flex align-items-center">
								<div class="main-header-user">
									<a href="#" class="d-flex align-items-center" data-toggle="dropdown">
										<div class="user-profile d-xl-flex align-items-center d-none">
											<div class="user-info">
												<h4 class="user-name">XYZ</h4>
												<p class="user-email">xyz@gmail.com</p>
											</div>
										</div>
									</a>
								</div>
								<div class="main-header-menu d-block d-lg-none">
									<div class="header-toogle-menu"> <img src="assets/img/menu.png" alt=""> </div>
								</div>
							</div>
						</div>
						<div class="col-9 col-lg-11 col-xl-8">
							<div class="main-header-right d-flex justify-content-end">
								<ul class="nav">
									<li class="ml-0"></li>
									<li class="ml-0 d-none d-lg-flex"></li>
									<li class="d-none d-lg-flex">
										<div class="main-header-btn ml-md-1"> <a href="<?=base_url()?>/public/index.php/logout" class="btn">Log out</a> </div>
									</li>
									<li class="order-2 order-sm-0"></li>
									<li></li>
									<li></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- End Header -->
		<!-- Main Wrapper -->
		<div class="main-wrapper">
			<nav class="sidebar" data-trigger="scrollbar">
				<div class="sidebar-header d-none d-lg-block">
					<div class="sidebar-toogle-pin"> <i class="icofont-tack-pin"></i> </div>
				</div>
				<div class="sidebar-body">
					<ul class="nav">
						<li class="nav-category">Main</li>
						<li class="active">
							<a href="<?=base_url()?>/public/index.php/homepage"> <i class="icofont-pie-chart"></i> <span class="link-title">List of contacts</span> </a>
						</li>
						<li>
							<a href="<?=base_url()?>/public/index.php/match-and-manage"> <i class="icofont-ui-file"></i> <span class="link-title">Match and Manage Contact</span> </a>
						</li>
						<li>
							<a href="<?=base_url()?>/public/index.php/add-and-change"> <i class="icofont-contact-add"></i> <span class="link-title">Add and Change Remainders</span> </a>
						</li>
					</ul>
					<hr>
					<ul class="nav">
						<li>
							<a href="<?=base_url()?>/public/index.php/settings"> <i class="icofont-ui-user"></i> <span class="link-title">Settings</span> </a>
						</li>
					</ul>
				</div>
			</nav>
			<div class="main-content d-flex justify-content-center align-items-center">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12">
							<div class="form-element base-control mb-30">
								<div style="float: right;">
									<form action="" method="POST" enctype="multipart/form-data">
										<div class="form-group mb-4 col-md-12">
											<label for="" class="mb-2 black bold">Filter</label>
											<input type="text" name="post_title" class="theme-input-style" id="post_title" placeholder="Type in name here..."> </div>
									</form>
								</div>
								<h2 class="font-50 mb-4">Your Important People</h2>
								<div class="table-responsive">
									<?php

$link = mysqli_init();
mysqli_options($link, MYSQLI_OPT_LOCAL_INFILE, true);
mysqli_real_connect($link, 'koczur.blackscoter.dreamhost.com','sitp_db_user','7jzpy272!!','stayintouchplease_db');
                        $sql=  "SELECT * FROM register";
                        $result = mysqli_query($link,$sql);
                        ?>
										<table class="text-nowrap table-bordered dh-table">
											<thead>
												<tr>
													<th>SI No.</th>
													<th>Name</th>
													<th>Next remainder date</th>
													<th>Remind Me</th>
													<th>Remainder reason</th>
													<th>Repeat Date</th>
													<th>Actions</th>
												</tr>
											</thead>
											<tbody>
												<?php
                                    $counter=1;
                                    while( $row = mysqli_fetch_array( $result ) ) {
                                        echo'<tr>';
                                        echo'<td><span class="">'. $counter .'</span></td>';
                                        echo'<td><span class="">'.$row['fullname'].'</span></td>';
                                        echo'<td><span class="">'.$row['reminder_date'].'</span></td>';
                                        echo'<td><span class="">'.$row["remind_me"].'</span></td>';
                                        echo'<td><span class="">'.$row["occasion"].'</span></td>';
                                        echo'<td><span class="">'.$row["repeat_date"].'</span></td>';
                                        echo'<td><a href="https://stayintouchplease.com/public/index.php/edit?id='.$row["id"].'" class="details-btn">View Details <i class="icofont-arrow-right"></i></a></td>';
                                        echo'</tr>';  
                                        $counter++;    
                                    }
                                    ?>
											</tbody>
										</table>
										<?php mysqli_close($link); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer class="footer">HappyPath © 2021 All Right Reserved</footer>
	</div>
	<script src="<?=base_url()?>/public/assets/js/jquery.min.js"></script>
	<script src="<?=base_url()?>/public/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?=base_url()?>/public/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script src="<?=base_url()?>/public/assets/js/script.js"></script>
	<script src="<?=base_url()?>/public/assets/plugins/apex/apexcharts.min.js"></script>
	<script src="<?=base_url()?>/public/assets/plugins/apex/custom-apexcharts.js"></script>
</body>

</html>