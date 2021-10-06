<?php

$link = mysqli_init();
mysqli_options($link, MYSQLI_OPT_LOCAL_INFILE, true);
mysqli_real_connect($link, 'koczur.blackscoter.dreamhost.com','sitp_db_user','7jzpy272!!','stayintouchplease_db');

	$email=$_POST['email'];
	$password=md5($_POST['password']);


	$query = mysqli_query($link,"select * from admin where password='$password' AND email='$email' ");
	$rows = mysqli_fetch_assoc($query);
	$num=mysqli_num_rows($query);
	if ($num == 1) {
        echo ("<script LANGUAGE='JavaScript'>window.alert('Login success!!');window.location.href='https://stayintouchplease.com/public/index.php/homepage';</script>");
	} 
	else 
	{
		echo ("<script LANGUAGE='JavaScript'>window.alert('Username or Password is invalid');window.location.href='https://stayintouchplease.com/public/';</script>");
	}
	mysqli_close($link); 
?>