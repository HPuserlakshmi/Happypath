<?php

            $link = mysqli_init();
            mysqli_options($link, MYSQLI_OPT_LOCAL_INFILE, true);
            mysqli_real_connect($link, 'koczur.blackscoter.dreamhost.com','sitp_db_user','7jzpy272!!','stayintouchplease_db');

            $fullname = $_POST["name"];
            $email = $_POST["email"];
            $password=md5($_POST['password']);


            $sql = "INSERT INTO admin(username, email, password) VALUES ('".$fullname."','".$email."','".$password."')";

            if (mysqli_query($link, $sql)) {
                echo ("<script LANGUAGE='JavaScript'>window.alert('Registration Successful!!');window.location.href='https://stayintouchplease.com/public/index.php/homepage';</script>");
            } else {
                echo ("<script LANGUAGE='JavaScript'>window.alert('Error');window.location.href='https://stayintouchplease.com/public/';</script>");
            }
            $link->close();
?>
