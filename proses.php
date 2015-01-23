<?php
include "koneksi.php";

switch($_GET['act'])
{
default : include "formku.php";break;
case "simpan" :
					include "koneksi.php";
					
					if(isset($_POST['kirim']))
					{
					
								$nama=$_POST['nama'];
								$kelas=$_POST['kelas'];
								$alamat=$_POST['alamat'];
								$telepon=$_POST['telepon'];
								if($kelas=='')
								{
									echo "<script>
									window.alert('kelas belum diisi');
									window.location='formku.php';
									</script>";
								}	
								else
								{	
								$simpan=mysql_query("INSERT INTO daftar_siswa VALUES('','$nama','$kelas','$alamat','$telepon')");
								if($simpan)
								{
									echo "<script>
									window.alert('sukses di simpan');
									window.location='formku.php';
									</script>";
								}
								else
								{
								echo "<script>
									window.alert('gagal');
									window.location='formku.php';
									</script>";
								}
								
								}
								
					}
							break; 
							case "delete" :
							include "koneksi.php";
							if(isset($_GET['id']))
							{$id=$_GET['id'];}
							else
							{
						die("error tidak ada id");
						}
						$hapus=mysql_query("delete from daftar_siswa where id='$id' ");
						if($hapus)
						{
						echo "<script>
									window.alert('sukses di hapus');
									window.location='formku.php';
									</script>";
						}
						else
						{
						echo "<script>
									window.alert('gagal');
									window.location='formku.php';
									</script>";
						}
							break;

}

?>
