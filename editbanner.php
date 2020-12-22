<?php
	include "koneksi.php";

	$query_mysql = mysql_query("SELECT * FROM uploadbanner ")or die(mysql_error());

	while($data = mysql_fetch_array($query_mysql)){
	?>

	<html>
<head>
  <title>EDIT BANNER</title><link rel="icon" href="images/dpdri.png" />
	<link rel="stylesheet" type="text/css" href="css/style_edit_galery.css">
</head>
<body>


	<div class="kotak_login">
		<p class="tulisan_login">EDIT FOTO BANNER</p>

			<form action="proseseditbanner.php" method="post" enctype="multipart/form-data" >


			<center><label>BANNER YANG TERPASANG</label></center>
			<img src="<?php echo "filebanner/".$data['nama_file']; ?>" width="55" height="55" class="imged">
			<input type="file" class="form_login" name="file">

			<input type="submit" class="tombol_login" name="upload" value="upload">

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
