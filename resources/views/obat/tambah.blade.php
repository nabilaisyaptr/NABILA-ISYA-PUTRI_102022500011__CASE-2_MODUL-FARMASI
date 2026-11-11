<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data Obat - Katalog Farmasi</title>
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

    <h2>Form Tambah Data Obat</h2>

    <form action="{{ route('obat.store') }}" method="POST">
        @csrf

        <label>Nama Obat:</label>
        <input type="text" name="nama_obat" placeholder="Masukkan nama obat" required>

        <label>Kategori:</label>
        <input type="text" name="kategori" placeholder="Masukkan kategori obat" required>

        <label>Sediaan:</label>
        <input type="text" name="sediaan" placeholder="Masukkan bentuk sediaan" required>

        <label>Pabrikan:</label>
        <input type="text" name="pabrikan" placeholder="Masukkan nama pabrikan" required>

        <button type="submit">Simpan Data</button>
    </form>

    <br>
    <a href="{{ route('obat.daftar') }}"> ← Kembali ke Katalog Utama </a>
</body>
</html>