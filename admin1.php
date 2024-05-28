<?php
session_start();
include "db_conn.php";
if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Homepage</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="admin.css">
    </head>
    <style>
        body {
            font-family: "Poppins", sans-serif;
        }

        .how-section1 {
            margin-top: -15%;
            padding: 10%;
        }

        .how-section1 h4 {
            color: #000000;
            font-weight: bold;
            font-size: 30px;
        }

        .how-section1 .row {
            margin-top: 10%;
        }

        .how-img {
            text-align: center;
        }

        .how-img img {
            width: 40%;
        }
    </style>

    <body>
        <?php if ($_SESSION['role'] == 'admin') { ?>
            <div class="container">
                <div class="row">
                    <div class="col-2">
                        <img class="img1" src="Image/book.png" alt="" />
                        <img class="img2" src="Image/worker.jpg" alt="" />
                    </div>

                    <div class="col">
                        <div class="card">
                            <h5 class="card-header text-center">Data Karyawan</h5>
                            <div class="card-body">
                                <p class="card-text text-start">
                                    <i class="fa-regular fa-user"></i>
                                    : <?= $_SESSION['role'] ?>
                                </p>
                                <p class="card-text text-start">
                                    <i class="fa-solid fa-id-card"></i>
                                    : <?= $_SESSION['nip'] ?>
                                </p>
                                <a href="logout.php" class="btn button1">Logout</a>
                            </div>
                        </div>

                        <div class="card">
                            <h5 class="card-header text-center">Perubahan Cuti Dan Ijin</h5>
                            <div class="card-body">
                                <h5 class="card-title text-center">Admin dapat menerima dan menolak cuti</h5>
                                <a href="admin.php" class="button button1">Perubahan Cuti dan Ijin</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <!--SCRIPT-->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
            <script src="https://kit.fontawesome.com/4d7be0e95f.js" crossorigin="anonymous"></script>
            <!--SCRIPT-->

            <!--admin-->
            <!--admin-->
        <?php } else { ?> <?php } ?>
    </body>

    </html>
<?php } else {
    header("Location: index.php");
} ?>