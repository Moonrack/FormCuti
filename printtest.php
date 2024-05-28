<?php
include "db_conn.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>MEMBUAT CETAK PRINT LAPORAN DENGAN PHP - WWW.MALASNGODING.COM</title>
</head>

<body>

    <center>
        <img src="Image/kop.png" alt="">
    </center>

    <br />

    <p>
    <?= $data['nama'] ?>
    </p>

    <p>
    <?= $data['nip'] ?></td>
    </p>

    <script>
        window.print();
    </script>

</body>

</html>
