<?php
include 'koneksi.php';
   $kodekry= $_POST['kodekry'] ;
   $namakry= $_POST['namakry'] ;
   $jabatan= $_POST['jabatan'] ;
   $tlpkry=$_POST['tlpkry'] ;
   $emailkry= $_POST['emailkry'] ;  
   $passwordkry= $_POST['passwordkry'] ;  
$sql = "insert into karyawan values('$kodekry','$namakry','$jabatan','$tlpkry','$emailkry','$passwordkry')";
mysqli_query($conn,$sql);
?>