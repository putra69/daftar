<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<html>
<body>
<?php
include"koneksi.php";
$nama=$_POST[nama];
$kelas=$_POST[kelas];
$telepon=$_POST[telepon];
$alamat=$_POST[alamat];
$kirim=$_POST[kirim];
echo"<br>";

if(isset($kirim))
{
	if($nama==""){
	echo"<script>
			window.alert('Nama belum diisi');
			window.location='form_dftr.php';
			</script>";}
	else if($kelas==""){
	echo"<script>
			window.alert('Kelas belum diisi');
			window.location='form_dftr.php';
			</script>";}
	else if($alamat==""){
	echo"<script>
			window.alert('Alamat belum diisi');
			window.location='form_dftr.php';
			</script>";}
	else if($telepon==""){
	echo"<script>
			window.alert('Telephon belum diisi');
			window.location='form_dftr.php';
			</script>";}
	else {mysql_query("insert into daftar_siswa values('','$nama','$kelas','$alamat','$telepon')");
		echo"<script>
			window.alert('Data Terkirim');
			window.location='form_dftr.php';
			</script>";
		}
}
else{
echo"<script>
window.alert('Gagal');
window.location='form_dftr.php';
</script>";
}

?>
</body>
</html>
</body>
</html>
