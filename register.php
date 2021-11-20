<?php
require 'model/config.php';

$emailErr = "";
if (isset($_POST['register'])) {
    $email = $_POST['email'];
    $role = $_POST['role'];
    $password = md5($_POST['password']);
    $password1 = md5($_POST['password1']);

    if ($password != $password1) {
        echo 'Password tidak sama atau salah!';
        return;
    }

    $sql = "INSERT INTO employee VALUES ('$email', '$role', '$password')";
    mysqli_query($db, $sql);
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>U-CINEMA : Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body style="background-color: #00184d;">
    <div class="container">
        <div class="card d-flex justify-content-center shadow-lg p-3 mb-5 bg-white rounded" style="width: 40%;margin-left: 31%;margin-top: 5%;margin-bottom: 5%;">
            <form action='' method="POST" style="padding: 20px;">
                <h1 class="d-flex justify-content-center">Register</h1><br>
                <div class="form-group">
                    <label for="input email">
                        <h5>Email</h5>
                    </label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="select role">
                        <h5>Role</h5>
                    </label>
                    <select class="form-control" id="role" name="role">
                        <option value="1">Admin</option>
                        <option value="2">Manajer</option>
                        <option value="3">Kasir</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="input password">
                        <h5>Password</h5>
                    </label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="input password1">
                        <h5>Confirm Password</h5>
                    </label>
                    <input type="password" class="form-control" id="password1" name="password1" required>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-warning " style="padding-left: 10%;padding-right: 10%;font-size: 130%;" name="register">Register</button>
                </div>
                <div class="d-flex justify-content-center">
                    <small>Already have an account? <a href="login.php">Login Here</a></small>
                </div>
            </form>
        </div>
    </div>
</body>

</html>