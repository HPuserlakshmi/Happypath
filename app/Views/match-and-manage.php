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
	<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
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
							<form action="<?=base_url()?>/public/index.php/dataprocess" method="POST">
								<div class="form-element base-control mb-30">
									<h2 class="font-50 mb-40">Match and Manage Contact</h2>
									<div class="row mb-40" style="text-align: center;">
										<div class="col-md-3">
											<!-- Form Group -->
											<div class="form-group mb-40">
												<label for="ImportantPerson" class="mb-2 black bold">Important Person</label>
												<input type="text" class="form-control form-control-user js-name" name="name"
                                            placeholder="Full Name" value="" >
											</div>
											<!-- End Form Group -->
										</div>
										<div class="col-md-3">

</div>
										<div class="col-md-3">
											<div class="form-group mb-4">
												<label for="exampleSelect1" class="mb-2 black bold d-block">Google contact</label>
												<div class="custom-select style--two">
													<select class="form-control form-control-user js-googlecontact" name="googlecontact">
                                      										<option value="" selected>-- Select --</option>
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
										
									</div>

									<h5 class="font-20 mb-40">Add and change remainders</h5>
									<div class="row">
										<div class="col-md-6">
											<!-- Form Group -->
												<!-- Form Group -->
											<div class="form-group mb-4">
												<label for="" class="mb-2 black bold">Reminder Date</label>
												<input type="date" name="reminderdate" class="theme-input-style" id="" placeholder="">
                                                
                                            </div>
                                           
											<div class="form-group mb-4">
												<label for="" class="mb-2 black bold">Remind me X days before</label>
                                                <input type="number" name="remindme" class="theme-input-style" id="exampleSelect1" placeholder="Remind me X days before"> 
												
											</div>
											<div class="form-group mb-4">
												<label for="" class="mb-2 black bold">What's the occasion?</label>
												<input type="text" name="occasion" class="theme-input-style" id="" placeholder=""> 
                                            </div>
											<div class="form-group mb-4">
												<label for="" class="mb-2 black bold">Repeat reminder every X number of days</label>
												<input type="number"  name="repeatdate" class="theme-input-style" id="" placeholder="Repeat reminder every X number of days"> 
                                            </div>
											<div class="form-group mb-4">
												<label for="" class="mb-2 black bold">Reminder Time</label>
												<input type="time" name="repeattime" class="theme-input-style" id="" placeholder=""> 
                                            </div>
											<!-- End Form Group -->
											<!-- End Form Group -->
										</div>
										<div class="col-md-6">
											<div class="todays-evnet">
												<div class="bg-c2-light profile-widget-header">
													<h4 class="d-flex align-items-center">
														<img src="<?=base_url()?>/assets/img/svg/calender-color.svg" alt="" class="svg mr-3">
														Current remainders
													</h4> </div>
												
													<?php
                        $link = mysqli_init();
mysqli_options($link, MYSQLI_OPT_LOCAL_INFILE, true);
mysqli_real_connect($link, 'koczur.blackscoter.dreamhost.com','sitp_db_user','7jzpy272!!','stayintouchplease_db');
                        $sql=  "SELECT * FROM register";
                        $result = mysqli_query($link,$sql);
                        ?>
												<div class="card">
													<ul class="list-unstyled">
													<?php
                                    while( $row = mysqli_fetch_array( $result ) ) {
                                        echo'<tr>';
										echo'<td><li class="border-bottom">
										<h5>'.$row["occasion"].'</h5>
										<div class="event-meta font-14 d-flex align-items-center"> <img src="<?=base_url()?>/assets/img/svg/watch2.svg" alt="" class="svg"> <span class="time d-inline-block ml-2">'.$row["repeat_time"].'</span> <span class="date d-inline-block ml-2">'.$row['reminder_date'].'</span> </div>
										<a href="https://stayintouchplease.com/public/index.php/edit?id='.$row["id"].'"><b>Edit</b></a> </li></td>';
                                        echo'</tr>';   
                                    }
                                    ?>
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

 <!--Google APIs Data-->
    <script type="text/javascript">
	// Developed By: Binit Mishra.
	var clientId = '251428165980-oicqgg4nmfdbk725haqffie5r1g50fig.apps.googleusercontent.com';
	var apiKey = 'AIzaSyAleBqPMC6yV4vbQHfdtm2TuDEss6SE-o4';
	// var clientId = '251428165980-oicqgg4nmfdbk725haqffie5r1g50fig.apps.googleusercontent.com';
	// var apiKey = 'AIzaSyAleBqPMC6yV4vbQHfdtm2TuDEss6SE-o4';
	var scopes = 'https://www.googleapis.com/auth/contacts.readonly';
	var alldata = [];
	
	window.gapi_onload = function() {
	    gapi.client.setApiKey(apiKey);
		authorize();
		
	};

	async function authorize() {
		gapi.auth.authorize({
			client_id: clientId,
			scope: scopes,
			immediate: true
		}, handleAuthorization);
	}

	// Loads data from Google
	function handleAuthorization(authorizationResult) {
		if(authorizationResult && !authorizationResult.error) {
			$.get("https://www.google.com/m8/feeds/contacts/default/thin?alt=json&access_token=" + authorizationResult.access_token + "&max-results=500&v=3.0", function(response) {
				var entries = response.feed.entry;
				var contacts = [];
				for(var i = 0; i < entries.length; i++) {
					var contactEntry = entries[i];
					var contact = [];
					
					if(typeof(contactEntry.gd$name) != "undefined") {
						if(typeof(contactEntry.gd$name.gd$fullName) != "undefined") {
							if(typeof(contactEntry.gd$name.gd$fullName.$t) != "undefined") {
								contact['name'] = contactEntry.gd$name.gd$fullName.$t;
							}
						}
					}
					
					if(typeof(contactEntry['gd$phoneNumber']) != "undefined") {
						var phoneNumber = contactEntry['gd$phoneNumber'];
						for(var j = 0; j < phoneNumber.length; j++) {
							if(typeof(phoneNumber[j]['$t']) != "undefined") {
								var phone = phoneNumber[j]['$t'];
								contact['phone'] = phone;
							}
						}
					}
					
					if(typeof(contactEntry['gd$email']) != "undefined") {
						var emailAddresses = contactEntry['gd$email'];
						for(var j = 0; j < emailAddresses.length; j++) {
							if(typeof(emailAddresses[j]['address']) != "undefined") {
								var emailAddress = emailAddresses[j]['address'];
								contact['email'] = emailAddress;
							}
						}
					}
					contacts.push(contact);
				}
				alldata = contacts;
				populateSelect(alldata);
				// console.log(alldata);
			});
		}
	}

    var jSelectGoogleContact = $(".js-googlecontact");
    
    // Fills select with options based on Google Contacts data
	function populateSelect() {
		// THE JSON ARRAY.
		var birds = alldata;
		
		for (var i = 0; i < birds.length; i++) {
		    if (birds[i]['name'] == "" || birds[i]['email'] == ""
		    || birds[i]['name'] == undefined || birds[i]['email'] == undefined) 
		    {
		        continue;
		    }
		    var option = $("<option/>")
		        .val(birds[i]['name'])
		        .text(birds[i]['email'])
		        .data('name', birds[i]['name'])
		        .data('email', birds[i]['email']);
	        jSelectGoogleContact.append(option);
		}
	}
	
	// Change name when select with Google email is changed
	$('body').on('change', jSelectGoogleContact, function(el) {
	    var option_selected = $("option:selected", this);
	    $('.js-name').val(option_selected.data('name'));
	});
	</script>
	
	<script src="https://apis.google.com/js/client.js"></script>
	
	<!--Facebook Data-->
	<script>
	   // Loads Facebook data on page load
	    window.onload = function() {
            fbLoginuser();
        };
	
	   // Login to Facebook
	    function fbLoginuser() {
	        FB.login((response) => {
                if (response.authResponse) {
                    getUserData();
                }
            }, {scope: 'email,public_profile,user_friends,user_birthday', return_scopes: true});
	    }
	
        function getUserData() {
            var fbdata;
            FB.api('/me/friends', {fields: 'name,id,location,birthday'}, (response) => {
                console.log(response);
                // var bday = response.birthday;
            });
        }
        
        window.fbAsyncInit = () => {
            //SDK loaded, initialize it
            FB.init({
                appId      : '249926457142811',
                xfbml      : true,
                version    : 'v2.2'
            });

            //check user session and refresh it
            FB.getLoginStatus((response) => {
                if (response.status === 'connected') {
                        getUserData();
                } else {
                        //user is not authorized
                }
            });
        };
        
        //load the JavaScript SDK
        ((d, s, id) => {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {return;}
            js = d.createElement(s); js.id = id;
            js.src = "https://connect.facebook.com/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        })(document, 'script', 'facebook-jssdk');

        //add event listener to login button
        document.getElementById('loginBtn').addEventListener('click', () => {
            //do the login
            
        }, false);
    </script>
</body>

</html>