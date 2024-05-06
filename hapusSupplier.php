<?php
include 'koneksi.php';

$kodesupp=$_POST['kodesupp'];
$sql = "delete from  supplier where kodesupp ='".$kodesupp."'";
mysqli_query($conn,$sql);
