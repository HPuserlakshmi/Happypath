


<?php 

  $link = mysqli_init();
  mysqli_options($link, MYSQLI_OPT_LOCAL_INFILE, true);
  mysqli_real_connect($link, 'koczur.blackscoter.dreamhost.com','sitp_db_user','7jzpy272!!','stayintouchplease_db');
  $gid = $_GET["id"];
  $sql = "DELETE FROM register where id='$gid'";
  if(mysqli_query($link, $sql))
{
    echo ("<script LANGUAGE='JavaScript'>window.alert('Data deleted successfully!!');window.location.href='https://stayintouchplease.com/public/index.php/homepage';</script>");	
} else {
                echo ("<script LANGUAGE='JavaScript'>window.alert('Error deleting data...');window.location.href='https://stayintouchplease.com/public/index.php/match-and-manage';</script>");
            }

$link->close();

?>