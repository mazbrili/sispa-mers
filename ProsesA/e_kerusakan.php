<?php 
include '../controller/c_kerusakan.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$kett = $_POST['kett'];

$update = new kerusakan;
$update->Editkerusakan($id, $nama, $kett);

header('location: ../admin/kerusakan.php');
?>