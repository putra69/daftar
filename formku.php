<html>
<head>
<title>form</title>
</head>
<body>
<h1 align="center">Form Input</h1>

<form action="proses.php?act=simpan" method="post">
<table>
<tr>
<td>Nama</td>
<td>:</td>
<td><input type="text" name="nama" maxlength="100" size="100" required /></td>
</tr>
<tr>
<td>Kelas</td>
<td>:</td>
<td><select name="kelas">
<option value="" >pilih kelas</option>
<option value="7A" required >7A</option>
<option value="7B" required >7B</option>
<option value="7C" required >7C</option>
</select></td>
</tr>
<tr>
<td>Alamat</td>
<td>:</td>
<td><textarea rows="5" cols="50" required name="alamat"></textarea></td>
</tr>
<tr>
<td>telepon</td>
<td>:</td>
<td><input type="text" name="telepon" required /></td>
</tr>
<tr>
<td>&nbsp;</td>
<td colspan="2"><input type="submit" name="kirim" value="SIMPAN" />&nbsp;<input type="reset" value="RESET" /></td>
</tr>
</table>
</form>
<hr/>
<?php
include "koneksi.php";
$data=mysql_query("select * from daftar_siswa");
?>
<table cellpadding="1" rules="all" width="50%" align="center" border="1">
<tr bgcolor="#006633" align="center">
<td>No</td>
<td>Nama</td>
<td>Kelas</td>
<td>Alamat</td>
<td>Telepon</td>
<td>Proses</td>
</tr>
<?php
$warnagelap="#CCCCCC";
$warnaputih="#FFFFFF";
$i=1;
while($bacadt=mysql_fetch_array($data))
{
	if($i % 2 ==0)
	{$warna=$warnagelap;}
	else
	{
	$warna=$warnaputih;
	}

?>
<tr bgcolor="<?php echo $warna?>" align="center">
<td><?php echo $i ?></td>
<td><?php echo $bacadt['nama'];?></td>
<td><?php echo $bacadt['kelas'];?></td>
<td><?php echo $bacadt['alamat'];?></td>
<td><?php echo $bacadt['telepon'];?></td>
<td><a href="proses.php?act=delete&id=<?php echo $bacadt['id']?>" onClick="return tanya()">Delete</a>&nbsp;<a href="">Edit</a></td>
</tr>
<?php
$i++;
}
?>
</table>
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

