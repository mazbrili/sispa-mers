<?php  
include "../controller/c_Rekam.php";
$id_client = $_GET['id_client'];
$hapus = new Rekam;

$id_riwayat = $_GET['id_riwayat'];
if (!empty($id_riwayat)) {
	$hapus->Hapus($id_riwayat);
	header('location: ../admin/riwayatrm.php?id_client='.$id_client);
} else {
	header('location: ../admin/riwayatrm.php');
}
?>