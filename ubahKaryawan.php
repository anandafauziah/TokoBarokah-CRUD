<?php
include 'koneksi.php';
   $kodekry= $_POST['kodekry'] ;
   $namakry= $_POST['namakry'] ;
   $jabatan= $_POST['jabatan'] ;
   $tlpkry=$_POST['tlpkry'] ;
   $emailkry= $_POST['emailkry'] ;  
   $passwordkry= $_POST['passwordkry'] ;  
$sql = "update karyawan set 
namakry ='$namakry',jabatan = '$jabatan',tlpkry= '$tlpkry', 
emailkry = '$emailkry',passwordkry = '$passwordkry' where kodekry='$kodekry'";

mysqli_query($conn,$sql);
?>