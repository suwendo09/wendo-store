<?php

// Koneksi ke database
$koneksi = new mysqli("localhost", "root", "", "db_tokowendo");

// Periksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

if (isset($_GET['id'])) {
    // Ambil id dari query string dan pastikan itu adalah integer
    $id = intval($_GET['id']);

    // Siapkan query hapus dengan prepared statement
    $stmt = $koneksi->prepare("DELETE FROM tb_produk WHERE id = ?");
    $stmt->bind_param("i", $id);

    // Jalankan query
    if ($stmt->execute()) {
        // Redirect ke dashboard setelah berhasil
        header('Location: dashboard.php');
        exit();
    } else {
        die("Gagal menghapus: " . $stmt->error);
    }

    // Tutup statement
    $stmt->close();
}

// Tutup koneksi
$koneksi->close();

?>
