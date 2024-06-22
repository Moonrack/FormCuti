<?php
include "db_conn.php";

// Check if ID is set in the URL
if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Ensure the ID is an integer

    // Prepare and bind
    $stmt = $conn->prepare("SELECT id, nama, nip, tgl, alasan, status FROM ijin WHERE id = ?");
    $stmt->bind_param("i", $id);

    // Execute the statement
    $stmt->execute();

    // Bind result variables
    $stmt->bind_result($userId, $nama, $nip, $tgl, $alasan, $status);

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
    <title>SURAT CUTI DAN IJIN</title>

</head>

<body>
    <div class="user-details">
        <center>
            <img src="Image/kop.png" alt="">
        </center>
        <br>
        <center>
            <H1>IZIN MENINGGALKAN PEKERJAAN</H1>
            <P>NO :...../BNP 15 MP........../.......</P>
        </center>

        <br>
        <p style="font-weight: bold;">Perihal: Permohonan Izin Meninggalkan Pekerjaan</p>
        <br>
        <p>Dengan Hormat,</p>
        <p>Saya yang bertanda tangan di bawah ini:</p>

        <!--FIX-->
        <?php if ($userFound) : ?>
            <p style="font-weight: bold;"><strong>Nama :</strong> <?php echo htmlspecialchars($nama); ?></p>
            <p style="font-weight: bold;"><strong>NPK :</strong> <?php echo htmlspecialchars($nip); ?></p>
            <p style="font-weight: bold;"><strong>KEPERLUAN :</strong> <?php echo htmlspecialchars($alasan); ?></p>
            <p style="font-weight: bold;"><strong>STATUS :</strong> <?php echo htmlspecialchars($status); ?></p>
        <?php else : ?>
            <p>No user found with the provided ID.</p>
        <?php endif; ?>
        <!--FIX-->
        <p>Dengan surat ini, saya bermaksud untuk mengajukan permohonan izin meninggalkan pekerjaan , pada <?php echo htmlspecialchars($tgl); ?> hingga batas waktu jam kerja pada hari ini.</p>
        
        <p>Saya telah menyiapkan dan menyerahkan semua pekerjaan kepada pimpinan bagian, yang akan bertanggung jawab atas segala yang menjadi
            tugas saya.
            <br>
        <p>Selama periode izin saya akan menjaga nama baik perusahaan dan mentaati segala peraturan perusahaan sampai segala keperluan saya selesai dengan baik.
            <p> Saya akan segera kembali ke perusahaan sampai batas waktu sesuai ketentuan perusahaan dan siap melanjutkan kembali tugas-tugas saya.</p>
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