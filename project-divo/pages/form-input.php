<?php
    include '../koneksi.php';
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="../css/input.css">
</head>

<body>
    <div class="sidebar">
        <h2>Divo Pratama</h2>
        <ul>
            <li><a href="../pages/index.php">Data Pustaka</a></li>
            <li><a href="../pages/show.php">Show Tabel</a></li>
        </ul>
    </div>
    <div class="homepage">
        <div class="container">
            <div class="content">
                <h2 align="center">Silahkan Masukan Data</h2>
                <form method="POST" action="../proses/prosesinput.php" enctype="multipart/form-data">
                    <label for="judulbuku">Judul Buku</label>
                    <br>
                    <input type="text" name="judulbuku" class="form-control" placeholder="Masukan Judul Buku" required>
                    <br>
                    <label for="namapenerbit">Nama Penerbit</label>
                    <br>
                    <input type="text" name="namapenerbit" class="form-control" placeholder="Masukan Nama Penerbit" required>
                    <br>
                    <label for="tahunterbit">Tahun Terbit</label>
                    <br>
                    <input type="text" name="tahunterbit" class="form-control" placeholder="Masukan Tahun Terbit" required>
                    <br>
                    <label for="coverbuku">Cover Buku</label>
                    <br>
                    <input type="file" name="coverbuku" class="form-control"  required>
                    <br>
                    <label for="jenisbuku">Jenis Buku</label>
                    <br>
                    <input type="text" name="jenisbuku" class="form-control" placeholder="Masukan Jenis buku" required>
                    <br>
                    <label for="statusbuku">Status Buku</label>
                    <br>
                    <select name="statusbuku" class="form-control">
                        <option value="">Silahkan Pilih</option>
                        <option value="Baik">Baik</option>
                        <option value="Rusak">Rusak</option>
                    </select>
                    <br>
                    <label for="kondisi">Status Buku</label>
                    <br>
                    <select name="kondisi" class="form-control">
                        <option value="">Silahkan Pilih</option>
                        <option value="Dipinjam">Dipinjam</option>
                        <option value="Tidak Dipinjam">Tidak Dipinjam</option>
                    </select>
                    <br>
                    <br>
                    <input type="submit" name="submit" class="btn" value="Kirim">
                </form>
            </div>
        </div>
        <!-- Konten halaman -->
    </div>
</body>

</html>