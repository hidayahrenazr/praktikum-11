<?php
include "koneksi.php";

// Mendapatkan data dari form
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['thn'] . "-" . $_POST['bln'] . "-" . $_POST['tgl'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];

// Membuat query tambah data mahasiswa
$sql = "INSERT INTO mahasiswa (nim, nama, tempat_lahir, tanggal_lahir, jenis_kelamin, jurusan, alamat) VALUES ('$nim', '$nama', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$jurusan', '$alamat')";

if (mysqli_query($koneksi, $sql)) {
    header("location:tampil_data.php");
} else {
    echo "Error: " . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>