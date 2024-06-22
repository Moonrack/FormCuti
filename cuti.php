<?php
session_start();
include "db_conn.php";
if (isset($_SESSION['username']) && isset($_SESSION['user_id'])) {
?>

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
          <img src="Image/logo2.png" alt="" width="150" height="50" class="align-text-top" />
          <h3 style="font-family: 'Poppins', sans-serif; color: #646464">
            "We are exhaust maker number one in the world"
          </h3>
        </a>
      </div>
    </nav>

    <div class="container">
      <div class="card mt-3">
        <div class="card-header bg-success text-white">
          Form Pengajuan Cuti

          <a href="logout.php"><button class="btn btn-danger float-right">Logout</button></a><br />
        </div>
        <div class="card-body">
          <form method="post" action="">

            <div class="form-group">
              <label>NPK</label>
              <input type="text" name="nip" class="form-control" value="<?= $_SESSION['nip'] ?>" placeholder="Masukkan NPK Anda" required />
            </div>
            <div class="form-group">
              <label>Nama</label>
              <input type="text" name="nama" class="form-control" value="<?= $_SESSION['name'] ?>" placeholder="Masukkan Nama Anda" required />
            </div>

            <div class="form-group">
              <label>Tanggal Mulai</label>
              <input type="date" name="mulai" class="form-control" placeholder="Input Tanggal Cuti Anda" required />
            </div>

            <div class="form-group">
              <label>Tanggal Akhir</label>
              <input type="date" name="akhir" class="form-control" placeholder="Input Tanggal Akhir Cuti Anda" required />
            </div>

            <div class="form-group">
              <label>Alasan</label>
              <input type="text" name="alasan" class="form-control" placeholder="Alasan Cuti Anda" required />
            </div>

            <div class="form-group">
              <input class="form-control" type="hidden" value="pending" name="status" />
            </div>

            <button type="submit" class="btn btn-success" name="Submit">Simpan</button>
          </form>
        </div>
      </div>

      <div class="card mt-3">
        <div class="card-header bg-success text-white">
          Hai,
          <?= $_SESSION['name'] ?>
          <!-- untuk print -->
          <!--akhir print --->
        </div>
        <div class="card-body">
          <table class="table table-bordered table-striped">
            <tr>
              <th>No</th>
              <th>NPK</th>
              <th>Nama</th>
              <th>Tanggal Mulai</th>
              <th>Tanggal Masuk</th>
              <th>Alasan</th>
              <th>Status</th>
              <th>Cetak</th>
            </tr>
            <?php
            $no = 1;
            $tampil = mysqli_query($conn, "SELECT * from cuti order by id desc");
            while ($data = mysqli_fetch_array($tampil)) :

            ?>

              <!-- open -->

              <!-- close -->
              <tr>
                <td><?= $no++; ?></td>
                <td><?= $data['nip'] ?></td>
                <td><?= $data['nama'] ?></td>
                <td><?= date('d-m-Y', strtotime($data['mulai'])) ?></td>
                <td><?= date('d-m-Y', strtotime($data['akhir'])) ?></td>
                <td><?= $data['alasan'] ?></td>
                <td><?= $data['status'] ?></td>
                <td><a href="print.php?hal=print&id=<?= $data['id'] ?>" class="btn btn-warning"> Print </a></td>
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

    <?php

    // Check If form submitted, insert form data into users table.
    if (isset($_POST['Submit'])) {
      $nip = $_POST['nip'];
      $nama = $_POST['nama'];
      $mulai = $_POST['mulai'];
      $akhir = $_POST['akhir'];
      $alasan = $_POST['alasan'];
      $status = $_POST['status'];

      // include database connection file
      include_once("db_conn.php");

      // Insert user data into table
      $result = mysqli_query($conn, "INSERT INTO cuti(nama,nip,mulai,akhir,alasan,status) VALUES('$nama','$nip', '$mulai','$akhir','$alasan','$status')");

      echo "<script>alert('Pengajuan Cuti Sedang di Ajukan!');document.location='cuti.php'</script>";
    }
    ?>
  </body>

  </html>
<?php } else {
  header("Location: cutiform.php");
} ?>