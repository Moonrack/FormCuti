<?php
session_start();
if (!isset($_SESSION['username']) && !isset($_SESSION['id'])) {   ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
  </head>
  <style>
    body {
      font-family: "Poppins", sans-serif;
      background-image: url(Image/pt.jpg);
    }
  </style>

  <body>

    <!--Navbar-->
    <nav class="navbar shadow navbar-expand-lg navbar-dark sticky-top" style="background: white; padding-top:2rem; margin-bottom:6rem;">
      <div id="navdone" style="margin-left:4rem; height:90px;">
        <a class="navbar-brand">
          <img src="Image/logo2.png" alt="" width="150" height="50" class="d-inline-block align-text-top" />
          <h3 style="font-family:'Poppins', sans-serif; color:#646464">"We are exhaust maker number one in the world"</h3>
        </a>
      </div>
    </nav>
    <!--Navbar-->
    <div class="card container" style="
        
        width: 30rem;
        height: 30rem;
        background: #ffffff;
        box-shadow: 10px 10px 4px rgba(0, 0, 0, 0.4);
        border-radius: 8px;

        
      ">
      <div class="card-body">
      <img src="Image/logo2.png" alt="" srcset="" style="margin-left: 8.4rem; width: 160px; margin-bottom: 3rem; margin-top: 2rem;"   >
        <div class="container" style="font-family: 'Poppins', sans-serif; width: 20rem">
          <form action="php/check-login.php" method="post" class="login-email">
            <input type="username" class="form-control mb-4 text-center" style="font-weight: bold; color: black" name="username" placeholder="Username" required />
            <input type="password" class="form-control text-center mb-4" style="font-weight: bold" name="password" placeholder="PASSWORD" required />
            <select class="form-select mb-3 text-center" style="font-weight: bold" name="role" aria-label="Default select example">
              <option selected value="user">User</option>
              <option value="admin">Admin</option>
            </select>
        </div>

        <button class="btn btn-light " style="
            color: white;
            font-family: 'Poppins', sans-serif;
            font-weight: bold;
            margin-left:60px;
            background-color: #b34172;
            width: 18.7rem;
          " type="submit">
          LOGIN
        </button>
        </form>
        <p class="text-center mt-4" style="text-decoration: underline; color:white;">Lupa Password?</p>
      </div>
    </div>
    <p class="text-center mt-4" style="text-decoration: underline; color:white;">Belom Memiliki Akun?</p>
    <a href="#">
      <p class="text-center mt-1" style="text-decoration: underline; color:white; font-weight:bold;">Daftar</p>
    </a>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>

  </html>
<?php } else {
  header("Location: home.php");
} ?>