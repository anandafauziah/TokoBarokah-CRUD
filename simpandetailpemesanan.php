<?php
    include 'koneksi.php';
    $kode1 = $_POST['kode1'];
    $kodebr = $_POST['kodebr'];
    $hargajual = $_POST['hargajual'];
    $jumlah = $_POST['jumlah'];

    $sqlinsert = "INSERT INTO detailpemesanan VALUES ('$kode1','$kodebr','$hargajual','$jumlah')";
    mysqli_query($conn,$sqlinsert);

?>