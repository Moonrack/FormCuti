<?php
include "db_conn.php";

// Check if ID is set in the URL
if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Ensure the ID is an integer

    // Prepare and bind
    $stmt = $conn->prepare("SELECT id, nama, nip, mulai, akhir, alasan, status FROM cuti WHERE id = ?");
    $stmt->bind_param("i", $id);

    // Execute the statement
    $stmt->execute();

    // Bind result variables
    $stmt->bind_result($userId, $nama, $nip, $mulai, $akhir, $alasan, $status);

    // Fetch value
    if ($stmt->fetch()) {
        $userFound = true;
    } else {
        $userFound = false;
    }

    // Close statement
    $stmt->close();
} else {
    $userFound = false;
}

// Close connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<style>
    p {
        font-size: larger !important;
        ;
    }
</style>

<head>
    <meta charset="UTF-8">
    <title>SURAT CUTI </title>

</head>

<body>
    <div class="user-details">
        <center>
            <img src="Image/kop.png" alt="">
        </center>
        <br>
        <center>
            <H2>PERMOHONAN CUTI DAN KETIDAKHADIRAN </H2>
        </center>
        <p>Yang bertanda tangan dibawah ini:</p>
        <br>
        <p>Kepada Yth:</p>
        <p>Bapak/Ibu HRD</p>
        <p>PT. Sakura Java Indonesia</p>
        <p>Di Tempat</p>
        <br>
        <p style="font-weight: bold;">Perihal: Permohonan Cuti Tahunan</p>
        <br>
        <p>Dengan Hormat,</p>
        <p>Saya yang bertanda tangan di bawah ini:</p>
        <!--FIX-->
        <?php if ($userFound) : ?>
            <p style="font-weight: bold;"><strong>Nama Karyawan :</strong> <?php echo htmlspecialchars($nama); ?></p>
            <p style="font-weight: bold;"><strong>NPK :</strong> <?php echo htmlspecialchars($nip); ?></p>
            <p style="font-weight: bold;"><strong>Alasan Cuti :</strong> <?php echo htmlspecialchars($alasan); ?></p>
            <p style="font-weight: bold;"><strong>Keterangan :</strong> <?php echo htmlspecialchars($status); ?></p>
        <?php else : ?>
            <p>No user found with the provided ID.</p>
        <?php endif; ?>
        <!--FIX-->
        <p>Dengan surat ini, saya bermaksud untuk mengajukan permohonan cuti tahunan, terhitung mulai tanggal <?php echo htmlspecialchars($mulai); ?> hingga <?php echo htmlspecialchars($akhir); ?>. Permohonan cuti ini saya ajukan <?php echo htmlspecialchars($alasan); ?>.</p>
        <br>
        <p>Selama periode cuti, saya telah menyiapkan dan menyerahkan semua pekerjaan kepada pimpinan bagian, yang akan bertanggung jawab selama ketidakhadiran saya. Saya juga telah memastikan bahwa semua tugas penting telah diselesaikan sebelum periode cuti ini untuk meminimalisir gangguan pada operasional sehari-hari di departemen kami.</p>
        <p>Selama periode cuti saya akan menjaga nama baik perusahaan dan mentaati segala peraturan perusahaan sampai segala keperluan saya selesai dengan baik. Saya akan kembali bekerja seperti biasa pada tanggal <?php echo htmlspecialchars($akhir); ?> dan siap melanjutkan tugas-tugas saya.</p>
        <br>
        <p>Atas perhatian dan persetujuan dari Bapak/Ibu, saya ucapkan terima kasih.</p>
        <br>
        <p>Hormat saya,</p>
        <br>
        <img src="" alt="" srcset="">
        <br>
        <p style="font-weight: bold;"><?php echo htmlspecialchars($nama); ?></p>
        <p style="font-weight: bold;"><?php echo htmlspecialchars($nip); ?></p>
    </div>
</body>
<script>
    window.print();
</script>

</html>