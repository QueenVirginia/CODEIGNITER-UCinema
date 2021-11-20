<?php
require 'model/config.php';
include 'model/session.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title>U-CINEMA : Profile</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bellota&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #00184d;">
        <a class="navbar-brand text-white" href="home.php">Welcome, <?php echo $identifier; ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link text-white" href="home.php">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link active text-white" href="profil.php">Coder's Profile</a>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger text-white" data-toggle="modal" data-target="#staticBackdrop">
                    Logout
                </button>

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Logout</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="d-flex justify-content-center">
                                    <img src="img/logout.png" style="width: 35%;" />
                                </div>
                                <div class="d-flex justify-content-center" style="margin: 2%;">
                                    <h6>Are you sure want to logout ?</h6>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal" style="padding-left: 5%;padding-right: 5%;">No</button>
                                    <button type="button" class="btn btn-danger" style="padding-left: 5%;padding-right: 5%;"><a href="controller/logout.php" style="color: white;">Yes</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="container" style="margin-top: 5%;margin-left: 14%;">
        <div class="card shadow p-3 mb-5 bg-secondary rounded" style="width: 90%;">
            <div class="row">
                <div class="col-lg" style="margin-top: 3%;padding: 4%;color: white;">
                    <h1 class="display-4">Queen Virginia Jeanifer Tambayong</h4>
                        <h3>-------------------------------------</h3>
                        <h5>General Info</h5>
                        <table class="table table-borderless" style="width: 50%;color: white;">
                            <tbody>
                                <tr>
                                    <td>Nim</td>
                                    <td>00000029272</td>
                                </tr>
                                <tr>
                                    <td>Angkatan</td>
                                    <td>2018</td>
                                </tr>
                                <tr>
                                    <td>Kode Kelas</td>
                                    <td>AL</td>
                                </tr>
                            </tbody>
                        </table>
                </div>
                <div class="col-lg">
                    <img src="img/gambar.jpg" alt="gambar" class="rounded" style="width: 95%; margin-top: 15%;">
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>