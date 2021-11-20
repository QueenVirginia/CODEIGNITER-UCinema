<?php
  if(isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
    $sql = "SELECT * FROM employee WHERE email_employee = '$email' LIMIT 1";
    $user = mysqli_query($db, $sql);
    $user = mysqli_fetch_array($user);

    if($user['role'] == 1) {
      $_SESSION['role'] = 1;
    }
    else if ($user['role'] == 2) {
      $_SESSION['role'] = 2;
    }
    else {
      $_SESSION['role'] = 3;
    }
  }
?>