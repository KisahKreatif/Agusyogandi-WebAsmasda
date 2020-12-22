<?php
	include "koneksi.php";
	$id_file = $_GET['id_file'];
	$query_mysql = mysql_query("SELECT * FROM galery WHERE id_file='$id_file'")or die(mysql_error());

	while($data = mysql_fetch_array($query_mysql)){
	?>

	<html>
<head>
	<title>EDIT GALERY</title><link rel="icon" href="images/dpdri.png" />
	<link rel="stylesheet" type="text/css" href="css/style_edit_galery.css">
</head>
<body>


	<div class="kotak_login">
		<p class="tulisan_login">EDIT FOTO GALLERY</p>

			<form action="proseseditgalery.php" method="post" enctype="multipart/form-data" >
			<label>ID </label>
			<input type="hidden" name="id" class="form_login" value="<?php echo $data['id_file'] ?>">

			<label>NAMA KEGIATAN</label>
			<input type="text" name="namakegiatan" class="form_login" value="<?php echo $data['namakegiatan'] ?>">

			<label>CAPTION KEGIATAN</label>
			<input type="text" name="caption" class="form_login" value="<?php echo $data['caption'] ?>">

			<label>GANTI FOTO</label>
			<img src="<?php echo "filegalery/".$data['nama_file']; ?>" width="75" height="75" class="imged">
			<input type="file" class="form_login" name="nama_file_baru">

			<input type="submit" class="tombol_login" value="UPDATE">

			<br/>
			<br/>
			<center>
				<a class="link" href="indexadmin.php">kembali</a>
			</center>
		</form>

	</div>


</body>
</html>
	<?php } ?>
