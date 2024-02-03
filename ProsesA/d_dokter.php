<?php 
include '../controller/c_Admin.php';

$hapus = new Admin;

$id_admin = $_GET['id_admin'];
if (!empty($id_admin)) {
	$hapus->Hapusteknisi($id_admin);
	header('location: ../admin/teknisi.php');
} else {
	header('location: ../admin/teknisi.php');
}
?>