<?php  
/**
 * 
 */
class kerusakan
{
	
	function TampilSemua()
	{
		include "../koneksi/koneksi.php";
		$query = mysqli_query($con, "SELECT * from ds_kerusakan");
		$i = 1;
		while($d = mysqli_fetch_array($query))
		{
			$data[$i]['id'] = $d['id'];
			$data[$i]['nama'] = $d['nama'];
			$data[$i]['kett'] = $d['kett'];
			$i++;
		}
		return $data;
	}

	function Insertkerusakan($nama, $kett){
		include "../koneksi/koneksi.php";
		$query = mysqli_query($con, "INSERT into ds_kerusakan ( nama, kett)
			values('$nama', '$kett')");
	}

	function Hapuskerusakan($id)
	{
		include "../koneksi/koneksi.php";
		$query = mysqli_query($con, "DELETE FROM ds_kerusakan WHERE id = '$id'");
	}

	function Editkerusakan($id,$nama,$kett)
	{
		include "../koneksi/koneksi.php";
		$query = mysqli_query($con, "UPDATE ds_kerusakan set nama='$nama',kett='$kett' WHERE id='$id'");
	}

	function TampilSatuData($id)
	{
		include "../koneksi/koneksi.php";
		$query = mysqli_query($con, "SELECT * FROM ds_kerusakan WHERE id = '$id'");
		$p = mysqli_fetch_object($query);
		$this->id = $p->id;
		$this->nama = $p->nama;
		$this->kett = $p->kett;
	}

	function TampilAngka()
	{
		include "../koneksi/koneksi.php";
		$query = mysqli_query($con, "SELECT max(id) as nilai FROM ds_kerusakan");
		$g = mysqli_fetch_object($query);
		$this->nilai = $g->nilai;
	}

}
error_reporting(0);
?>