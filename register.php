<?php
session_start(); // Mulai session

$koneksi = mysqli_connect("localhost", "root", "", "db_tokowendo");

if (isset($_POST['register'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hp = $_POST['hp'];
    $alamat = $_POST['alamat'];

    // Pastikan semua field diisi
    if (!empty($nama) && !empty($email) && !empty($username) && !empty($password) && !empty($hp) && !empty($alamat)) {
        // Simpan data ke database
        $simpan = mysqli_query($koneksi, "INSERT INTO pelanggan(nama, email, username, password, hp, alamat, role)
        VALUES('$nama', '$email', '$username', '$password', '$hp', '$alamat', 'pelanggan')");

        if ($simpan) {
            // Setelah data disimpan, login otomatis dengan session
            $_SESSION['username'] = $username;  // Menyimpan username di session
            $_SESSION['role'] = 'pelanggan';   // Menyimpan role di session

            if ($simpan) {
                header("Location: login.php"); // Ganti dengan URL login Anda
                exit();
            }
        }
    } else {
        echo "Semua field harus diisi!";
    }
}
?>



<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" href="register.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    
    <body>
    <img src="img/atas5.jpg" class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
    <div class="filter"></div>
    <div class="container">
        <h1>Register</h1>
        <form method="POST" enctype="multipart/form-data">
            <div>
                <label>Nama</label><br>
                <input type="text" name="nama" placeholder="Masukan Nama" required /><br>
            </div>
            <div>
                <label>Email</label><br>
                <input type="email" name="email" placeholder="Masukan Email" required /><br>
            </div>
            <div>
                <label>Username</label><br>
                <input type="text" name="username" placeholder="Masukan Username" required /><br>
            </div>
            <div>
                <label>Password</label><br>
                <input type="password" name="password" placeholder="Masukan Password" required /><br>
            </div>
            <div>
                <label>HP</label><br>
                <input type="text" name="hp" placeholder="Masukan No HP" required /><br>
            </div>
            <div>
                <label>Alamat</label><br>
                <input type="text" name="alamat" placeholder="Masukan Alamat" required /><br>
            </div>
            <button class="btn-hover color-9" type="submit" name="register" a href="login.php">Register</button>
            </div>
        </form>
    </div>
</body>
</html>