<?php 
include '../controller/c_client.php';

$id_client = $_POST['id_client'];
$nama = $_POST['nama'];
$tgl_prod = $_POST['tgl_prod'];

$update = new client;
$update->Edit($id_client, $nama,$tgl_prod);

header('location: ../teknisi/client.php');
?>