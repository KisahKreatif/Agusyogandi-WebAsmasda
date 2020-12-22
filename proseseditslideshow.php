<!DOCTYPE html>
<html>
	<head>

	</head>
	<body>

		<?php
		include 'koneksi.php';
      $id = $_POST['id'];

			$nama = $_FILES['nama_file_baru']['name'];
			$file_tmp = $_FILES['nama_file_baru']['tmp_name'];



					move_uploaded_file($file_tmp, 'fileslideshow/'.$nama);
					$query = mysql_query("UPDATE slied_show SET id_file='$id',nama_file='$nama' WHERE id_file='$id' ");
					if($query){
					echo "<script>alert ('BERHASIL DI EDIT');document.location='indexadmin.php' </script> ";
        }else{
					echo "<script>alert ('PROSES EDIT GAGAL , HARAP COBA KEMBALI');document.location='indexadmin.php' </script> ";
        }


		?>


	</body>
</html>
