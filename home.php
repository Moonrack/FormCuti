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
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <style>
    body {
      font-family: "Poppins", sans-serif;
    }
  </style>

  <body>
    <div class="container">
      <div class="row">
        <div class="col">
          <div
            class="text-start"
            id="carouselExampleInterval"
            class="carousel slide"
            data-bs-ride="carousel"
            style="margin-left: 3rem"
          >
            <h1 style="margin-top: 5rem">SAKURA EVENT</h1>
            <br />
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="1900">
                <img src="Image/a.jpeg" style="width: 600px; height: 400px; border-radius: 5%" />
              </div>
              <div class="carousel-item" data-bs-interval="1900">
                <img src="Image/b.jpeg" style="width: 600px; height: 400px; border-radius: 5%" />
              </div>
              <div class="carousel-item" data-bs-interval="1900">
                <img src="Image/c.jpeg" style="width: 600px; height: 400px; border-radius: 5%" />
              </div>
              <div class="carousel-item" data-bs-interval="1900">
                <img src="Image/d.jpeg" style="width: 600px; height: 400px; border-radius: 5%" />
              </div>
              <div class="carousel-item" data-bs-interval="1900">
                <img src="Image/e.jpeg" style="width: 600px; height: 400px; border-radius: 5%" />
              </div>
              <div></div>
            </div>
            <br />
            <p class="col-md-15">
              "Liga sakura 2024 kembali digelar dengan tema bersatu menjalin asa dan persaudaraan
              dengan menjunjung sportifitas tinggi, pada event Liga sakura tahun ini menghadirkan
              banyak cabang olahraga yang tentunya menjadi event yang sangat meriah. Event ini di
              buka dan di gelar pada tgl 15 Mei dan di resmikan langsung oleh Presiden Direktur
              Mr.Hoshikawa Akira dan di ikuti oleh segenap karyawan/ karyawati PT Sakura Java
              Indonesia."
            </p>
          </div>
        </div>
        <div class="col"></div>
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
                : <?= $_SESSION['name'] ?>
              </p>
              <p class="card-text text-start">
                <i class="fa-solid fa-id-card"></i>
                : <?= $_SESSION['nip'] ?>
              </p>
              <p class="card-text text-start">
              <i class="fa-regular fa-file"></i>
                : <?= $_SESSION['hari'] ?> Hari
              </p>
              <a href="logout.php" class="btn button1">Logout</a>
            </div>
          </div>

          <div class="card">
            <h5 class="card-header text-center">Pengajuan Cuti</h5>
            <div class="card-body">
              <h5 class="card-title text-center">Kamu Dapat Mengajukan Cuti Disini</h5>
              <a href="cuti.php" class="button button1">Ajukan Cuti</a>
            </div>
          </div>

          <div class="card">
            <h5 class="card-header text-center">Pengajuan Ijin</h5>
            <div class="card-body">
              <h5 class="card-title text-center">Kamu Dapat Mengajukan Ijin Disini</h5>
              <a href="ijin.php" class="button button1">Ajukan Ijin</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    

    <!--SCRIPT-->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <script src="https://kit.fontawesome.com/4d7be0e95f.js" crossorigin="anonymous"></script>
    <!--SCRIPT-->

    <!--admin-->
    <!--admin-->
  </body>
</html>
<?php } else {
  header("Location: index.php");
} ?>
