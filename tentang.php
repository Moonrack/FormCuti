<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="style.js">

  <title>Home</title>
</head>

<body>
  <!--NAVBAR-->

  <nav class="navbar navbar-expand-lg navbar-dark sticky-top shadow p-3 mb-5" style="background: #cfcfcf;">
    <div id="navdone" class="container">
      <a class="navbar-brand">
        <img src="Image/logo2.png" alt="" width="150" height="50" class="d-inline-block align-text-top">

      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto ">
          <li class="nav-item">
            <a class="nav-link  " style="color: #006f3c;" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active " style="color: #006f3c;" href="tentang.php">Tentang Kami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color: #006f3c;" href="kontak.php">Kontak</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color: #006f3c;" href="cutiform.php">Cuti</a>
        </ul>
      </div>
    </div>
  </nav>
  <!--NAVBAR-->

  <!--JUMBOTRON-->
  <div class="jumbotron jumbotron-fluid mb-4 text-center">
    <div class="container" id="home">
      <h1>Profile Perusahaan</h1>
      <img src="Image/data.png" style="margin-bottom: 2rem;" alt="">
      <h1>Grup Perusahaan Sakura Exhaust</h1>
      <br>
      <img src="Image/data2.PNG" style="margin-bottom: 2rem;" alt="">
      <h1>Overseas Group</h1>
      <br>
      <!--COROUSEL-->
      <div class="text-center" id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel" style="margin-left: 3rem">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="1900">
            <img src="Image/japan.png" d-block w-100 />
          </div>
          <div class="carousel-item" data-bs-interval="1900">
            <img src="Image/japan1.PNG" d-block w-100 />
          </div>
          <div class="carousel-item" data-bs-interval="1900">
            <img src="Image/japan2.PNG" d-block w-100 />
          </div>
          <div class="carousel-item" data-bs-interval="1900">
            <img src="Image/thai.png" />
          </div>
          <div class="carousel-item" data-bs-interval="1900">
            <img src="Image/thai1.PNG" />
          </div>
          <div class="carousel-item" data-bs-interval="1900">
            <img src="Image/thai2.PNG" />
          </div>
          <div class="carousel-item" data-bs-interval="1900">
            <img src="Image/vie.png" />
          </div>
          <div class="carousel-item" data-bs-interval="1900">
            <img src="Image/vie1.PNG" />
          </div>
          <div class="carousel-item" data-bs-interval="1900">
            <img src="Image/vie2.PNG" />
          </div>
          <div class="carousel-item" data-bs-interval="1900">
            <img src="Image/brazil.PNG" />
          </div>
          <div class="carousel-item" data-bs-interval="1900">
            <img src="Image/india.PNG" />
          </div>
          <div>
          </div>
        </div>
        <br>
        <!--COROUSEL-->

      </div>
    </div>
    <!--JUMBOTRON-->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>