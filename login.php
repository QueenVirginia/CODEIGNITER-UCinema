<?php
require 'model/config.php';

if (isset($_POST['login'])) {
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = md5($_POST['password']);

        if ($stmt = $db->prepare("SELECT * FROM employee WHERE email_employee = ? AND password = ?")) {
            $stmt->bind_param("ss", $email, $password);
            $stmt->execute();
            $stmt->store_result();
            $num_of_rows = $stmt->num_rows();

            if ($num_of_rows == 1) {
                $_SESSION['email'] = $email;
                header("location: home.php");
            } else {
                echo "Email / Password  Anda Salah!";
            }
        } else {
            echo "Tidak Bisa Melakukan Koneksi, Silahkan Coba Lagi!";
        }
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>U-CINEMA</title>
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
        <div class="card d-flex justify-content-center shadow-lg p-3 mb-5 bg-white rounded" style="width: 40%;margin-left: 30%;margin-top: 10%;">
            <form action='' method="POST" style="padding: 20px;">
                <h1 class="d-flex justify-content-center">U-Cinema</h1><br>
                <div class="form-group">
                    <label for="input email">
                        <h5>Email</h5>
                    </label>
                    <input type="email" class="form-control" id="Email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="input password">
                        <h5>Password</h5>
                    </label>
                    <input type="password" class="form-control" id="Password" name="password" required>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-warning" style="padding-left: 10%;padding-right: 10%;font-size: 130%;" name="login">Login</button>
                </div>
                <div class="d-flex justify-content-center">
                    <small>Don't have an account? <a href="register.php">Register Here</a></small>
                </div>
            </form>
        </div>
    </div>
</body>

</html>