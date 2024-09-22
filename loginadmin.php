<?php
include  'koneksi.php';
session_start();
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $login = mysqli_query(
        $koneksi,
        "select = from user where username='$username' and password='$password'"
    );
    if ($data = mysqli_fetch_array($login)) {
        //berhasil login
        $_SESSION['username'] = $data['username'];
        $_SESSION['password'] = $data['password'];
        header('location: dashboard.php');
    } else {
        //gagal login
        header('loginadmin.php');
    
    }
}
?> 