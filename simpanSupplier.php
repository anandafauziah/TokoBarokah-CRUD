<?php
include 'koneksi.php';
   $kodesupp= $_POST['kodesupp'] ;
   $namasales= $_POST['namasales'] ;
   $namaperusahaan= $_POST['namaperusahaan'] ;
   $tlpsales= $_POST['tlpsales'] ;
   $tlpkantor= $_POST['tlpkantor'] ;
   $email= $_POST['email'] ;
    
$sql = "insert into supplier values('$kodesupp','$namasales','$namaperusahaan','$tlpsales','$tlpkantor','$email')";
mysqli_query($conn,$sql);
?>