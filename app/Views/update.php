<?php

$link = mysqli_init();
mysqli_options($link, MYSQLI_OPT_LOCAL_INFILE, true);
mysqli_real_connect($link, 'koczur.blackscoter.dreamhost.com','sitp_db_user','7jzpy272!!','stayintouchplease_db');

$gid = $_GET["id"];

$fullname = $_POST["fullname"];
$reminderdate = $_POST["reminderdate"];
$remindme = $_POST["remindme"];
$occasion = $_POST["occasion"];
$repeatdate = $_POST["repeatdate"];
$repeattime = $_POST["repeattime"];


$sql = "UPDATE register SET fullname='".$fullname."',reminder_date='".$reminderdate."',remind_me='".$remindme."',occasion='".$occasion."',repeat_date='".$repeatdate."',repeat_time='".$repeattime."' WHERE id='".$gid."'";

if (mysqli_query($link, $sql)) {
                echo ("<script LANGUAGE='JavaScript'>window.alert('Data updated successfully!!');window.location.href='https://stayintouchplease.com/public/index.php/homepage';</script>");
            } else {
                echo ("<script LANGUAGE='JavaScript'>window.alert('Error updating data...');window.location.href='https://stayintouchplease.com/public/index.php/match-and-manage';</script>");
            }

$link->close();
?>