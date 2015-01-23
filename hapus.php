	<?php
	include "koneksi.php";
	$id=$_GET['id'];
	$hapus=mysql_query("delete from daftar_siswa where id='$id'");
	if($hapus)
	{
	echo"<script>
	window.alert('data berhasil dihapus');
	window.location=('lihatdata.php');
	</script>";
	}
	else
	{
	echo"<script>
	window.alert('gagal');
	window.location=('lihatdata.php');
	</script>";
	}
	?>
	