<?php 
include 'koneksi.php';
session_start();

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk cek username dan password
    $login = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE username='$username' AND password='$password'");
    
    // Cek apakah login berhasil
    if (mysqli_num_rows($login) > 0) {
        $data = mysqli_fetch_assoc($login);

        // Jika role admin
        if ($data['role'] == "admin") {
            $_SESSION['admin'] = $username;
            header("Location: dashboard.php");
        
        // Jika role pelanggan
        } elseif ($data['role'] == "pelanggan") {
            $_SESSION['user'] = $data['username'];
            $_SESSION['nama'] = $data['nama'];
            $_SESSION['id'] = $data['id'];

            // Arahkan ke halaman profil
            header("Location: profil.php");
            exit(); // Hentikan eksekusi lebih lanjut
        }
    } else {
        echo "Username dan Password salah!";
        header("Location: login.php");
        exit();
    }
}
?>
<!doctype html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="login.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
  
    <body>
  <img src="img/atas5.jpg" class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
        <rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></img>
        <div class="filter"></div>
        <div class="container">
        <h1>Login</h1>
        <form method="POST" enctype="multipart/form-data">
           <div>
              <label>Username</label><br>
              <input type="text" name="username" placeholder="Masukan Username" required /><br>
           </div>
           <div>
              <label>Password</label><br>
              <input type="password" name="password" placeholder="Masukan Password" required /><br>
           </div>
           <div>
          <hr class="my-4">
               <button class="btn-hover color-9" type="submit" name="login">Login</button>
            </div>
            <div>
               <ul class="list-inline">
               <li class="list-inline-item">Belum punya akun? Silahkan <a href="register.php">Masuk</a></li>
               </ul>
   </form>
   </div>  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  </body>
</html>
