<?php

include("db_conn.php");

if (!isset($_GET['id'])) {
    // kalau tidak ada id di query string
    header('Location: admin_izin.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM ijin WHERE id=$id";
$query = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if (mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="acc.css">

    <title>Formulir Edit data</title>
</head>

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
    <header>
    <h3 class="container" style="text-align: center;">PENGAJUAN IZIN</h3>
    </header>

    <form action="edit_ijin.php" method="POST">

    <div class="container">


    <div class="card mt-3">
      <div class="card-header bg-success text-white">
        PENERIMAAN IZIN

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
            <!-- open -->

            <!-- close -->
            <tr>
              <td><?= $data['id'] ?></td>
              <td><?= $data['nip'] ?></td>
              <td><?= $data['nama'] ?></td>
              <td><?= date('d-m-Y', strtotime($data['tgl'])) ?></td>
              <td><?= $data['alasan'] ?></td>
              <td><p>
                <label for="status"></label>
                <?php $status = $data['status']; ?>
                <select name="status">
                    <option <?php echo ($status == 'Pending') ? "selected" : "" ?>>Pending</option>
                    <option <?php echo ($status == 'Diterima') ? "selected" : "" ?>>Diterima</option>
                    <option <?php echo ($status == 'Ditolak') ? "selected" : "" ?>>Ditolak</option>
                </select>
            </p></td>
              <td>
              <input class="btn btn-warning" type="submit" value="Simpan" name="simpan" />
              </td>
            </tr>
            
        </table>
      </div>
    </div>
  </div>
  </div>

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $data['id'] ?>" />

            <p>

                <input type="hidden" name="nip" placeholder="nama lengkap" value="<?php echo $data['nip'] ?>" />
            </p>

            <p>

                <input type="hidden" name="nama" placeholder="nama lengkap" value="<?php echo $data['nama'] ?>" />
            </p>
            <p>

                <input type="hidden" name="tgl" value=<?php echo $data['tgl']; ?> placeholder="Masukkan Tangal Lahir" />
            </p>

            <p>

                <input type="hidden" name="alasan" placeholder="nama sekolah" value="<?php echo $data['alasan'] ?>" />
            </p>
            <!--<p>
                <label for="status">status: </label>
                <?php $status = $data['status']; ?>
                <select name="status">
                    <option <?php echo ($status == 'Pending') ? "selected" : "" ?>>Pending</option>
                    <option <?php echo ($status == 'Diterima') ? "selected" : "" ?>>Diterima</option>
                    <option <?php echo ($status == 'Ditolak') ? "selected" : "" ?>>Ditolak</option>
                </select>
            </p>
            <p>
                <input type="submit" value="Simpan" name="simpan" />
            </p>-->

        </fieldset>


    </form>

</body>

</html>