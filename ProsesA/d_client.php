<?php 
include '../controller/c_client.php';

$hapus = new client;

$id_client = $_GET['id_client'];
if (!empty($id_client)) {
	$hapus->Hapus($id_client);
	header('location: ../teknisi/client.php');
} else {
	header('location: ../teknisi/client.php');
}
?>