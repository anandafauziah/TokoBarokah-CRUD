<?php
include 'koneksi.php';
    $kodesupp= $_POST['kodesupp'] ;
    $namasales= $_POST['namasales'] ;
    $namaperusahaan= $_POST['namaperusahaan'] ;
    $tlpsales= $_POST['tlpsales'] ;
    $tlpkantor= $_POST['tlpkantor'] ;
    $email= $_POST['email'] ;
$sql = "update supplier set namasales ='$namasales',namaperusahaan = '$namaperusahaan',
tlpsales= '$tlpsales', tlpkantor = '$tlpkantor', email = '$email' where kodesupp='$kodesupp'";

mysqli_query($conn,$sql);
?>