<?php
session_start();
$nama = isset($_SESSION['nama']) ? $_SESSION['nama'] : 'Suwendo'; // Ambil nama dari sesi jika ada
$tanggal = date('Y-m-d'); // Tanggal pembelian saat ini
$id_transaksi = 'INV-' . date('Ymd') . '-' . rand(1000, 9999); // Nomor invoice otomatis

// Koneksi ke database
$koneksi = new mysqli("localhost", "root", "", "db_tokowendo");

// Cek koneksi
if ($koneksi->connect_error) {
    die("Koneksi ke database gagal: " . $koneksi->connect_error);
}
// Cek apakah keranjang kosong
if (empty($_SESSION['keranjang'])) {
    echo "Keranjang kosong. Tidak ada yang bisa dicetak.";
    exit();
}

$total = 0;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Nota</title>
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @media print {
            .btn-print {
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Nota Pembelian</h1>
        <div class="mb-4">
            <p><strong>Nomor Invoice:</strong> <?php echo $id_transaksi; ?></p>
            <p><strong>Nama Pembeli:</strong> <?php echo htmlspecialchars($nama); ?></p>
            <p><strong>Tanggal Pembelian:</strong> <?php echo $tanggal; ?></p>
        </div>

        <div class="table-responsive">
                <thead class="table-dark">
                    <tr>
                        
                    </tr>
                </thead>
                <tbody>
                <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Nota</title>
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @media print {
            .no-print {
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <h1 class="mb-4">Nota Pembelian</h1>

        <table class="table">
            <thead>
                <tr>
                <th>Foto</th>
                <th>Produk</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>SubHarga</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($_SESSION['keranjang'] as $id => $item): 
                    $subtotal = $item['harga'] * $item['jumlah'];
                    $total += $subtotal;
                ?>
                    <tr>
                        <td><img src="img/<?= htmlspecialchars($item['foto']) ?>" width="100"></td>
                        <td><?= htmlspecialchars($item['nama']) ?></td>
                        <td>Rp.<?= number_format($item['harga']) ?></td>
                        <td><?= $item['jumlah'] ?></td>
                        <td>Rp.<?= number_format($subtotal) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="4" class="text-end"><strong>Total</strong></td>
                    <td><strong>Rp.<?= number_format($total) ?></strong></td>
                </tr>
            </tfoot>
        </table>

        <div class="no-print text-center mt-4">
            <button onclick="window.print();" class="btn btn-primary">Print Nota</button>
        </div>
    </div>
</body>
</html>
    </div>
</body>
</html>