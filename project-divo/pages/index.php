<?php

    include '../koneksi.php';

?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="../css/data.css">
</head>

<body>
    <div class="sidebar">
        <h2>Divo Pratama</h2>
        <ul>
            <li><a href="../pages/index.php">Data Pustaka</a></li>
            <li><a href="../pages/show.php">Show Data</a></li>
        </ul>
    </div>
    <div class="content">
        <!-- Konten halaman -->
        <h2 align="center">Selamat Datang Di  Data Project Perpustakaan</h2>
        <div class="wrap">

            <?php
                $accsql = "SELECT * FROM pustaka";
                if ($show = mysqli_query($koneksi, $accsql)) {
                    $jumlah = mysqli_num_rows($show);

                ?>
                <div class="box">
                    <div class="box-top">
                        <div class="title-flex">
                            <h3 class="box-title">Jumlah Buku Yang Terinput</h3>
                            <br>
                        </div>
                        <p class="user-follow-info"><?php printf(" %d\n", $jumlah) ?></p>
                    </div>
                </div>
                <?php } ?>

                <?php
                $acsql = "SELECT * from pustaka WHERE kondisi <> 'dipinjam'";
                if ($sho = mysqli_query($koneksi, $acsql)) {
                    $jumla = mysqli_num_rows($sho);
                ?>
                <div class="box">
                    <div class="box-top">
                        <div class="title-flex">
                            <h3 class="box-title">Jumlah Buku Yang Tidak Dipinjam</h3>
                            <br>
                        </div>
                        <p class="user-follow-info"><?php printf(" %d\n", $jumla) ?></p>
                    </div>
                </div>
                <?php }?>

                <!-- buku dipinjam -->
                <?php
                $acsql1 = "SELECT * from pustaka WHERE kondisi <> 'tidak dipinjam'";
                if ($sho1 = mysqli_query($koneksi, $acsql1)) {
                    $jumla1 = mysqli_num_rows($sho1);
                ?>
                <div class="box">
                    <div class="box-top">
                        <div class="title-flex">
                            <h3 class="box-title">Jumlah Buku Yang Dipinjam</h3>
                            <br>
                        </div>
                        <p class="user-follow-info"><?php printf(" %d\n", $jumla1) ?></p>
                    </div>
                </div>
                <?php }?>

                <?php
                $sql = "SELECT * from pustaka WHERE statusbuku <> 'baik'";
                if ($tampil = mysqli_query($koneksi, $sql)) {
                    $jum = mysqli_num_rows($tampil);
                ?>
                <div class="box">
                    <div class="box-top">
                        <div class="title-flex">
                            <h3 class="box-title">Jumlah Buku Yang Rusak</h3>
                            <br>
                        </div>
                        <p class="user-follow-info"><?php printf(" %d\n", $jum) ?></p>
                    </div>
                </div>
                <?php }?>

                <?php
                $sql1 = "SELECT * from pustaka WHERE statusbuku <> 'rusak'";
                if ($sh1 = mysqli_query($koneksi, $sql1)) {
                    $juml1 = mysqli_num_rows($sh1);
                ?>
                <div class="box">
                    <div class="box-top">
                        <div class="title-flex">
                            <h3 class="box-title">Jumlah Buku Yang Tidak Rusak</h3>
                            <br>
                        </div>
                        <p class="user-follow-info"><?php printf(" %d\n", $juml1) ?></p>
                    </div>
                </div>
                <?php }?>

            </div>
    </div>
</body>

</html>