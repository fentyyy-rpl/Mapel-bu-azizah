<?php
include 'database.php';

$id = $_GET['id'];

$query = mysqli_query($db, "DELETE FROM databarang WHERE id_barang = '$id'");

if ($query) {
    header("Location: index.php");
} else {
    echo "Gagal menghapus data: " . mysqli_error($db);
}
?>