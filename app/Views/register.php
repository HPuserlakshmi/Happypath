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
    <div class="mn-vh-100 d-flex align-items-center">
        <div class="container">
            <!-- Card -->
            <div class="card justify-content-center auth-card">
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <h4 class="mb-5 font-20">Welcome To Happy Path</h4>

                        <form action="<?=base_url()?>/public/index.php/registerprocess" method="POST">
                            <div class="row">
                               

                                <div class="col-lg-12">
                                    <!-- Form Group -->
                                    <div class="form-group mb-20">
                                        <label for="u_name" class="mb-2 font-14 bold black">User Name</label>
                                        <input name="name" type="text" id="u_name" class="theme-input-style" placeholder="User Name">
                                    </div>
                                    <!-- End Form Group -->
                                </div>

                                <div class="col-lg-12">
                                    <!-- Form Group -->
                                    <div class="form-group mb-20">
                                        <label for="email" class="mb-2 font-14 bold black">Email Address</label>
                                        <input name="email" type="email" id="email" class="theme-input-style" placeholder="Email Address">
                                    </div>
                                    <!-- End Form Group -->
                                </div>

                                <div class="col-lg-6">
                                    <!-- Form Group -->
                                    <div class="form-group mb-20">
                                        <label for="password" class="mb-2 font-14 bold black">Password</label>
                                        <input name="password" type="password" id="password" class="theme-input-style" placeholder="Password">
                                    </div>
                                    <!-- End Form Group -->
                                </div>

                                <div class="col-lg-6">
                                    <!-- Form Group -->
                                    <div class="form-group mb-20">
                                        <label for="password" class="mb-2 font-14 bold black">Confirm Password</label>
                                        <input name="cpassword" type="password" id="password" class="theme-input-style" placeholder="Confirm Password">
                                    </div>
                                    <!-- End Form Group -->
                                </div>

                             
                            </div>

                            <div class="d-flex align-items-center pt-4">
                                <button type="submit" class="btn long mr-20">Register</button>
                                <span class="font-12 d-block"><a href="<?=base_url()?>/public/" class="bold">Log In</a>,If you already have an account.</span>
                            </div>
                        </form>
                    </div>                                    
                </div>
            </div>
            <!-- End Card -->
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