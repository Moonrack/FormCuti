<?php

include("db_conn.php");

if (!isset($_GET['id'])) {
    // kalau tidak ada id di query string
    header('Location: admin.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM cuti WHERE id=$id";
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
    <title>Formulir Edit data</title>
</head>

<body>
    <header>
        <h3>Formulir Edit data</h3>
    </header>

    <form action="edit.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $data['id'] ?>" />

            <p>

                <input type="hidden" name="nip" placeholder="nama lengkap" value="<?php echo $data['nip'] ?>" />
            </p>

            <p>

                <input type="hidden" name="nama" placeholder="nama lengkap" value="<?php echo $data['nama'] ?>" />
            </p>
            <p>

                <input type="hidden" name="mulai" value=<?php echo $data['mulai']; ?> placeholder="Masukkan Tangal Lahir" />
            </p>
            <p>

                <input type="hidden" name="akhir" value=<?php echo $data['akhir']; ?> placeholder="Masukkan Tangal Lahir" />
            </p>

            <p>

                <input type="hidden" name="alasan" placeholder="nama sekolah" value="<?php echo $data['alasan'] ?>" />
            </p>
            <p>
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
            </p>

        </fieldset>


    </form>

</body>

</html>