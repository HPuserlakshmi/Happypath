<!DOCTYPE html>
<html lang="zxx">

<head>
   <!-- Page Title -->
   <title>HappyPath</title>

   <!-- Meta Data -->
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta http-equiv="content-type" content="text/html; charset=utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="">
   <meta name="keywords" content="">

   <!-- Favicon -->
   <link rel="shortcut icon" href="public/assets/img/favicon.png">

   <!-- Web Fonts -->
   <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&display=swap" rel="stylesheet">
   
   <!-- ======= BEGIN GLOBAL MANDATORY STYLES ======= -->
   <link rel="stylesheet" href="public/assets/bootstrap/css/bootstrap.min.css">
   <link rel="stylesheet" href="public/assets/fonts/icofont/icofont.min.css">
   <link rel="stylesheet" href="public/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.css">
   <!-- ======= END BEGIN GLOBAL MANDATORY STYLES ======= -->
   
   <!-- ======= BEGIN PAGE LEVEL PLUGINS STYLES ======= -->
   <link rel="stylesheet" href="public/assets/plugins/apex/apexcharts.css">
   <!-- ======= END BEGIN PAGE LEVEL PLUGINS STYLES ======= -->

   <!-- ======= MAIN STYLES ======= -->
   <link rel="stylesheet" href="public/assets/css/style.css">
   <!-- ======= END MAIN STYLES ======= -->

</head>

<body>

   <!-- Offcanval Overlay -->
   <div class="offcanvas-overlay"></div>
   <!-- Offcanval Overlay -->

   <!-- Wrapper -->
   <div class="wrapper">

    <!-- Header -->
    <header class="header white-bg fixed-top d-flex align-content-center flex-wrap">
         <!-- Logo -->
         <div class="logo">
            <a href="index.html" class="default-logo"><img class="shadowlogo" src="public/assets/img/logo.png" alt=""></a>
            <a href="index.html" class="mobile-logo"><img src="public/assets/img/mobile-logo.png" alt=""></a>
         </div>
         <!-- End Logo -->

         <!-- Main Header -->
         <div class="main-header">
            <div class="container-fluid">
               <div class="row justify-content-between">
                  <div class="col-3 col-lg-1 col-xl-4">
                     <!-- Header Left -->
                     <div class="main-header-left h-100 d-flex align-items-center">
                        <!-- Main Header User -->
                        <div class="main-header-user">
                           <a href="#" class="d-flex align-items-center" data-toggle="dropdown">
                              <!-- <div class="menu-icon">
                                 <span></span>
                                 <span></span>
                                 <span></span>
                              </div> -->

                              <div class="user-profile d-xl-flex align-items-center d-none">
                                 <!-- User Avatar -->
                                 <!-- <div class="user-avatar">
                                    <img src="assets/img/avatar/user.png" alt="">
                                 </div> -->
                                 <!-- End User Avatar -->

                                 <!-- User Info -->
                                 <div class="user-info">
                                    <h4 class="user-name">XYZ</h4>
                                    <p class="user-email">xyz@gmail.com</p>
                                 </div>
                                 <!-- End User Info -->
                              </div>
                           </a>
                           
                        </div>
                        <!-- End Main Header User -->

                        <!-- Main Header Menu -->
                        <div class="main-header-menu d-block d-lg-none">
                           <div class="header-toogle-menu">
                              <!-- <i class="icofont-navigation-menu"></i> -->
                              <img src="assets/img/menu.png" alt="">
                           </div>
                        </div>
                        <!-- End Main Header Menu -->
                     </div>
                     <!-- End Header Left -->
                  </div>
                  <div class="col-9 col-lg-11 col-xl-8">
                     <!-- Header Right -->
                     <div class="main-header-right d-flex justify-content-end">
                        <ul class="nav">
                           <li class="ml-0">
                              
                           </li>
                           <li class="ml-0 d-none d-lg-flex">
                              <!-- Main Header Print -->
                              <!-- <div class="main-header-print">
                                 <a href="#">
                                    <img src="assets/img/svg/print-icon.svg" alt="">
                                 </a>
                              </div> -->
                              <!-- End Main Header Print -->
                           </li>
                         
                           <li class="d-none d-lg-flex">
                              <!-- Main Header Button -->
                              <div class="main-header-btn ml-md-1">
                                 <a href="<?php echo base_url();?>login" class="btn">Log out</a>
                              </div>
                              <!-- End Main Header Button -->
                           </li>
                           <li class="order-2 order-sm-0">
                              <!-- Main Header Search -->
                              
                              <!-- End Main Header Search -->
                           </li>
                           <li>
                              <!-- Main Header Messages -->
                              
                              <!-- End Main Header Messages -->
                           </li>
                           <li>
                              <!-- Main Header Notification -->
                              
                              <!-- End Main Header Notification -->
                           </li>
                        </ul>
                     </div>
                     <!-- End Header Right -->
                  </div>
               </div>
            </div>
         </div>
         <!-- End Main Header -->
      </header>
      <!-- End Header -->

      <!-- Main Wrapper -->
      <div class="main-wrapper">
         <!-- Sidebar -->
         <nav class="sidebar" data-trigger="scrollbar">
            <!-- Sidebar Header -->
            <div class="sidebar-header d-none d-lg-block">
               <!-- Sidebar Toggle Pin Button -->
               <div class="sidebar-toogle-pin">
                  <i class="icofont-tack-pin"></i>
               </div>
               <!-- End Sidebar Toggle Pin Button -->
            </div>
            <!-- End Sidebar Header -->

            <!-- Sidebar Body -->
            <div class="sidebar-body">
               <!-- Nav -->
               <ul class="nav">
                  <li class="nav-category">Main</li>
                  <li class="active">
                     <a href="index.html">
                        <i class="icofont-pie-chart"></i>
                        <span class="link-title">List of contacts</span>
                     </a>
                  </li>
                  <li>
                     <a href="manage-post.html">
                     <i class="icofont-ui-file"></i>
                     <span class="link-title">Match and Manage Contact</span>
                  </a>
                  </li>
                  <li>
                     <a href="manage-topic.html">
                        <i class="icofont-contact-add"></i>
                        <span class="link-title">Add and Change Remainders</span>
                     </a>
                  </li>
                
                  </ul>
                  <hr>
                  
                  <ul class="nav">
                  <li>
                     <a href="edit-profile.html">
                     <i class="icofont-ui-user"></i>
                     <span class="link-title">Settings</span>
                  </a>
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
                        <h2 class="font-50 mb-40">Match and Manage Contact</h2> 
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