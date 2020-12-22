<!DOCTYPE html>
<html>
	<head>

	</head>
	<body>

		<?php
		include 'koneksi.php';
		if($_POST['upload']){
      $id = $_POST['id'];
      $judul_ = $_POST['judul'];
      $tanggal_ = $_POST['tanggal'];
      $isi_singkat_ = $_POST['isi_singkat'];
      $isi_lengkap_ = $_POST['isi_lengkap'];
			$ekstensi_diperbolehkan	= array('png','jpg');
			$nama = $_FILES['file']['name'];
			$x = explode('.', $nama);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['file']['size'];
			$file_tmp = $_FILES['file']['tmp_name'];

			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ukuran < 1044070){
					move_uploaded_file($file_tmp, 'fileberita/'.$nama);
					$query = mysql_query("UPDATE berita SET judul='$judul_',tanggal='$tanggal_',isi_singkat='$isi_singkat_',isi_lengkap='$isi_lengkap_',nama_file='$nama' WHERE id_file='$id'");
					if($query){
					echo "<script>alert ('EDIT BERHASIL');document.location='indexadmin.php' </script> ";
					}else{
					echo "<script>alert ('GAGAL MENGEDIT');document.location='indexadmin.php' </script> ";
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
