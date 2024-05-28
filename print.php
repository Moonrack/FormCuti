<?php
session_start();
include "db_conn.php";
?>
<?php
    $no = 1;
    $tampil = mysqli_query($conn, "SELECT * from cuti order by id desc");
    while ($data = mysqli_fetch_array($tampil)) {

    ?>
<!DOCTYPE html>
<html>

<head>
    <title>MEMBUAT CETAK PRINT LAPORAN DENGAN PHP - WWW.MALASNGODING.COM</title>
</head>

<body>

    <center>
        <h2>TUTORIAL CETAK PRINT LAPORAN DENGAN PHP</h2>
        <h4>CONTOH LAPORAN YANG DI PRINT - WWW.MALASNGODING.COM</h4>
    </center>

    <br />
    
    <p>
       Nama: <?= $data['nama'] ?>
    </p>
    <p>
        Nip: <?= $data['nip'] ?>
    </p>
    <p>
        Alasan: <?= $data['alasan'] ?>
    </p>
    <?php }?>

  <!-- <script>
        window.print();
    </script>-->

</body>

</html>
