<?php
include 'database.php'; 
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP - Data Barang</title>
    
    <!-- Bootstrap 4 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!-- DataTables Bootstrap 4 CSS -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
</head>
<body class="bg-light">

<!-- Navbar Atas -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
  <div class="container">
    <a class="navbar-brand font-weight-bold" href="#">CRUD PHP</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="barang.php">Barang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="mahasiswa.php">Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Modal</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Main Container -->
<div class="container">
  <div class="row mb-3 align-items-center">
    <div class="col-sm-6 d-flex align-items-center">
      <!-- FOTO DI SAMPING JUDUL DATA BARANG -->
      <img src="assets/img/logodatabarang.png" alt="Foto" class="rounded-circle mr-3 border" width="100" height="85">
      <h2 class="mb-0">Data Barang</h2>
    </div>
    <div class="col-sm-6 text-right">
      <a href="tambah.php" class="btn btn-primary">Tambah Data</a>
    </div>
  </div>

  <div class="row">
    <div class="col-12">
      <div class="card shadow-sm">
        <div class="card-body">
          <!-- Tabel dikembalikan seperti semula (tanpa kolom foto) -->
          <table id="example1" class="table table-bordered table-striped align-middle text-center">
            <thead class="thead-dark">
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Tanggal</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $query = mysqli_query($db, "SELECT * FROM databarang");
                
                if (mysqli_num_rows($query) > 0) {
                    while ($row = mysqli_fetch_assoc($query)) {
                ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= htmlspecialchars($row['nama']); ?></td>
                    <td><?= $row['jumlah']; ?></td>
                    <td>Rp. <?= number_format($row['harga'], 0, ',', '.'); ?></td>
                    <td><?= date('d/m/Y H:i', strtotime($row['tanggal'])); ?></td>
                    <td>
                        <a href="ubah.php?id=<?= $row['id_barang']; ?>" class="btn btn-success btn-sm">Ubah</a>
                        <a href="hapus.php?id=<?= $row['id_barang']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">Hapus</a>
                    </td>
                </tr>
                <?php 
                    } 
                } else {
                    echo "<tr><td colspan='6' class='text-center'>Belum ada data.</td></tr>";
                }
                ?>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
</div>

<!-- jQuery (Wajib untuk DataTables) -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- DataTables JS -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, 
      "lengthChange": true, 
      "autoWidth": false,
      "searching": false
    });
  });
</script>

</body>
</html>