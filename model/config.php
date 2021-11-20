<?php
  ob_start();
  session_start();

  $timezone = date_default_timezone_set("Asia/Jakarta");
  $host = "localhost";
  $username = "root";
  $password = "";
  $dbname = "uts";
  $db = new mysqli($host, $username, $password, $dbname);

  if($db->connect_error) {
    die('Error connecting to the database!');
  }
  
  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
  $db->set_charset('utf8mb4');
?>