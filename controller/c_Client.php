<?php 
/**
 * 
 */
class client
{
	
	function TampilSemua($id_admin)
	{
		include "../koneksi/koneksi.php";
		$query = mysqli_query($con, "SELECT * FROM client WHERE id_admin='$id_admin'");
		$i = 0;
		while($d = mysqli_fetch_array($query))
		{
			$data[$i]['id_client'] = $d['id_client'];
			$data[$i]['nama'] = $d['nama'];
			$data[$i]['tgl_lahir'] = $d['tgl_lahir'];
			$i++;
		}
		return $data;
	}

	function Tambah($nama, $tgl_lahir, $id_admin)
	{
		include "../koneksi/koneksi.php";
		$query = mysqli_query($con, "INSERT INTO client (nama, tgl_lahir, id_admin)
			values('$nama', '$tgl_lahir', '$id_admin')");
	}

	function Hapus($id_client)
	{
		include "../koneksi/koneksi.php";
		$query - mysqli_query($con,"DELETE FROM client WHERE id_client = '$id_client'");
	}

	function Edit($id_client, $nama, $tgl_lahir)
	{
		include "../koneksi/koneksi.php";
		$query = mysqli_query($con,"UPDATE client set nama = '$nama', tgl_lahir = '$tgl_lahir' WHERE id_client = '$id_client'");
	}

	function TampilSatuData($id_client)
	{
		include "../koneksi/koneksi.php";
		$query = mysqli_query($con, "SELECT * FROM client WHERE id_client = '$id_client'");
		$g = mysqli_fetch_object($query);
		$this->nama = $g->nama;
		$this->tgl_lahir = $g->tgl_lahir;
	}
}
error_reporting(0);
?>