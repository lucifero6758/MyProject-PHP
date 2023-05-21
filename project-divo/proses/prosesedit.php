<?php
    include '../koneksi.php';

    if (isset($_POST['submit'])) {
        $idbuku = $_POST['idbuku'];
        $judulbuku = $_POST['judulbuku'];
        $namapenerbit = $_POST['namapenerbit'];
        $tahunterbit = $_POST['tahunterbit'];
        //coverbuku
        $jenisbuku = $_POST['jenisbuku'];
        $statusbuku = $_POST['statusbuku'];
        $kondisi = $_POST['kondisi'];
        
        // $coverbuku = $_FILES['coverbuku'];
        // $upload = $_FILES['coverbuku']['tmp_name'];
        // $namagambar = $_FILES['coverbuku']['name'];

        // $imgsimpan = "../pages/images/".$namagambar; //yang dimasukan kedalam fungsi update atau input supaya tersimpan ke dalam folder images dan gambar tersebut dapat ditampilkan
        // move_uploaded_file($upload,'../pages/images/'.$namagambar);

        $prosesedit = "UPDATE `pustaka` SET idbuku='$idbuku',judulbuku='$judulbuku',namapenerbit='$namapenerbit',tahunterbit='$tahunterbit',jenisbuku='$jenisbuku',statusbuku='$statusbuku',kondisi='$kondisi'";
        $prosesedit .= "WHERE idbuku='$idbuku'";
        $hasiledit = mysqli_query($koneksi, $prosesedit);

        if ($hasiledit) {
            echo "<script>
            alert('data berhasil diedit');
            window.location='../pages/show.php';
            </script>";
        } else {
            echo "Terjadi kesalahan dalam penyimpanan data";
        }
    }
?>
