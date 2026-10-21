<?php
include 'database.php';

if (isset($_POST['simpan'])) {
    $nama  = $_POST['nama'];
    $prodi = $_POST['prodi'];
    $jk    = $_POST['jk'];

    // Mengambil informasi file foto yang di-upload
    $nama_file = $_FILES['foto']['name'];
    $sumber    = $_FILES['foto']['tmp_name'];

    if ($nama_file != "") {
        // Jika user memilih foto, pindahkan ke folder assets/img/
        $target_dir = "assets/img/";
        
        // Pastikan folder assets/img/ sudah ada di proyek Anda
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0777, true);
        }

        move_uploaded_file($sumber, $target_dir . $nama_file);
        
        // Simpan data beserta nama file fotonya
        $query = mysqli_query($db, "INSERT INTO mahasiswa (nama, prodi, jk, foto) VALUES ('$nama', '$prodi', '$jk', '$nama_file')");
    } else {
        // Jika tidak mengupload foto, simpan dengan string kosong (nanti otomatis pakai foto default di DetailDataSiswa)
        $query = mysqli_query($db, "INSERT INTO mahasiswa (nama, prodi, jk, foto) VALUES ('$nama', '$prodi', '$jk', '')");
    }

    if ($query) {
        echo "<script>alert('Data mahasiswa berhasil ditambahkan!'); window.location='siswa.php';</script>";
    } else {
        echo "Gagal menyimpan data: " . mysqli_error($db);
    }
}
?>