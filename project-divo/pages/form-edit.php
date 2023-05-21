<?php

include '../koneksi.php';
$idbuku = $_GET['idbuku'];
$Record = mysqli_query($koneksi, "SELECT * FROM `pustaka` WHERE idbuku = $idbuku");
$data = mysqli_fetch_array($Record);


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
        <!-- Konten halaman -->
        <div class="container">
            <div class="content">
                <h2 align="center">Silahkan Masukan Data</h2>
                <form method="POST" action="../proses/prosesedit.php" enctype="multipart/form-data">
                    <label for="idbuku" hidden>Id Buku</label>
                    <br>
                    <input hidden class="form-control" name="idbuku" value="<?php echo $data['idbuku']?>" placeholder="Masukan Id Buku" required>
                    <br>
                    <label for="judulbuku">Judul Buku</label>
                    <br>
                    <input type="text" value="<?php echo $data['judulbuku'] ?>" name="judulbuku" class="form-control" placeholder="Masukan Judul Buku" required>
                    <br>
                    <label for="namapenerbit">Nama Penerbit</label>
                    <br>
                    <input type="text" name="namapenerbit" value="<?php echo $data['namapenerbit']?>" class="form-control" placeholder="Masukan Nama Penerbit" required>
                    <br>
                    <label for="tahunterbit">Tahun Terbit</label>
                    <br>
                    <input type="text" name="tahunterbit" value="<?php echo $data['tahunterbit']?>" class="form-control" placeholder="Masukan Tahun Terbit" required>
                    <br>
                    <!-- <label for="coverbuku" hidden>Cover Buku</label>
                    <br>
                    <input type="file" name="coverbuku" hidden value="<?php echo $data['coverbuku']?>" class="form-control" placeholder="Masukan Cover Buku" required><img src="<?php echo $data['coverbuku'] ?>" width='200px' height='70px' hidden alt="">
                    <br> -->
                    <label for="jenisbuku">Jenis Buku</label>
                    <br>
                    <input type="text" value="<?php echo $data['jenisbuku']?>" name="jenisbuku" class="form-control" placeholder="Masukan jenis buku" required>
                    <br>
                    <label for="kondisi">Kondisi</label>
                    <br>
                    <select name="statusbuku" class="form-control">
                        <option value="">Silahkan Pilih</option>
                        <option value="Baik" <?php if ($data['statusbuku'] == "Baik") {
                                                echo "selected";}?>>Baik</option>
                        <option value="Rusak" <?php if ($data['statusbuku'] == "Rusak") {
                                                echo "selected";}?>>Rusak</option>
                    </select>
                    <br>
                    <label for="kondisi">Kondisi</label>
                    <br>
                    <select name="kondisi" class="form-control">
                        <option value="">Silahkan Pilih</option>
                        <option value="Dipinjam" <?php if ($data['kondisi'] == "Dipinjam") {
                                                echo "selected";}?>>Dipinjam</option>
                        <option value="Tidak Dipinjam" <?php if ($data['kondisi'] == "Tidak Dipinjam") {
                                                echo "selected";}?>>Tidak Dipinjam</option>
                    </select>
                    <br>
                    <br>
                    <input type="submit" name="submit" class="btn" value="kirim">
                </form>
            </div>
        </div>
    </div>
</body>

</html>