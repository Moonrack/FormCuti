<?php

include("db_conn.php");

// cek apakah tombol daftar sudah diklik atau blum?
if (isset($_POST['simpan'])) {

    // ambil data dari formulir
    $id = $_POST['id'];
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $tgl = $_POST['tgl'];
    $alasan = $_POST['alasan'];
    $status = $_POST['status'];

    // buat query update
    $sql = "UPDATE ijin SET nip='$nip',nama='$nama', tgl='$tgl', alasan='$alasan', status='$status' WHERE id=$id";
    $query = mysqli_query($conn, $sql);

    // apakah query update berhasil?
    if ($query) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: admin_izin.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }
} else {
    die("Akses dilarang...");
}
