<?php
include 'koneksi.php';
include 'Layout/header.php';

// Mengambil ID dari URL
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id_mahasiswa = '$id'");
$data = mysqli_fetch_array($query);
?>

<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <h1>Detail Mahasiswa</h1>
    </div>
  </section>

  <section class="content">
    <div class="card">
      <div class="card-body">
        
        <!-- Judul Data Mahasiswa -->
        <h4 class="mb-3">DATA <?php echo strtoupper($data['nama']); ?></h4>
        
        <!-- Tabel Detail -->
        <table class="table table-bordered">
          <tr>
            <th style="width: 20%;">Nama</th>
            <td>: <?php echo $data['nama']; ?></td>
          </tr>
          <tr>
            <th>Program Studi</th>
            <td>: <?php echo $data['prodi']; ?></td>
          </tr>
          <tr>
            <th>Jenis Kelamin</th>
            <td>: <?php echo $data['jk']; ?></td>
          </tr>
          <tr>
            <th>Telepon</th>
            <td>: <?php echo isset($data['telepon']) ? $data['telepon'] : '-'; ?></td>
          </tr>
          <tr>
            <th>Alamat</th>
            <td>: <?php echo isset($data['alamat']) ? $data['alamat'] : '-'; ?></td>
          </tr>
          <tr>
            <th>Email</th>
            <td>: <?php echo isset($data['email']) ? $data['email'] : '-'; ?></td>
          </tr>
          <tr>
            <th>Foto</th>
            <td>
              : 
              <?php if(!empty($data['foto'])): ?>
                <img src="assets/img/<?php echo $data['foto']; ?>" alt="Foto" width="120" class="img-thumbnail mt-2">
              <?php else: ?>
                <img src="assets/img/default.jpg" alt="Foto Default" width="120" class="img-thumbnail mt-2">
              <?php endif; ?>
            </td>
          </tr>
        </table>

        <!-- Tombol Kembali -->
        <a href="siswa.php" class="btn btn-secondary btn-sm mt-2">kembali</a>

      </div>
    </div>
  </section>
</div>

<?php 
include 'Layout/footer.php';
?>