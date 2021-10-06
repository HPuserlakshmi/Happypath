<!DOCTYPE html>
<html lang="zxx">

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

   <!-- Offcanval Overlay -->
   <div class="offcanvas-overlay"></div>
   <!-- Offcanval Overlay -->

   <!-- Wrapper -->
   <div class="wrapper">

    <!-- Header -->
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
							<a href="edit-profile.html"> <i class="icofont-ui-user"></i> <span class="link-title">Settings</span> </a>
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
                        <div class="form-element base-control mb-30"> 
                        <h2 class="font-50 mb-40">Settings</h2>
                        
                        <h3 class="font-50 mb-40">Notification Settings</h3>
                        <div class="d-flex align-items-center mb-4">
                           <div class="switch-wrap">
                             <!-- Switch -->
                              <label class="switch">
                                 <input type="checkbox" >
                                    <span class="control"></span>
                              </label>
                              <!-- End Switch -->
                                 </div>
                              <span>Send me email remainders</span>
                        </div>

                        <div class="d-flex align-items-center mb-40">
                           <div class="switch-wrap">
                             <!-- Switch -->
                              <label class="switch">
                                 <input type="checkbox" >
                                    <span class="control"></span>
                              </label>
                              <!-- End Switch -->
                                 </div>
                              <span>Send me SMS remainders</span>
                        </div>

                        <h3 class="font-50 mb-20">Connect to contacts</h3> 
                        <div class="d-flex align-items-center mb-4">
                           <div class="switch-wrap">
                             <!-- Switch -->
                              <label class="switch">
                                 <input type="checkbox" >
                                    <span class="control"></span>
                              </label>
                              <!-- End Switch -->
                                 </div>
                              <span>Connect to your google contact</span>
                        </div>

                        <div class="d-flex align-items-center mb-4">
                           <div class="switch-wrap">
                             <!-- Switch -->
                              <label class="switch">
                                 <input type="checkbox" >
                                    <span class="control"></span>
                              </label>
                              <!-- End Switch -->
                                 </div>
                              <span>Connect to your facebook contact</span>
                        </div>

                        <div class="d-flex align-items-center mb-40">
                           <div class="switch-wrap">
                             <!-- Switch -->
                              <label class="switch">
                                 <input type="checkbox" >
                                    <span class="control"></span>
                              </label>
                              <!-- End Switch -->
                                 </div>
                              <span>Connect to your icloud contact</span>
                        </div>
                        
                        <h3 class="font-50 mb-20">Update Password</h3>
                        <div class="form-group ">
                              <input type="url" id="facebook" class="theme-input-style" placeholder="Enter your email address">
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
      <footer class="footer">
      HappyPath © 2021 All Right Reserved
      </footer>
      <!-- End Footer -->
   </div>
   <!-- End wrapper -->

   <!-- ======= BEGIN GLOBAL MANDATORY SCRIPTS ======= -->
   <script src="public/assets/js/jquery.min.js"></script>
   <script src="public/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
   <script src="public/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
   <script src="public/assets/js/script.js"></script>
   <!-- ======= BEGIN GLOBAL MANDATORY SCRIPTS ======= -->

   <!-- ======= BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS ======= -->
   <script src="public/assets/plugins/apex/apexcharts.min.js"></script>
   <script src="public/assets/plugins/apex/custom-apexcharts.js"></script>
   <!-- ======= End BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS ======= -->
</body>

</html>