<?php

include '../koneksi.php';

?>


<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="../css/tampil.css">
</head>

<body>
    <form method="POST">

        <div class="sidebar">
            <h2>Divo Pratama</h2>
            <ul>
                <li><a href="../pages/index.php">Data Pustaka</a></li>
                <li><a href="../pages/show.php">Show Data</a></li>
            </ul>
        </div>
        <div class="content">
            <!-- Konten halaman -->
            <h2 align="center">Daftar Buku Yang Ada Di Perpustakaan</h2>
            <div class="search-container">
                <a class="button-input-1" href="../pages/form-input.php">Masukkan Data</a>
                <a class="button-input-1" href="../pages/printdata.php">Print Data</a>
                
                    <input type="text" name="tcari" value="<?php echo isset($_POST['tcari']) ? $_POST['tcari'] : ''; ?>" class="cari" placeholder="Masukkan Kata Kunci">
                    <button type="submit" class="bcari" name="bcari">Cari</button><button type="submit" class="bcari" name="breset">Reset</button>

            </div>



            <table border="1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul Buku</th>
                        <th>Nama Pengarang</th>
                        <th>Tahun Terbit</th>
                        <th>Cover Buku</th>
                        <th>Jenis Buku</th>
                        <th>Kondisi Buku</th>
                        <th>Status Buku</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (isset($_POST['bcari'])) {
                        $keyword = $_POST['tcari'];
                        $query = "SELECT * FROM pustaka WHERE idbuku LIKE '%$keyword%' OR judulbuku LIKE '%$keyword%' OR namapenerbit LIKE '%$keyword%' ORDER BY idbuku DESC";
                    } else {
                        $query = "SELECT * FROM pustaka";
                    }
                    $no = 1;
                    // $query = "SELECT * FROM pustaka";
                    $result = mysqli_query($koneksi, $query);
                    while ($row = mysqli_fetch_array($result)) {
                        $idbuku = $row['idbuku'];
                        $judulbuku = $row['judulbuku'];
                        $namapenerbit = $row['namapenerbit'];
                        $tahunterbit = $row['tahunterbit'];
                        $coverbuku = $row['coverbuku'];
                        $jenisbuku = $row['jenisbuku'];
                        $statusbuku = $row['statusbuku'];
                        $kondisi = $row['kondisi'];
                    ?>
                        <tr>
                            <td>
                                <?php echo $no++; ?>
                            </td>
                            <td>
                                <?php echo $judulbuku; ?>
                            </td>
                            <td>
                                <?php echo $namapenerbit; ?>
                            </td>
                            <td>
                                <?php echo $tahunterbit; ?>
                            </td>
                            <td>
                                <?php echo "<img src='$row[coverbuku]' width = '150px'  height = '120px'"; ?></td>
                            <td>
                                <?php echo $jenisbuku; ?>
                            </td>
                            <td>
                                <?php echo $statusbuku; ?>
                            </td>
                            <td>
                                <?php echo $kondisi; ?>
                            </td>
                            <td>
                                <a class="button-input-edit" href="../pages/form-edit.php?idbuku=<?php echo $row['idbuku']; ?>">Edit</a>
                                <a class="button-input-hapus" href="../proses/proseshapus.php?idbuku=<?php echo $row['idbuku']; ?>" onclick="return confirm('Yakin Ingin Menghapus Data Ini??')">Hapus</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>

        </div>
    </form>
</body>

</html>