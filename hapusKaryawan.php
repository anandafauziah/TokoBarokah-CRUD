<?php
include 'koneksi.php';

$kodekry=$_POST['kodekry'];
$sql = "delete from  karyawan where kodekry ='".$kodekry."'";
mysqli_query($conn,$sql);
