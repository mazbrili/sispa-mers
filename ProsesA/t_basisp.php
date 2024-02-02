<?php 
include '../controller/c_BasisP.php';

$id_kerusakan = $_POST['id_kerusakan'];
$id_gejala = count($_POST['id_gejala']);
$ds = count($_POST['ds']);

$insert = new BasisP;
$insert->Cek($id_kerusakan, $id_gejala, $ds);
?>