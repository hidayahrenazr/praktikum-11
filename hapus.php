<?php
// Koneksi database
include "koneksi.php";

// Get id mahasiswa
$id = $_GET['id'];

// Query hapus data mahasiswa
$sql = "DELETE FROM mahasiswa WHERE id='$id'";
if (mysqli_query($link, $sql)) {
    header('Location: tampilData.php');
}
?>