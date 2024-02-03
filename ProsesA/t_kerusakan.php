<?php
include "../controller/c_kerusakan.php";

$nama = $_POST['nama'];
$kett = $_POST['kett'];

$insert = new kerusakan;
$insert->Insertkerusakan($nama, $kett);
header('location: ../admin/kerusakan.php')
?>