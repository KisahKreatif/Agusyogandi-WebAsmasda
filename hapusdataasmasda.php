<?php
include 'koneksi.php';
$nik = $_GET['nik'];
mysql_query("DELETE FROM asmasda WHERE nik='$nik'")or die(mysql_error());

	echo "<script>alert ('DATA SUDAH DIHAPUS');document.location='indexadmin.php' </script> ";
?>
