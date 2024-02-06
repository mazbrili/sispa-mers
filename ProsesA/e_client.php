<?php 
include '../controller/c_client.php';

$id_client = $_POST['id_client'];
$nama = $_POST['nama'];
$tgl_lahir = $_POST['tgl_lahir'];

$update = new client;
$update->Edit($id_client, $nama,$tgl_lahir);

header('location: ../teknisi/client.php');
?>