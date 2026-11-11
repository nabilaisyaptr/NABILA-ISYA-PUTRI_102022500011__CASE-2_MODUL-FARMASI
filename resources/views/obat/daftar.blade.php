<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Katalog Farmasi - Sistem Informasi Klinik Rawat Jalan</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 35px; background-color: #f8ebdd; text-align: center; }
        h1, h2 { color: #2c1e1e; }
        table { width: 100%; border-collapse: collapse; background-color: #a4bfcf; }
        th, td { padding: 8px 12px; text-align: left; border: 2px solid #2c1e1e; }
        th { background-color: #d6b3d9; }
        a { color: #711e6f; text-decoration: none; font-weight: bold; }
        .btn-tambah { display: inline-block; margin-bottom: 15px; padding: 8px 15px; background-color: #711e6f; color: white; border-radius: 4px; }
        .sukses { background: #d4edda; border: 1px solid #2c1e1e; padding: 8px; margin-bottom: 15px; border-radius: 4px; }
    </style>
</head>
<body>
    <header>
        <h1>Selamat Datang di Sistem Informasi Klinik Rawat Jalan</h1>
        <h2>Katalog Farmasi - Master Data Obat</h2>
    </header>

    <main>
        <h2>Daftar Obat</h2>

        @if (session('success'))
            <div class="sukses">{{ session('success') }}</div>
        @endif

        <a href="{{ route('obat.create') }}" class="btn-tambah">+ Tambah Data Obat</a>

        <table>
            <tr>
                <th>No</th>
                <th>Nama Obat</th>
                <th>Kategori</th>
                <th>Sediaan</th>
                <th>Pabrikan</th>
            </tr>
            @forelse ($data_obat as $obat)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $obat->nama_obat }}</td>
                <td>{{ $obat->kategori }}</td>
                <td>{{ $obat->sediaan }}</td>
                <td>{{ $obat->pabrikan }}</td>
            </tr>
            @empty
            <tr><td colspan="5" style="text-align:center">Belum ada data obat.</td></tr>
            @endforelse
        </table>
    </main>

    <hr>
    <footer>
        <p>Nabila Isya Putri | 102022500011 | SI4906 | Modul Katalog Farmasi</p>
    </footer>
</body>
</html>