<!DOCTYPE html>
<html>
<head>
<title>
lat php
</title>
</head>

<body>
<form method="post" action="latoption.php">
<select name="kelas">
<option id="kelas"  value="7a">7a</option>
<option id="kelas"  value="7bsss">7b</option>
<option id="kelas"  value="7c">7c</option>
<option id="kelas"  value="7d">7d</option>
</select>
<input type="submit" value="ok" name="ok"/>
</form>
<?php
$kelas=$_POST['kelas'];
echo $kelas;
?>
</body>
</html>