<?php
session_start();
include "db_conn.php";
if (isset($_SESSION['username']) && isset($_SESSION['user_id'])) {   ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <style>
    .card {
      color: white;
      margin-top: 5rem;
      background-color: #008080;
      box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.4);
      opacity: 0.9;
      width: 300px;
      margin-left: 95px;
      border-radius: 10%;
    }

    .button {
      background-color: #ca4c8f;
      /* Green */
      border: none;
      color: white;
      padding: 8px 30px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin-top: 1rem;
      margin-left: 3rem;
      transition-duration: 0.4s;
      cursor: pointer;
      border-radius: 8px;
    }

    .button1 {
      background-color: #ca4c8f;
      /* Green */
      border: none;
      color: white;
      font-weight: 600;
      margin-bottom: 1rem;
    }

    .button:hover {
      background-color: #252525;
      /* Green */
      border: none;
      color: white;
    }
  </style>

  <body>


    <!--FIX CONTENT-->
    <div class="wrapper d-flex align-items-stretch">
      <nav id="sidebar">
        <div class="custom-menu">
          <button type="button" id="sidebarCollapse" class="btn btn-primary"></button>
        </div>
        <div class="img bg-wrap text-center py-4" style="background-image: url(Image/bg.jpeg)">
          <div class="user-logo">
            <div class="img" style="background-image: url(images/logo.jpg)"></div>
            <h3><?= $_SESSION['name'] ?></h3>
            <h3><?= $_SESSION['nip'] ?></h3>
          </div>
        </div>
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="#"><span class="fa fa-home mr-3"></span> Home</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-download mr-3 notif"><small class="d-flex align-items-center justify-content-center">5</small></span>
              Download</a>
          </li>
          <li>
            <a href="#"><span class="fa-solid fa-building mr-3"></span> Departemen</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-trophy mr-3"></span> Sakura Event</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-cog mr-3"></span> Settings</a>
          </li>
          
          <li>
            <a href="logout.php"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
          </li>
        </ul>
      </nav>

      <!--FIX CONTENT-->
      <div id="content" class="p-4 p-md-5 pt-5">
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="text-start" id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel" style="margin-left: 3rem">
                <h1 style="margin-top: 5rem">SAKURA EVENT</h1>
                <br />
                <div class="carousel-inner container">
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
                  <div>
                  </div>
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

            <div class="col mt-5">
              <div class="card">
                <h5 class="card-header text-center">Pengajuan Cuti</h5>
                <div class="card-body">
                  <h5 class="card-title text-center">Kamu Dapat Mengajukan Cuti Disini</h5>
                  <a href="cuti.php" style="margin-left: 3.5rem;" class="button button1">Ajukan Cuti</a>
                </div>
              </div>
              <div class="card" style="margin-top:7rem;">
                <h5 class="card-header text-center">Pengajuan Izin</h5>
                <div class="card-body">
                  <h5 class="card-title text-center">Kamu Dapat Mengajukan Izin Disini</h5>
                  <a href="ijin.php" style="margin-left: 3.5rem;" class="button button1">Ajukan Izin</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--FIX CONTENT-->
    </div>
    <!--FIX CONTENT-->


    <!--SCRIPT-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/4d7be0e95f.js" crossorigin="anonymous"></script>
    <!--SCRIPT-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!--admin-->
    <!--admin-->
  </body>

  </html>
<?php } else {
  header("Location: cutiform.php");
} ?>