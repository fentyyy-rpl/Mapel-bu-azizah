<?php
include 'database.php';

if (isset($_POST['ubah'])) {
    $id_barang = $_POST['id_barang'];
    $nama      = $_POST['nama'];
    $jumlah    = $_POST['jumlah'];
    $harga     = $_POST['harga'];

    $query = mysqli_query($db, "UPDATE databarang SET nama='$nama', jumlah='$jumlah', harga='$harga' WHERE id_barang='$id_barang'");

    if ($query) {
        header("Location: index.php");
    } else {
        echo "Gagal mengubah data: " . mysqli_error($db);
    }
}
?>