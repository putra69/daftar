<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
include"koneksi.php";
$baca=mysql_query("select * from daftar_siswa order by nama");
$bacadt=mysql_fetch_array($baca);
?>
<style type="text/css">
*{margin:0;
padding:0;}
#container{width:850px;
margin:auto;}
td {font-size:18px; font-family:Verdana;}
.style4 {color: #0033CC;
font-size:14px;
font-weight:bold;}
.style6 {color: #0033FF;
font-size:12px;}
a:link{text-decoration:none;}
button{ width:55px;
cursor:pointer;}
</style>
<body class="">
<div id="container">
<h1 align="center">Data Siswa</h1>
<p align="right"><?php echo date("l, j F Y");?></p>
<table width="850" border="1" rules="all">
  <tr>
    <td bgcolor="#00FFFF"><div align="center" class="style4">Nama</div></td>
    <td bgcolor="#00FFFF"><div align="center" class="style4">Kelas</div></td>
    <td bgcolor="#00FFFF"><div align="center" class="style4">Alamat</div></td>
    <td bgcolor="#00FFFF"><div align="center" class="style4">Telepon</div></td>
    <td colspan="2" bgcolor="#00FFFF"><div align="center" class="style4">Proses</div></td>
  </tr>
  <tr>
    <td colspan="4" valign="middle">&nbsp;</td>
    <td colspan="2" align="center"><a href="form_dftr.php"><input type="button" value="Input Data" /></a></td>
  </tr>
   <?php while($bacadt=mysql_fetch_array($baca)){?>
  <tr>
  <td bgcolor="#FFFFFF"><div align="left" class="style6"><?php echo"$bacadt[nama]";?></div></td>
	<td bgcolor="#FFFFFF" valign="middle"><div align="center" class="style6"><?php echo"$bacadt[kelas]";?></div></td>
    <td bgcolor="#FFFFFF" valign="middle"><div align="left" class="style6"><?php echo"$bacadt[alamat]";?></div></td>
    <td bgcolor="#FFFFFF" valign="middle"><div align="center" class="style6"><?php echo"$bacadt[telepon]";?></div></td> 
    <td><div align="center" class="style6"><a href="edit.php?id=<?php echo $bacadt[id];?>">Edit</a></div></td>
	<td><div align="center" class="style6"><a href="hapus.php?id=<?php echo $bacadt[id]; ?>"  onclick="return tanya()">Delete</a></div></td>
  </tr>
  <?php }?>
</table>
</div>
<script language="javascript">
function tanya()
{
if(confirm('data ingin dihapus?'))
	{
	return true;
	}
	else{
	return false;
	}
}
</script>
</body>
</html>
