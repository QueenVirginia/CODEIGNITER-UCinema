<?php
  include '../model/config.php';

  $id = $_GET['movie_id'];
  echo $id;
  $sql = "DELETE FROM movies WHERE movie_id = '$id'";
  mysqli_query($db, $sql);
  header("location: ../home.php");
?>