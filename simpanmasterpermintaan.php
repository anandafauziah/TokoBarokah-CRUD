<?php
include 'koneksi.php';
        $kodeper = $_POST['kodeper'];
        $tanggal = $_POST['tanggal'];
        $konsumen = $_POST['konsumen'];
        $telp = $_POST['telp'];
        $alamat = $_POST['alamat'];
        $keterangan = $_POST['keterangan'];
        $karyawan = $_POST['karyawan'];
        $total = $_POST['total'];

        $sqlkry = "SELECT kodekry FROM karyawan WHERE namakry = '$karyawan'";
        $row = mysqli_fetch_assoc(mysqli_query($conn, $sqlkry));
        $kodekry = $row['kodekry'];

        $sql = "insert into masterpermintaan values
        ('$kodeper','$tanggal','$konsumen','$telp','$alamat','$keterangan','$kodekry',$total)";
        mysqli_query($conn,$sql);
?>

    


<!-- $kodeper= $_POST['kodeper'] ;
$tanggal= $_POST['tanggal'] ;
$konsumen= $_POST['konsumen'] ;
$telp=$_POST['telp'] ;
$alamat= $_POST['alamat'] ;  
$keterangan= $_POST['keterangan'] ; 
$karyawan= $_POST['karyawan'] ;
$total= $_POST['total'] ; 
$sql = "insert into masterpermintaan values
('$kodeper','$tanggal','$konsumen','$telp','$alamat','$keterangan','$karyawan',$total)";
mysqli_query($conn,$sql); -->