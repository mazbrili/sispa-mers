<?php  
include "../controller/c_kerusakan.php";

$hapus = new kerusakan;

$id = $_GET['id'];
if (!empty($id)) {
	$hapus->Hapuskerusakan($id);
	header('location: ../admin/kerusakan.php');
} else {
	header('location: ../admin/kerusakan.php');
}
?>