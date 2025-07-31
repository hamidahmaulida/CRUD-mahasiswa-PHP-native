<?php
include "koneksi.php";

// Mendapatkan data dari form
$nim = isset($_POST['nim']) ? $_POST['nim'] : '';
$nama = isset($_POST['nama']) ? $_POST['nama'] : '';
$no_hp = isset($_POST['no_hp']) ? $_POST['no_hp'] : '';
$jenis_kelamin = isset($_POST['jenis_kelamin']) ? $_POST['jenis_kelamin'] : '';
$jurusan = isset($_POST['jurusan']) ? $_POST['jurusan'] : '';
$alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';

echo $nim;

// Query update data mahasiswa
$sql = "UPDATE mahasiswa 
        SET nama='$nama', no_hp='$no_hp', jenis_kelamin='$jenis_kelamin', 
            jurusan='$jurusan', alamat='$alamat'
        WHERE nim='$nim'";
if (mysqli_query($link, $sql)) {
    header("location:tampil_data.php");
    exit();
} else {
    echo "Error: " . mysqli_error($link);
}
