<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$link = mysqli_init();
mysqli_options($link, MYSQLI_OPT_LOCAL_INFILE, true);
mysqli_real_connect($link, 'koczur.blackscoter.dreamhost.com','sitp_db_user','7jzpy272!!','stayintouchplease_db');

$current_date = date("Y-m-d");
$current_hour = (int) date("H");

$result = mysqli_query($link, "SELECT * FROM register ORDER BY id DESC LIMIT 200");

if ($result) {
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        
        $time = trim($row['repeat_time']); // remove trailing spaces
        $time = str_replace(['.',','], '', $time); // remove dots
        $time = strtolower($time); // change all letters to lower case
        $time_ar = explode(':', $time); // convert to array
        $hour = (int) $time_ar[0];

	// echo $hour;
        
        // convert 12-hour format to 24-hour
        if (strpos($time, 'am') !== false) {
            if ($hour == 12) {
                $hour = 0;
            }   
        } else if (strpos($time, 'pm') !== false) {
            if ($hour != 12) {
                $hour += 12;
            }
        }
        
        $is_date = (trim($row['reminder_date']) == $current_date);
        $is_hour = ($hour == $current_hour);
        if ($is_date and $is_hour) {
            $email_address = "reminder@stayintouchplease.com";
            $email_subject = "Email Reminders";
            $email_body = "Hello - This is a reminder to reach out to '".$row['fullname']."'.
The occasion is '".$row['occasion']."' which occurs on '".$row['reminder_date']."'
Thank you.";
            mail($email_address,  $email_subject, $email_body);
            echo "SEND!";
        }
    }
}

//echo "SUCCESS";


?>