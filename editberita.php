<!DOCTYPE html>
<html lang="en">
<head>
  <title>EDIT BERITA</title><link rel="icon" href="images/dpdri.png" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style_edit_slideshow.css">
</head>
<body>

<div class="container">
  <h1>MENU EDIT BERITA</h1>

  <div class="row">
    <div class="col-sm-4" style="background-color:white;">

      <?php
      	include "koneksi.php";

      	$query_mysql = mysql_query("SELECT * FROM berita WHERE id_file = '1'")or die(mysql_error());

      	while($data = mysql_fetch_array($query_mysql)){
      	?>
      	<div class="kotak_login">
      		<p class="tulisan_login">EDIT BERITA 1 </p>

      			<form action="proseseditberita.php" method="post" enctype="multipart/form-data" >

            <label> ID BERITA </label>
        		<input type="text" name="id" class="form_login" readonly value="<?php echo $data['id_file'] ?>">

      			<center><label>FOTO YANG TERPASANG</label></center>
      			<img src="<?php echo "fileberita/".$data['nama_file']; ?>" width="55" height="55" class="imged">
      			<input type="file" class="form_login" name="file">

            <label> JUDUL BERITA </label>
            <input type="text" name="judul" class="form_login"  value="<?php echo $data['judul'] ?>">

            <label> TANGGAL BERITA </label>
            <input type="text" name="tanggal" class="form_login"  value="<?php echo $data['tanggal'] ?>">

            <label> ISI SINGKAT </label>
            <input type="text" name="isi_singkat" class="form_login"  value="<?php echo $data['isi_singkat'] ?>">

            <label> ISI LENGKAP </label>
            <input type="text" name="isi_lengkap" class="form_login"  value="<?php echo $data['isi_lengkap'] ?>">

      			<input type="submit" class="tombol_login" name="upload" value="upload">

      			<br/>
      			<br/>


      		</form>

      	</div><?php } ?>

    </div>
    <div class="col-sm-4" style="background-color:white;">
      <?php
      	include "koneksi.php";

      	$query_mysql = mysql_query("SELECT * FROM berita WHERE id_file = '2'")or die(mysql_error());

      	while($data = mysql_fetch_array($query_mysql)){
      	?>
      	<div class="kotak_login">
      		<p class="tulisan_login">EDIT BERITA 1 </p>

      			<form action="proseseditberita.php" method="post" enctype="multipart/form-data" >

            <label> ID BERITA </label>
        		<input type="text" name="id" class="form_login" readonly value="<?php echo $data['id_file'] ?>">

      			<center><label>FOTO YANG TERPASANG</label></center>
      			<img src="<?php echo "fileberita/".$data['nama_file']; ?>" width="55" height="55" class="imged">
      			<input type="file" class="form_login" name="file">

            <label> JUDUL BERITA </label>
            <input type="text" name="judul" class="form_login"  value="<?php echo $data['judul'] ?>">

            <label> TANGGAL BERITA </label>
            <input type="text" name="tanggal" class="form_login"  value="<?php echo $data['tanggal'] ?>">

            <label> ISI SINGKAT </label>
            <input type="text" name="isi_singkat" class="form_login"  value="<?php echo $data['isi_singkat'] ?>">

            <label> ISI LENGKAP </label>
            <input type="text" name="isi_lengkap" class="form_login"  value="<?php echo $data['isi_lengkap'] ?>">

      			<input type="submit" class="tombol_login" name="upload" value="upload">

      			<br/>
      			<br/>


      		</form>

      	</div><?php } ?>



    </div>
    <div class="col-sm-4" style="background-color:white;">
      <?php
      	include "koneksi.php";

      	$query_mysql = mysql_query("SELECT * FROM berita WHERE id_file = '3'")or die(mysql_error());

      	while($data = mysql_fetch_array($query_mysql)){
      	?>
      	<div class="kotak_login">
      		<p class="tulisan_login">EDIT BERITA 1 </p>

      			<form action="proseseditberita.php" method="post" enctype="multipart/form-data" >

            <label> ID BERITA </label>
        		<input type="text" name="id" class="form_login" readonly value="<?php echo $data['id_file'] ?>">

      			<center><label>FOTO YANG TERPASANG</label></center>
      			<img src="<?php echo "fileberita/".$data['nama_file']; ?>" width="55" height="55" class="imged">
      			<input type="file" class="form_login" name="file">

            <label> JUDUL BERITA </label>
            <input type="text" name="judul" class="form_login"  value="<?php echo $data['judul'] ?>">

            <label> TANGGAL BERITA </label>
            <input type="text" name="tanggal" class="form_login"  value="<?php echo $data['tanggal'] ?>">

            <label> ISI SINGKAT </label>
            <input type="text" name="isi_singkat" class="form_login"  value="<?php echo $data['isi_singkat'] ?>">

            <label> ISI LENGKAP </label>
            <input type="text" name="isi_lengkap" class="form_login"  value="<?php echo $data['isi_lengkap'] ?>">

      			<input type="submit" class="tombol_login" name="upload" value="upload">

      			<br/>
      			<br/>


      		</form>

      	</div><?php } ?>


    </div>
    </div>
  </div>
</div>

</body>
</html>
