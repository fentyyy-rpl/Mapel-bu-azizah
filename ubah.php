<?php
include 'database.php';
$id = $_GET['id'];
$row = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM databarang WHERE id_barang = '$id'"));
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Barang</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">

<!-- Navbar Atas -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
  <div class="container">
    <a class="navbar-brand font-weight-bold" href="#">CRUD PHP</a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="barang.php">Barang</a></li>
        <li class="nav-item"><a class="nav-link" href="mahasiswa.php">Mahasiswa</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Modal</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Form Ubah -->
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header bg-warning font-weight-bold">Ubah Data Barang</div>
                <div class="card-body">
                    <form action="ubah-proses.php" method="POST">
                        <input type="hidden" name="id_barang" value="<?= $row['id_barang']; ?>">
                        
                        <div class="form-group mb-3">
                            <label>Nama Barang</label>
                            <input type="text" class="form-control" name="nama" value="<?= htmlspecialchars($row['nama']); ?>" required>
                        </div>
                        <div class="form-group mb-3">
                            <label>Jumlah</label>
                            <input type="number" class="form-control" name="jumlah" value="<?= $row['jumlah']; ?>" required>
                        </div>
                        <div class="form-group mb-3">
                            <label>Harga</label>
                            <input type="number" class="form-control" name="harga" value="<?= $row['harga']; ?>" required>
                        </div>
                        
                        <button type="submit" name="ubah" class="btn btn-warning font-weight-bold">Update Data</button>
                        <a href="barang.php" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>