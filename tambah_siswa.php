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
          <h1>Tambah Data Mahasiswa</h1>
        </div>
      </div>
    </div>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Form Tambah Mahasiswa</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="tambah_siswa_proses.php" method="POST" enctype="multipart/form-data">
              <div class="card-body">
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama" required>
                </div>
                <div class="form-group">
                  <label for="prodi">Program Studi</label>
                  <input type="text" name="prodi" class="form-control" id="prodi" placeholder="Masukkan Program Studi" required>
                </div>
                <div class="form-group">
                  <label for="jk">Jenis Kelamin</label>
                  <select name="jk" class="form-control" id="jk" required>
                    <option value="">-- Pilih Jenis Kelamin --</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="foto">Foto</label>
                  <input type="file" name="foto" class="form-control-file" id="foto">
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                <a href="siswa.php" class="btn btn-secondary">Kembali</a>
              </div>
            </form>
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
  </section>
</div>

<?php
include 'layout/footer.php';
?>