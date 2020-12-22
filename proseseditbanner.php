<!DOCTYPE html>
<html>
	<head>

	</head>
	<body>

		<?php
		include 'koneksi.php';
		if($_POST['upload']){

			$ekstensi_diperbolehkan	= array('png','jpg');
			$nama = $_FILES['file']['name'];
			$x = explode('.', $nama);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['file']['size'];
			$file_tmp = $_FILES['file']['tmp_name'];

			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ukuran < 1044070){
					move_uploaded_file($file_tmp, 'filebanner/'.$nama);
					$query = mysql_query("UPDATE uploadbanner SET nama_file='$nama' ");
					if($query){
					echo "<script>alert ('BANNER SUDAH BERHASIL DI GANTI');document.location='indexadmin.php' </script> ";
					}else{
					echo "<script>alert ('GAGAL MENGGANTI BANNER');document.location='indexadmin.php' </script> ";
					}
				}else{
					echo "<script>alert ('UKURAN TIDAK SESUAI');document.location='indexadmin.php' </script> ";
				}
			}else{
					echo "<script>alert ('EKSTENSI TIDAK SESUAI');document.location='indexadmin.php' </script> ";
			}
		}
		?>

	</body>
</html>
