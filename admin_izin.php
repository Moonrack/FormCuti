<?php include("db_conn.php"); ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />

  <title>Pengajuan Cuti</title>
</head>
<style>
  body {
    font-family: "Poppins", sans-serif;
  }
</style>

<body>

  <nav class="navbar shadow navbar-expand-lg navbar-dark sticky-top" style="background: white; padding-top: 2rem; margin-bottom: 3rem">
    <div id="navdone" style="margin-left: 4rem; height: 90px">
      <a class="navbar-brand">
        <img src="Image/logo2.png" alt="" width="150" height="50" class="d-inline-block align-text-top" />
        <h3 style="font-family: 'Poppins', sans-serif; color: #646464">
          "We are exhaust maker number one in the world"
        </h3>
      </a>
    </div>
  </nav>

  <h3 class="container" style="text-align: center;">PENGAJUAN IZIN</h3>

  <!--IJIN-->
  <div class="container">


    <div class="card mt-3">
      <div class="card-header bg-success text-white">
        Pengajuan Izin
        <a href="logout.php"><button class="btn btn-danger float-right">Logout</button></a><br />
        <!-- untuk print -->

        <!--akhir print --->
      </div>
      <div class="card-body">
        <table class="table table-bordered table-striped">
          <tr>
            <th>No</th>
            <th>NIP</th>
            <th>Nama</th>
            <th>Tanggal Ijin</th>
            <th>Alasan</th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>
          <?php
          $sql = "SELECT * FROM ijin";
          $query = mysqli_query($conn, $sql);
          while ($data = mysqli_fetch_array($query)) :

          ?>
            <!-- open -->

            <!-- close -->
            <tr>
              <td><?= $data['id'] ?></td>
              <td><?= $data['nip'] ?></td>
              <td><?= $data['nama'] ?></td>
              <td><?= date('d-m-Y', strtotime($data['tgl'])) ?></td>
              <td><?= $data['alasan'] ?></td>
              <td><?= $data['status'] ?></td>
              <td>
                <a href="acc_ijin.php?id=<?= $data['id'] ?>" class="btn btn-warning"> Edit </a>
              </td>
            </tr>
          <?php endwhile;  ?>
        </table>
      </div>
    </div>
  </div>

  

  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->



</body>

</html>