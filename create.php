<?php
include 'config.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['nama_produk'];
    $email = $_POST['harga'];
    $passw = $_POST['passw'];
    $conn->query("INSERT INTO products (nama_produk, harga, stok) VALUES ('$nama', '$harga', '$stok')");
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-4">
<form method="POST">
        <div class="mb-3">
            <label>Nama Produk</label>
            <input type="text" name="nama_produk" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Harga</label>
            <input type="number" name="harga" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Stok</label>
            <input type="number" name="stok" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</body>
</html>
