<?php 
include '../controller/c_client.php';

$id_admin = $_POST['id_admin'];
$nama = $_POST['nama'];
$tgl_lahir = $_POST['tgl_lahir'];

$insert = new client;
$insert->Tambah($nama, $tgl_lahir, $id_admin);
header('location: ../teknisi/client.php')
?>