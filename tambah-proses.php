<?php
include 'database.php';

if (isset($_POST['simpan'])) {
    $nama   = $_POST['nama'];
    $jumlah = $_POST['jumlah'];
    $harga  = $_POST['harga'];
    $tanggal = date('Y-m-d H:i:s');

    // Tambahkan die(mysqli_error($db)) untuk melihat jika ada error pada query
    $query = mysqli_query($db, "INSERT INTO databarang (nama, jumlah, harga, tanggal) VALUES ('$nama', '$jumlah', '$harga', '$tanggal')") or die(mysqli_error($db));

    if ($query) {
        header("Location: barang.php");
    } else {
        echo "Gagal menyimpan data: " . mysqli_error($db);
    }
}
?>