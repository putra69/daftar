<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

</style>
</head>
<style type="text/css">
body {background-image: url(WAYANG.jpg)}
td {font-size:18px; font-family: "Courier New", Courier, monospace;}
table {margin-left: 550px;}
.style1 {
	font-weight: bold;
	color: #0000FF;}
.style6 {color: #0000FF}
.style7 {color: #000000}
a{text-decoration:none;}
</style>
<body  class="">
<h1 align="center">INPUT DATA KARYAWAN   </h1>
<br />
<form action="simpan.php" method="post">
<table width="62%" height="283" border="0" align="left" cellpadding="3" cellspacing="3"  >
<tr><td width="18%"><div align="center" class="style1 style7">
     <div align="left">Nama     </div>
</div></td>
<td width="82%"><input type="text" name="nama" placeholder="Nama Lengkap"  size="55"required /></td></tr>
<tr>
  <td><div class="style7 style1">Gender</div></td>
  <td><input type="radio" name="gender" value="laki" />Laki-Laki<input type="radio" name="gender" value="wanita" />Wanita</td>
</tr>
<tr><td><div class="style1 style7" >
      <div align="left">Golongan</div>
</div></td>

<td><select name="kelas">
<option value="7A">7A</option>
<option value="7B" >7B</option>
<option value="7C">7C</option>
<option value="7D">7D</option>
<option value="7E">7E</option>
<option value="7F">7F</option>
</select></td></tr>
<tr>
  <td><div class="style1 style7">Lulusan</div></td>
  <td><input type="checkbox" name="lulus[]" value="sd" />SD
  	  <input type="checkbox" name="lulus[]" value="smp" />SMP
	  <input type="checkbox" name="lulus[]" value="sma" />SMA
	  <input type="checkbox" name="lulus[]" value="PT" />
	  Perguruan Tinggi</td>
</tr>
<tr><td><div align="center" class="style1 style7"  >
     <div align="left">Alamat     </div>
</div></td>
<td><textarea name="alamat" rows="2" cols="50"></textarea required></td></tr>
<tr><td><div align="center" class="style1 style7"  >
   <div align="left">Telephone   </div>
</div></td><td><input type="text" name="telepon"  placeholder="Telepon" required /></td></tr>
<tr><td>
      <p>&nbsp;</p>
   </td><td><input type="submit" name="kirim" value="Kirim"><a href="lihatdata.php"><input type="button" value="Data" name="data"></a></td></tr>
</table>
</form>
<br />
<br />

</body>
</html>