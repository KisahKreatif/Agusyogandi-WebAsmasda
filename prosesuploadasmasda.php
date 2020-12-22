<?php
   require_once("koneksi.php");

   date_default_timezone_set('Asia/Jakarta');
   $tanggal = date("Y-m-d H:i:s");
   $nama = $_POST['nama'];
   $nik = $_POST['nik'];
   $email = $_POST['email'];
   $kota = $_POST['kota'];
   $aspirasi = $_POST['aspirasi'];



       $simpan = mysql_query("INSERT INTO asmasda (tanggal , nama , nik , email , kota , aspirasi )
       VALUES('$tanggal','$nama','$nik','$email','$kota','$aspirasi')");
       if($simpan) {?>
         <link rel="stylesheet" href="css/stylepopup.css" type="text/css" />
         <div id="popup">
         			<div class="window">
         				<a href="asmasda.php" class="close-button" title="Close">X</a>
         				<h1>BERHASIL !!!!</h1>
         				<p>data berhasil di input <br/>
         				Untuk menutup jendela ini, klik tombol close di kanan atas</p>
         			</div>
         		</div>
       <?php } else {
         echo "<div align='center'>Proses Gagal! <a href='asmasda.php'>klik</a> untuk kembali/div>";
   }
?>
