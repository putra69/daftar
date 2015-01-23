<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<style type="text/css">
td {font-size:18px; font-family:Verdana;}
body {background-image: url(WAYANG.jpg)}
td {font-size:18px; font-family:Verdana;}
</style>
<body class="">
<?php
include"koneksi.php";
if(isset($_GET[id]))
{
$id=$_GET[id];
}
else
{
die("error,tidak ada id yang dipilih");
}
$baca=mysql_query("select * from daftar_siswa where id='$id'");
$bacadt=mysql_fetch_array($baca);
$nama=$_POST[nama];
$kelas=$_POST[kelas];
$alamat=$_POST[alamat];
$telepon=$_POST[telepon];
$proses=$_POST[proses];

if(isset($proses))
{
$edit=mysql_query("update daftar_siswa set nama='$nama',kelas='$kelas',alamat='$alamat',telepon='$telepon' where id='$id'");
if($edit)
{
 echo "<script>
 		window.alert('data telah teredit');
			window.location='lihatdata.php';
 			</script>";
} else {
 	echo "<script>
 		window.alert('gagal');
			window.location='lihatdata.php';
 			</script>";
}
}
?>
<h1 align="center">EDIT DATA SISWA</h1>
<form  action="" method="post">
<table width="41%" height="261" border="0" align="center" cellpadding="5" cellspacing="5">
  <tr>
    <td width="46%" ><div align="center">Nama</div></td>
    <td width="54%"><input type="text" name="nama" id="nama" value="<?php echo"$bacadt[nama]"; ?>" required /></td>
  </tr>
  <tr>
    <td><div align="center">Kelas</div></td>
    <td><input  type="text" name="kelas" value="<?php echo"$bacadt[kelas]";?>" required ></td>
  </tr>
  <tr>
    <td><div align="center">Alamat</div></td>
    <td><input type="text" name="alamat" value="<?php echo"$bacadt[alamat]";?> " required /></td>
  </tr>
  <tr>
    <td><div align="center">Telephon</div></td>
    <td><input name="telepon" id="komentar" value="<?php echo"$bacadt[telepon]";?>" required ></td>
  </tr>
  <tr>
    <td><div align="center"></div></td>
    <td><input  type="submit" value="proses" name="proses" /> </td>
  </tr>
</table>
</form>
</body>
</html>