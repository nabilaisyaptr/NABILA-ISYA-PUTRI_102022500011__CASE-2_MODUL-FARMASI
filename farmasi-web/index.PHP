<?php
include 'koneksi.php';

$data_obat = mysqli_query($koneksi, "SELECT * FROM tabel_obat");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Katalog Farmasi - Sistem Informasi Klinik Rawat Jalan</title>

<style>
    body {
        font-family: Arial, sans-serif;
        margin: 35px;
        background-color: #f8ebdd; 
        text-align: center; 
    }
    
    table {
        width: 100%;
        border-collapse: collapse;
        background-color: #a4bfcf; 
    }
    
    th, td {
        padding: 8px 12px;
        text-align: left;
        border: 2px solid #2c1e1e;
    }
    
    th {
        background-color: #d6b3d9; 
    }

    a {
        color: #711e6f; 
        text-decoration: none; 
        font-weight: bold;
    }

    .btn-tambah {
        display: inline-block;
        margin-bottom: 15px;
        padding: 8px 15px;
        background-color: #711e6f;
        color: white;
        border-radius: 4px;
    }
</style>
</head>
<body>

    <header>
        <h1>Selamat Datang di Sistem Informasi Klinik Rawat Jalan</h1>
        <h2>Katalog Farmasi - Master Data Obat</h2>
    </header>

    <main>
        <h2>Daftar Obat</h2>
    
        <a href="tambah obat.php" class="btn-tambah">+ Tambah Data Obat</a>

        <table border="1">
            <tr>
                <th>No</th>
                <th>Nama Obat</th>
                <th>Kategori</th>
                <th>Sediaan</th>
                <th>Pabrikan</th>
                <th>Aksi</th>
            </tr>

            <?php 
            $no = 1;
            while ($row = mysqli_fetch_assoc($data_obat)) : 
            ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $row['nama_obat']; ?></td>
                <td><?= $row['kategori']; ?></td>
                <td><?= $row['sediaan']; ?></td>
                <td><?= $row['pabrikan']; ?></td>
                <td>
                    <a href="edit_obat.php?id=<?= $row['id']; ?>">Edit</a> | 
                    <a href="hapus_obat.php?id=<?= $row['id']; ?>" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                </td>
            </tr>
            <?php endwhile; ?>

        </table>
    </main>

    <hr>
    <footer>
        <p>Nabila Isya Putri | 102022500011 | SI4906 | Modul Katalog Farmasi</p>
    </footer>

</body>
</html>