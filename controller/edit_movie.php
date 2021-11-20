<?php
  if(isset($_POST['edit_movie'])) {
    $id = $_POST['movie_id'];
    $title = $_POST['title'];
    $synopsis = $_POST['synopsis'];
    $date = $_POST['date'];
    $duration = $_POST['duration'];
    $for_query = '';

    if(!empty($_POST['genre'])) {
      foreach($_POST['genre'] as $genre) {
        $for_query .= $genre . ',';
      }
    }

    $for_query = substr($for_query, 0, -1);
    $sql = "UPDATE movies SET movie_id = '$id', poster = 'null', title = '$title', synopsis = '$synopsis', duration = '$duration', genre = '$for_query', release_date = '$date' WHERE movie_id = '$id'";
    mysqli_query($db, $sql);
    header("location: edit.php?movie_id=$id");

  }
?>