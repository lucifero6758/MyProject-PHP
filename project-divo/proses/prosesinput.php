<?php
    include '../koneksi.php';

    if (isset($_POST['submit'])) {
        // $idbuku = $_POST['idbuku'];
        $judulbuku = $_POST['judulbuku'];
        $namapenerbit = $_POST['namapenerbit'];
        $tahunterbit = $_POST['tahunterbit'];
        $jenisbuku = $_POST['jenisbuku'];
        $statusbuku = $_POST['statusbuku'];
        $kondisi = $_POST['kondisi'];
        
        $coverbuku = $_FILES['coverbuku'];
        $upload = $_FILES['coverbuku']['tmp_name'];
        $namagambar = $_FILES['coverbuku']['name'];

        $imgsimpan = "../pages/img/".$namagambar; //yang dimasukan kedalam fungsi update atau input supaya tersimpan ke dalam folder images dan gambar tersebut dapat ditampilkan
        move_uploaded_file($upload,'../pages/img/'.$namagambar);

        $proses = "INSERT INTO pustaka (judulbuku, namapenerbit, tahunterbit, coverbuku, jenisbuku,statusbuku, kondisi) VALUES ('$judulbuku', '$namapenerbit', '$tahunterbit', '$imgsimpan', '$jenisbuku','$statusbuku', '$kondisi')";
        $prosesinput = mysqli_query($koneksi, $proses);

        if ($prosesinput) {
            echo "<script>
            alert('data berhasil ditambahkan');
            window.location='../pages/show.php';
            </script>";
        } else {
            echo "Terjadi kesalahan dalam penyimpanan data";
        }
    }
?>
