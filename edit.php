<?php
include('koneksi.php'); // Menghubungkan ke database

// Mengambil data produk berdasarkan ID
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query untuk mengambil data produk
    $stmt = $koneksi->prepare("SELECT * FROM admin WHERE id = ?");
    $stmt->bind_param("s", $id);
    $stmt->execute();
    $hasil = $stmt->get_result();

    // Memeriksa apakah produk dengan ID tersebut ada
    if ($hasil->num_rows > 0) {
        $data = $hasil->fetch_assoc();
        $nama = $data['nama'];
        $harga = $data['harga'];
        $stok = $data['stok'];
        $kategori = $data['kategori'];
        $deskripsi = $data['deskripsi'];
        $foto = $data['foto'];
    } else {
        echo "Produk tidak ditemukan!";
        exit();
    }

    $stmt->close();
} else {
    echo "ID produk tidak ditemukan!";
    exit();
}
?>

<!-- Menampilkan Form Edit Produk -->
<form action="proses_edit.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <label for="nama">Nama Produk:</label>
    <input type="text" name="nama" value="<?php echo $nama; ?>">

    <label for="harga">Harga:</label>
    <input type="number" name="harga" value="<?php echo $harga; ?>">

    <label for="stok">Stok:</label>
    <input type="number" name="stok" value="<?php echo $stok; ?>">

    <label for="kategori">Kategori:</label>
    <input type="text" name="kategori" value="<?php echo $kategori; ?>">

    <label for="deskripsi">Deskripsi:</label>
    <textarea name="deskripsi"><?php echo $deskripsi; ?></textarea>

    <label for="foto">Foto:</label>
    <input type="file" name="foto">
    <img src="uploads/<?php echo $foto; ?>" alt="Foto Produk" width="100"> <!-- Menampilkan foto produk yang ada -->

    <button type="submit" name="update">Update Produk</button>
</form>
