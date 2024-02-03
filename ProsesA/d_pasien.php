<?php 
include '../controller/c_Pasien.php';

$hapus = new Pasien;

$id_pasien = $_GET['id_pasien'];
if (!empty($id_pasien)) {
	$hapus->Hapus($id_pasien);
	header('location: ../teknisi/pasien.php');
} else {
	header('location: ../teknisi/pasien.php');
}
?>