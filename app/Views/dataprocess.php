<?php

            $link = mysqli_init();
            mysqli_options($link, MYSQLI_OPT_LOCAL_INFILE, true);
            mysqli_real_connect($link, 'koczur.blackscoter.dreamhost.com','sitp_db_user','7jzpy272!!','stayintouchplease_db');

            $fullname = $_POST["fullname"];
            $reminderdate = $_POST["reminderdate"];
            $remindme = $_POST["remindme"];
            $occasion = $_POST["occasion"];
            $repeatdate = $_POST["repeatdate"];
            $repeattime = $_POST["repeattime"];


            $sql = "INSERT INTO register(fullname, reminder_date, remind_me, occasion, repeat_date, repeat_time) VALUES ('".$fullname."','".$reminderdate."','".$remindme."','".$occasion."','".$repeatdate."','".$repeattime."')";

            if (mysqli_query($link, $sql)) {
                //echo ("<script LANGUAGE='JavaScript'>window.alert('Data added successfully!!');window.location.href='https://stayintouchplease.com/public/index.php/homepage';</script>");
		echo ("<script LANGUAGE='JavaScript'>window.alert('Data added successfully!!');window.location.href='https://stayintouchplease.com/public/email/mail.php?name=$fullname&occasion=$occasion&reminderdate=$reminderdate';</script>");
            } else {
                echo ("<script LANGUAGE='JavaScript'>window.alert('Username or Password is invalid');window.location.href='https://stayintouchplease.com/public/';</script>");
            }
            $link->close();
?>
