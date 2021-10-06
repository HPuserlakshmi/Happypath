<?php 

  $link = mysqli_init();
  mysqli_options($link, MYSQLI_OPT_LOCAL_INFILE, true);
  mysqli_real_connect($link, 'koczur.blackscoter.dreamhost.com','sitp_db_user','7jzpy272!!','stayintouchplease_db');
  $gid = $_GET["id"];
  $sql = "SELECT * FROM register where id='$gid'";
  $result = $link->query($sql);
  $row=mysqli_fetch_array($result, MYSQLI_ASSOC);

?>

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
	<link rel="stylesheet" href="<?=base_url()?>/public/assets/css/style.css"> </head>

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
										<div class="main-header-btn ml-md-1"> <a href="" class="btn">Log out</a> </div>
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
			<!-- Sidebar -->
			<nav class="sidebar" data-trigger="scrollbar">
				<!-- Sidebar Header -->
				<div class="sidebar-header d-none d-lg-block">
					<!-- Sidebar Toggle Pin Button -->
					<div class="sidebar-toogle-pin"> <i class="icofont-tack-pin"></i> </div>
					<!-- End Sidebar Toggle Pin Button -->
				</div>
				<!-- End Sidebar Header -->
				<!-- Sidebar Body -->
				<div class="sidebar-body">
					<!-- Nav -->
					<ul class="nav">
						<li class="nav-category">Main</li>
						<li>
							<a href="<?=base_url()?>/public/index.php/homepage"> <i class="icofont-pie-chart"></i> <span class="link-title">List of contacts</span> </a>
						</li>
						<li class="active">
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
					<!-- End Nav -->
				</div>
				<!-- End Sidebar Body -->
			</nav>
			<!-- End Sidebar -->
			<!-- Main Content -->
			<!-- Main Content -->
			<div class="main-content d-flex justify-content-center align-items-center">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12">
							<!-- Base Control -->
							<form action="<?=base_url()?>/public/index.php/update?id=<?php echo $gid; ?>" method="POST">
								<div class="form-element base-control mb-30">
									<h2 class="font-50 mb-40">Match and Manage Contact</h2>
									<!-- Form Group -->
									<div class="form-group mb-40">
										<label for="ImportantPerson" class="mb-2 black bold">Important Person</label>
										<input type="text" name="fullname" class="theme-input-style" id="" value="<?php echo $row['fullname'];?>" placeholder="Enter name...">
									</div>
									<!-- End Form Group -->
									<div class="row mb-40" style="text-align: center;">
										<div class="col-md-3"></div>
										<div class="col-md-3">
											<div class="form-group mb-4">
												<label for="exampleSelect1" class="mb-2 black bold d-block">Google contact</label>
												<div class="custom-select style--two">
													<select class="theme-input-style" id="year" name="year">
													</select>
												</div>
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group mb-4">
												<label for="exampleSelect1" class="mb-2 black bold d-block">Facebook contact</label>
												<div class="custom-select style--two">
													<select class="theme-input-style" id="exampleSelect1">
														<option value="01">01</option>
														<option value="02">02</option>
														<option value="03">03</option>
														<option value="04">04</option>
														<option value="05">05</option>
													</select>
												</div>
											</div>
										</div>
										<div class="col-md-3"></div>
									</div>
									<h5 class="font-20 mb-40">Add and change remainders</h5>
									<div class="row">
										<div class="col-md-6">
											<!-- Form Group -->
											<div class="form-group mb-4">
												<label for="" class="mb-2 black bold">Remainder date</label>
												<input type="date" name="reminderdate" class="theme-input-style" value="<?php echo $row['reminder_date'];?>" id="" placeholder=""> </div>
											<div class="form-group mb-4">
												<label for="" class="mb-2 black bold">Remind me</label>
												<select name="remindme" class="theme-input-style" id="exampleSelect1">
													<option value="<?php echo $row['remind_me'];?>" selected><?php echo $row['remind_me'];?></option>
                                                    							<option value="01">Day of..</option>
													<option value="02">02</option>
													<option value="03">03</option>
													<option value="04">04</option>
													<option value="05">05</option>
												</select>
											</div>
											<div class="form-group mb-4">
												<label for="" class="mb-2 black bold">What's the occasion?</label>
												<input type="text" name="occasion" value="<?php echo $row['occasion'];?>" class="theme-input-style" id="" placeholder=""> </div>
											<div class="form-group mb-4">
												<label for="" class="mb-2 black bold">Repeat?</label>
												<input type="date"  name="repeatdate" value="<?php echo $row['repeat_date'];?>" class="theme-input-style" id="" placeholder=""> </div>
											<div class="form-group mb-4">
												<!-- <label for="" class="mb-2 black bold">Remainder date</label> -->
												<input type="time" name="repeattime" value="<?php echo $row['repeat_time'];?>" class="theme-input-style" id="" placeholder=""> </div>
											<!-- End Form Group -->
										</div>
										<div class="button-group pt-1">
											<button type="submit" value="Publish Post" name="publish" class="btn long">Submit</button>
											<button type="submit" value="Publish Post" name="publish" class="btn long ml-2">Cancel</button>
											<a href="<?=base_url()?>/public/index.php/deleted?id=<?php echo $gid; ?>"<button type="reset" class="link-btn bg-transparent ml-3 soft-pink">Delete</button></a>
										</div>
									</div>
								</div>
								<!-- End Base Control -->
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- End Main Content -->
			<!-- End Main Content -->
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