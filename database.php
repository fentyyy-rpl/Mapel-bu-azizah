<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "crud-php"; 

$db = mysqli_connect($host, $user, $pass, $db);

if (!$db) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>