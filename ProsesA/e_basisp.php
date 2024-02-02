<?php 
include '../controller/c_BasisP.php';

$id = $_POST['id'];
$id_kerusakan = $_POST['id_kerusakan'];
$id_gejala = $_POST['id_gejala'];
$ds = $_POST['ds'];

$update = new BasisP;
$update->EditBasis($id,$id_kerusakan,$id_gejala,$ds);
/*header('location: ../admin/basisp.php');*/
?>