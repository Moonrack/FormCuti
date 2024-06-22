<?php
include "db_conn.php";
session_start();

// Check If form submitted, insert form data into users table.
if (isset($_POST['Submit'])) {
    $role = $_POST['role'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password = md5($password);
    $name = $_POST['name'];
    $nip = $_POST['nip'];
    $line = $_POST['line'];
    $departemen = $_POST['departemen'];
    $pekerja = $_POST['pekerja'];

    // include database connection file

    // Insert user data into table
    $result = mysqli_query($conn, "INSERT INTO users(role,username,password,name,nip,line,departemen,pekerja) VALUES('$role','$username', '$password','$name','$nip','$line','$departemen','$pekerja')");

    echo "<script>alert('Pendaftaran berhasil silakan kembali ke login');document.location='cutiform.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="index.css">
</head>

<body>

    <!--NAVBAR-->


    <!--NAVBAR-->
    <div class="card container" style="
        margin-top:7rem;
        max-width:max-content;
        height: 43rem;
        background: #ffffff;
        box-shadow: 10px 10px 4px rgba(0, 0, 0, 0.4);
        border-radius: 8px;

        
      ">
        <div class="card-body">
            <img src="Image/logo2.png" alt="" srcset="" style="margin-left: 5.5rem; width: 160px; margin-bottom: 3rem; margin-top: 2rem;">
            <div class="container" style="font-family: 'Poppins', sans-serif; width: 20rem">
                <form method="post" class="login-email">
                    <input type="text" class="form-control text-center mb-4" style="font-weight: bold" name="name" placeholder="Masukkan nama lengkap" required />
                    <input type="username" class="form-control mb-4 text-center" style="font-weight: bold; color: black" name="username" placeholder="Masukkan username" required />
                    <input type="text" class="form-control text-center mb-4" style="font-weight: bold" name="nip" placeholder="Masukkan NPK anda" required />
                    <input type="text" class="form-control text-center mb-4" style="font-weight: bold" name="line" placeholder="Line" required />

                    <select class="form-select mb-3 text-center" style="font-weight: bold" name="departemen" aria-label="Default select example">
                        <option>Departemen</option>
                        <option value="painting">Painting</option>
                        <option value="welding">Welding</option>
                        <option value="pressing">Pressing</option>
                        <option value="catalyst">Catalyst</option>
                        <option value="purchasing">Purchasing</option>
                        <option value="ppic">Ppic</option>
                        <option value="office">Office</option>
                    </select>

                    <select class="form-select mb-3 text-center" style="font-weight: bold" name="pekerja" aria-label="Default select example">
                        <option>Status pekerja anda</option>
                        <option value="pkwt">PKWT</option>
                        <option value="karyawan">Karyawan</option>
                    </select>
                    <input type="password" class="form-control text-center mb-4" style="font-weight: bold" name="password" placeholder="Masukkan password anda" required />
                    <input type="hidden" class="form-control text-center mb-4" value="user" style="font-weight: bold" name="role" />
            </div>

            <button type="submit" class="btn btn-light" style="
            color: white;
            font-family: 'Poppins', sans-serif;
            font-weight: bold;
            margin-left:11px;
            background-color: #b34172;
            width: 18.7rem;
          " name="Submit">DAFTAR</button>

          <p class="text-center mt-4" style="text-decoration: none; color:black;">Sudah Memiliki Akun?</p>
        <a href="cutiform.php">
            <p class="text-center mt-1" style="text-decoration: none; color:black; font-weight:bold;">Login</p>
        </a>
            </form>
            



            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>