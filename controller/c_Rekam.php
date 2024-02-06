<?php 
/**
 * 
 */
class Rekam
{
	
	function TampilRclient($id_client)
	{
		include '../koneksi/koneksi.php';
		$data = [];  // Initialize the array
		$query = mysqli_query($con, "SELECT * FROM riwayat where id_client = '$id_client'");
		$i = 0;
		while($d = mysqli_fetch_array($query))
		{
			$data[$i]['id_client'] = $d['id_client'];
			$data[$i]['id_riwayat'] = $d['id_riwayat'];
			$data[$i]['tanggal'] = $d['tanggal'];
			$data[$i]['gejala'] = $d['gejala'];
			$data[$i]['kerusakan'] = $d['kerusakan'];
			$data[$i]['nilai'] = $d['nilai'];
			$data[$i]['persentase'] = $d['persentase'];
			$i++;
		}
		return $data;
	}

	function Hapus($id_riwayat)
	{
		include '../koneksi/koneksi.php';
		$query = mysqli_query($con,"DELETE FROM riwayat WHERE id_riwayat = '$id_riwayat'");
	}
}
error_reporting(0);
?>