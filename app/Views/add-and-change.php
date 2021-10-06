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
						<li>
							<a href="<?=base_url()?>/public/index.php/homepage"> <i class="icofont-pie-chart"></i> <span class="link-title">List of contacts</span> </a>
						</li>
						<li>
							<a href="<?=base_url()?>/public/index.php/match-and-manage"> <i class="icofont-ui-file"></i> <span class="link-title">Match and Manage Contact</span> </a>
						</li>
						<li class="active">
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
                        <!-- Base Control -->
                        <div class="form-element base-control mb-30"> 
                        <h2 class="font-50 mb-40">Add and change</h2> 
                        <!-- Form Group -->
                        <div class="form-group mb-40">
                            <label for="ImportantPerson" class="mb-2 black bold">Important Person</label>
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
                        <!-- End Form Group --> 

                        <h5 class="font-20 mb-40">Add and change remainders</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <!-- Form Group -->
                                <div class="form-group mb-4">
                                    <label for="" class="mb-2 black bold">Remainder date</label>
                                    <input type="date" class="theme-input-style" id="" placeholder="">
                                </div>
                                
                                <div class="form-group mb-4">
                                    <label for="" class="mb-2 black bold">Remind me</label>
                                    <select class="theme-input-style" id="exampleSelect1">
                                            <option value="01">Day of..</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                        </select>
                                </div>

                                <div class="form-group mb-4">
                                    <label for="" class="mb-2 black bold">What's the occasion?</label>
                                    <input type="" class="theme-input-style" id="" placeholder="">
                                </div>

                                <div class="form-group mb-4">
                                    <label for="" class="mb-2 black bold">Repeat?</label>
                                    <input type="date" class="theme-input-style" id="" placeholder="">
                                </div>

                                <div class="form-group mb-4">
                                    <!-- <label for="" class="mb-2 black bold">Remainder date</label> -->
                                    <input type="time" class="theme-input-style" id="" placeholder="">
                                </div>

                                <!-- End Form Group -->
                                

                            </div>
                            <div class="col-md-6">
                            <!-- <div class="todays-evnet">
                                <div class="bg-c2-light profile-widget-header">
                                    <h4 class="d-flex align-items-center">
                                    <img src="public/assets/img/svg/calender-color.svg" alt="" class="svg mr-3">
                                        Today's Events
                                    </h4>
                                </div>
                            </div> -->
                            <div class="todays-evnet">
                                            <div class="bg-c2-light profile-widget-header">
                                                <h4 class="d-flex align-items-center">
                                                    <img src="public/assets/img/svg/calender-color.svg" alt="" class="svg mr-3">
                                                    Current remainders
                                                </h4>
                                            </div>
                                            <div class="card">
                                                <ul class="list-unstyled">
                                                    <li class="border-bottom">
                                                        <h5>Ligula rhoncus euismod pretium</h5>
                                                        <div class="event-meta font-14 d-flex align-items-center">
                                                            <img src="public/assets/img/svg/watch2.svg" alt="" class="svg">
                                                            <span class="time d-inline-block ml-2">7.20pm</span>
                                                            <span class="date d-inline-block ml-2">12 October 2019</span>
                                                        </div>
                                                        <p class="mt-2">Duis porta, ligula rhoncus euismod pretium, nisi tellus eleifend odio, luctus viverra sem dolor id sem. Maecenas a venenatis enim, quis porttitor magna.</p>
                                                        <a href=""><b>Edit</b></a>
                                                    </li>
                                                    <li class="border-bottom">
                                                        <h5>Phasellus finibus enim nulla, quis ornare odio facilisiseu</h5>
                                                        <div class="event-meta font-14 d-flex align-items-center mb-3">
                                                            <img src="public/assets/img/svg/watch2.svg" alt="" class="svg">
                                                            <span class="time d-inline-block ml-2">7.20pm</span>
                                                            <span class="date d-inline-block ml-2">12 October 2019</span>
                                                        </div>
                                                        <a href=""><b>Edit</b></a>
                                                    </li>
                                                    <li class="border-bottom">
                                                        <h5>Aenean sed nibh a magna posuere tempor.</h5>
                                                        <div class="event-meta font-14 d-flex align-items-center mb-3">
                                                            <img src="public/assets/img/svg/watch2.svg" alt="" class="svg">
                                                            <span class="time d-inline-block ml-2">7.20pm</span>
                                                            <span class="date d-inline-block ml-2">12 October 2019</span>
                                                        </div>
                                                        <a href=""><b>Edit</b></a>
                                                    </li>
                                                    <li>
                                                        <h5>Aenean sed lorem ested quis neque ut nibh suscipit imperdiet</h5>
                                                        <div class="event-meta font-14 d-flex align-items-center mb-3">
                                                            <img src="public/assets/img/svg/watch2.svg" alt="" class="svg">
                                                            <span class="time d-inline-block ml-2">7.20pm</span>
                                                            <span class="date d-inline-block ml-2">12 October 2019</span>
                                                        </div>
                                                        <a href=""><b>Edit</b></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                            </div>

                            <div class="button-group pt-1">
                                    <button type="submit" value="Publish Post" name="publish" class="btn long">Submit</button>
                                    <button type="submit" value="Publish Post" name="publish" class="btn long ml-2">Cancel</button>
                                    <button type="reset" class="link-btn bg-transparent ml-3 soft-pink">Delete</button>
                                </div>

                        </div>

                        </div>
                        <!-- End Base Control --> 
                    </div>
                </div>
            </div>            
                    
         </div>
         <!-- End Main Content -->




         <!-- End Main Content -->
      </div>
      <!-- End Main Wrapper -->

      <!-- Footer -->
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