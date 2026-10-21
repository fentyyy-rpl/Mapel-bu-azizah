<?php
include 'database.php';
include 'layout/header.php';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data Mahasiswa</h1>
        </div>
        <div class="col-sm-6 text-right">
          <a href="tambah_siswa.php" class="btn btn-primary">Tambah Data</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Tabel Daftar Mahasiswa</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Prodi</th>
                  <th>Jenis Kelamin</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $no = 1;
                $query = mysqli_query($db, "SELECT * FROM mahasiswa ORDER BY id_mahasiswa DESC");
                while ($row = mysqli_fetch_assoc($query)) :
                ?>
                <tr>
                  <td><?= $no++; ?></td>
                  <td><?= $row['nama']; ?></td>
                  <td><?= $row['prodi']; ?></td>
                  <td><?= $row['jk']; ?></td>
                  <td>
                    <a href="DetailDataSiswa.php?id=<?= $row['id_mahasiswa']; ?>" class="btn btn-info btn-sm">Detail</a>
                    <a href="#" class="btn btn-success btn-sm">Edit</a>
                    <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                  </td>
                </tr>
                <?php endwhile; ?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
include 'layout/footer.php';
?>