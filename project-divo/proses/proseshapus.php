<?php

    include '../koneksi.php';
    $idbuku = $_GET['idbuku'];
    $proseshapus = "DELETE FROM `pustaka` WHERE idbuku = '$idbuku'";
    $hasilhapus = mysqli_query($koneksi,$proseshapus);
    if ($hasilhapus) {
        echo "<script>
        alert('data berhasil dihapus');
        window.location='../pages/show.php';
        </script>";
    }

?>