<?php 
include '../controller/c_client.php';

$id_admin = $_POST['id_admin'];
$nama = $_POST['nama'];
$tgl_prod = $_POST['tgl_prod'];

$insert = new client;
$insert->Tambah($nama, $tgl_prod, $id_admin);
header('location: ../teknisi/client.php')
?>