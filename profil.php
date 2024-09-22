<?php
session_start();
$koneksi = mysqli_connect("localhost", "root", "", "db_tokowendo");

// Cek koneksi
if ($koneksi === false) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Ambil ID pengguna dari sesi
$id_user = isset($_SESSION['id']) ? (int)$_SESSION['id'] : 0;

// Ambil data pengguna dari database
if ($id_user) {
    $query = "SELECT nama, password, email, hp FROM tb_user WHERE id = ?";
    $stmt = $koneksi->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->bind_result($nama, $password, $email, $hp);
    $stmt->fetch();
    $stmt->close();
} else {
    $nama = 'Customer not available';
    $password = 'Password not available';
    $email = 'Email not available';
    $hp = 'Phone not available';
}

mysqli_close($koneksi);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: #fff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #000;
            overflow: hidden;
        }
        .profile-container {
            background: #f9f9f9;
            border-radius: 20px;
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            width: 90%;
            max-width: 800px;
            padding: 60px;
            opacity: 0;
            transform: scale(0.9);
            animation: fadeInZoom 1.8s ease-out forwards;
        }
        .profile-img {
            text-align: center;
            margin-bottom: 30px;
            position: relative;
        }
        .profile-img img {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            border: 5px solid #333;
            box-shadow: 0 0 25px rgba(0, 0, 0, 0.3);
            transition: transform 0.4s ease, box-shadow 0.4s ease, filter 0.4s ease;
        }
        .profile-img img:hover {
            transform: scale(1.2);
            box-shadow: 0 0 50px rgba(0, 0, 0, 0.5);
            filter: brightness(1.1);
        }
        .profile-info {
            text-align: center;
        }
        .profile-info h1 {
            font-family: 'Merriweather', serif;
            font-size: 38px;
            margin-bottom: 15px;
            color: #333;
            opacity: 0;
            animation: fadeIn 2s ease-out forwards;
            animation-delay: 0.5s;
        }
        .profile-info p {
            font-size: 22px;
            color: #555;
            margin-bottom: 35px;
            line-height: 1.7;
            opacity: 0;
            animation: fadeIn 2s ease-out forwards;
            animation-delay: 0.7s;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 25px;
            opacity: 0;
            animation: fadeIn 2s ease-out forwards;
            animation-delay: 1s;
        }
        th, td {
            text-align: left;
            padding: 20px 30px;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f1f1f1;
            color: #333;
            font-weight: 700;
            font-family: 'Merriweather', serif;
        }
        td {
            font-size: 18px;
            color: #666;
        }
        td a {
            color: #333;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        td a:hover {
            color: #000;
        }
        .profile-info h1::after {
            content: '';
            display: block;
            width: 70px;
            height: 5px;
            background-color: #333;
            margin: 25px auto 0 auto;
            opacity: 0;
            animation: fadeIn 2s ease-out forwards;
            animation-delay: 1.2s;
        }
        .back-button {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 30px;
            font-size: 18px;
            font-family: 'Merriweather', serif;
            text-transform: uppercase;
            letter-spacing: 2px;
            background-color: #333;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease, transform 0.3s ease;
            opacity: 0;
            animation: fadeIn 2s ease-out forwards;
            animation-delay: 1.5s;
        }
        .back-button:hover {
            background-color: #444;
            transform: scale(1.05);
        }
        @keyframes fadeInZoom {
            0% {
                opacity: 0;
                transform: scale(0.9);
            }
            100% {
                opacity: 1;
                transform: scale(1);
            }
        }
        @keyframes fadeIn {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
    </style>
</head>
<body>

<div class="profile-container">
    <div class="profile-img">
        <img src="img/profil.jpg" alt="Foto Profil">
    </div>
    <div class="profile-info">
        <h1>Suwendo</h1>
        <p>Siswa SMKN 1 Cirebon, Jurusan Rekayasa Perangkat Lunak</p>
    </div>
    <table>
        <tr>
            <th>Nama</th>
            <td><a href="Suwendo">Suwendo</a></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><a href="mailto:suwendowendo28@gmail.com">suwendowendo28@gmail.com</a></td>
        </tr>
        <tr>
            <th>No.hp</th>
            <td><a href="tel:083113427837">083113427837</a></td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td>Jl.Syekh Nurjati, Wanasaba Lor, Blok Pejerukan, Rt/Rw 01/01, Kec.Talun, Kab.Cirebon, Jawa Barat 45171</td>
        </tr>
    </table>
    <a href="WendoStore2.php" class="back-button">Kembali</a>
    <a href="editprofil.php" class="back-button">Edit profil</a>
    <a href="login.php" class="back-button">Logout</a>
    
</div>

</body>
</html>