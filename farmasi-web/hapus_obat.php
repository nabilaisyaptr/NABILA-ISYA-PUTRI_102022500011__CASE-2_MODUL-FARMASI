<?php
include 'koneksi.php';

$id = $_GET['id'];

$query = "DELETE FROM tabel_obat WHERE id = '$id'";

if (mysqli_query($koneksi, $query)) {
    header("location: index.php");
} else {
    echo "Gagal menghapus data: " . mysqli_error($koneksi);
}
?>