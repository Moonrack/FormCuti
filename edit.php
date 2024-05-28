<?php

include("db_conn.php");

// cek apakah tombol daftar sudah diklik atau blum?
if (isset($_POST['simpan'])) {

    // ambil data dari formulir
    $id = $_POST['id'];
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $mulai = $_POST['mulai'];
    $akhir = $_POST['akhir'];
    $alasan = $_POST['alasan'];
    $status = $_POST['status'];

    // buat query update
    $sql = "UPDATE cuti SET nip='$nip',nama='$nama', mulai='$mulai', akhir='$akhir', alasan='$alasan', status='$status' WHERE id=$id";
    $query = mysqli_query($conn, $sql);

    // apakah query update berhasil?
    if ($query) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: admin.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }
} else {
    die("Akses dilarang...");
}
