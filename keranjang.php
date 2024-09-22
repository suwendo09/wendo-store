<?php
session_start();

// Initialize cart if not set
if (!isset($_SESSION['keranjang'])) {
    $_SESSION['keranjang'] = array();
}

$koneksi = mysqli_connect("localhost", "root", "", "db_tokowendo");

// Add item to cart
if (isset($_GET['action']) && $_GET['action'] == 'add' && isset($_POST['id'])) {
    $id = mysqli_real_escape_string($koneksi, $_POST['id']);
    $jumlah = isset($_POST['jumlah']) ? intval($_POST['jumlah']) : 1;

    // Get product details
    $query = "SELECT * FROM tb_produk WHERE id='$id'";
    $result = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($result) > 0) {
        $produk = mysqli_fetch_assoc($result);

        // Add to cart
        $_SESSION['keranjang'][$id] = array(
            'nama' => $produk['nama'],
            'foto' => $produk['foto'],
            'harga' => $produk['harga'],
            'jumlah' => $jumlah
        );
    }
}

// Handle item deletion
if (isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['id'])) {
    $id = mysqli_real_escape_string($koneksi, $_GET['id']);
    
    // Remove item from cart
    if (isset($_SESSION['keranjang'][$id])) {
        unset($_SESSION['keranjang'][$id]);
    }
}

// Display cart items
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cart</title>
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<header data-bs-theme="dark">
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Wendo Store</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="WendoStore2.php">Home</a>
          </li>
         </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <div class="nav-icon">
        <a href="keranjang.php"><i class='bx bx-cart'></i></a>
        <a href="profil.php"><i class='bx bx-user' ></i></a>
      </div>
      </div>
    </div>
  </nav>
</header>

       <div class="container py-5" style="margin-top: 70px;">
         <h1 class="mb-4">Keranjang</h1>
           <!-- Konten keranjang lainnya -->

        <?php if (empty($_SESSION['keranjang'])): ?>
            <p>Keranjang Anda kosong.</p>
        <?php else: ?>
            <form method="post" action="co.php">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Foto</th>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>Jumlah</th>
                            <th>Total</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $total = 0;
                        foreach ($_SESSION['keranjang'] as $id => $item):
                            $subtotal = $item['harga'] * $item['jumlah'];
                            $total += $subtotal;
                        ?>
                            <tr>
                                <td><img src="img/<?= htmlspecialchars($item['foto']) ?>" width="100"></td>
                                <td><?= htmlspecialchars($item['nama']) ?></td>
                                <td>Rp. <?= number_format($item['harga']) ?></td>
                                <td><?php echo $item['jumlah']; ?></td>
                                <td>Rp. <?= number_format($subtotal) ?></td>
                                <td>
                                    <a href="keranjang.php?action=delete&id=<?= $id ?>" class="btn btn-danger btn-sm">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="4" class="text-end"><strong>Total</strong></td>
                            <td><strong>Rp. <?= number_format($total) ?></strong></td>
                        </tr>
                    </tfoot>
                </table>
                <input type="hidden" name="total" value="<?= $total ?>">
                <?php foreach ($_SESSION['keranjang'] as $id => $item): ?>
                    <input type="hidden" name="keranjang[<?= $id ?>][nama]" value="<?= htmlspecialchars($item['nama']) ?>">
                    <input type="hidden" name="keranjang[<?= $id ?>][foto]" value="<?= htmlspecialchars($item['foto']) ?>">
                    <input type="hidden" name="keranjang[<?= $id ?>][harga]" value="<?= htmlspecialchars($item['harga']) ?>">
                    <input type="hidden" name="keranjang[<?= $id ?>][jumlah]" value="<?= htmlspecialchars($item['jumlah']) ?>">
                <?php endforeach; ?>
                <div class="d-flex justify-content-between mt-4">
    <a href="detail.php" class="btn btn-outline-secondary">
        <i class="fa fa-arrow-left"></i>Lanjutkan belanja
    </a>
    <a href="cetak.php" class="btn btn-primary">
        Checkout <i class="fa fa-arrow-right"></i>
    </a>
</div>

            </form>
        <?php endif; ?>
    </div>
</body>
</html>