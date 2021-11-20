<?php
  if(!isset($_SESSION['email'])) {
    header("location: login.php");
  }
  $user = explode("@", $_SESSION['email']);
  $identifier = $user[0];
?>
