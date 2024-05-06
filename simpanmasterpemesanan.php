<?php
include 'koneksi.php';

$kodepemesanan= $_POST['kodepemesanan'] ;
$tanggal= $_POST['tanggal'] ;
$karyawan= $_POST['karyawan'] ;
$supplier=$_POST['supplier'] ;
$keterangan= $_POST['keterangan'] ; 
$total= $_POST['total'] ; 

$sqlkry = "SELECT kodekry FROM karyawan WHERE namakry = '$karyawan'";
$row = mysqli_fetch_assoc(mysqli_query($conn, $sqlkry));
$kodekry = $row['kodekry'];

$sql = "insert into masterpemesanan values
('$kodepemesanan','$tanggal','$kodekry','$supplier', '$keterangan', '$total')";
mysqli_query($conn,$sql);

?>