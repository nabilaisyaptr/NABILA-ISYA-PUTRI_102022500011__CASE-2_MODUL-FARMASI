<?php
include 'koneksi.php';

$id = $_GET['id'];

$result = mysqli_query($koneksi, "SELECT * FROM tabel_obat WHERE id = '$id'");
$data = mysqli_fetch_assoc($result);

if (isset($_POST['update'])) {
    $nama_obat = $_POST['nama_obat'];
    $kategori  = $_POST['kategori'];
    $sediaan   = $_POST['sediaan'];
    $pabrikan  = $_POST['pabrikan'];

    $query = "UPDATE tabel_obat SET nama_obat='$nama_obat', kategori='$kategori', sediaan='$sediaan', pabrikan='$pabrikan' WHERE id='$id'";
    
    if (mysqli_query($koneksi, $query)) {
        header("location: index.php");
    } else {
        echo "Gagal mengupdate data: " . mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Obat - Katalog Farmasi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 35px;
            background-color: #f8ebdd; 
            text-align: center; 
        }

        h2 {
            color: #2c1e1e;
        }

        form {
            background-color: #a4bfcf; 
            max-width: 450px;
            margin: 20px auto;
            padding: 25px;
            border-radius: 8px;
            border: 2px solid #2c1e1e;
            text-align: left;
        }

        label {
            font-weight: bold;
            color: #2c1e1e;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #2c1e1e;
            border-radius: 4px;
            box-sizing: border-box;
            background-color: #ffffff;
        }

        button[type="submit"] {
            background-color: #711e6f;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
            width: 100%;
        }

        button[type="submit"]:hover {
            background-color: #531251;
        }

        a {
            color: #711e6f; 
            text-decoration: none; 
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <h2>Edit Data Obat</h2>

    <form method="POST" action="">
        <label>Nama Obat:</label>
        <input type="text" name="nama_obat" value="<?= $data['nama_obat']; ?>" required>

        <label>Kategori:</label>
        <input type="text" name="kategori" value="<?= $data['kategori']; ?>" required>

        <label>Sediaan:</label>
        <input type="text" name="sediaan" value="<?= $data['sediaan']; ?>" required>

        <label>Pabrikan:</label>
        <input type="text" name="pabrikan" value="<?= $data['pabrikan']; ?>" required>

        <button type="submit" name="update">Simpan Perubahan</button>
    </form>

    <br>
    <a href="index.php">&larr; Kembali ke Katalog Utama</a>

</body>
</html>