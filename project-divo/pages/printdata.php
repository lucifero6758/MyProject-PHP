<?php

    include '../koneksi.php';
    header("Content-type: application/ms-excel");
	header("Content-Disposition: attachment; filename=Data Perpustakaan.xls");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <title>Homepage</title> -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/tabel.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <table border="1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul Buku</th>
                    <th>Nama Pengarang</th>
                    <th>Nama Penerbit</th>
                    <th>Tahun Terbit</th>
                    <th>Jenis Buku</th>
                    <th>Status Buku</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $query = "SELECT * FROM pustaka";
                $result = mysqli_query($koneksi, $query);
                while ($row = mysqli_fetch_array($result)) {
                    $idbuku = $row['idbuku'];
                    $judulbuku = $row['judulbuku'];
                    $namapenerbit = $row['namapenerbit'];
                    $tahunterbit = $row['tahunterbit'];
                    $jenisbuku = $row['jenisbuku'];
                    $statusbuku = $row['statusbuku'];
                    $kondisi = $row['kondisi'];
                ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $judulbuku; ?></td>
                        <td><?php echo $namapenerbit; ?></td>
                        <td><?php echo $tahunterbit; ?></td>
                        <td><?php echo $jenisbuku; ?></td>
                        <td><?php echo $statusbuku; ?></td>
                        <td><?php echo $kondisi; ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>

    </div>
    </section>
    <script></script>
</body>

</html>