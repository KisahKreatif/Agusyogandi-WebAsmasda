<?php

   $hostname  = "localhost";
   $username  = "root";
   $password  = "";
   $dbname  = "dpd_ri";
   $db = mysql_connect($hostname, $username, $password) or die ('Koneksi Gagal! ');
   mysql_select_db($dbname);

?>
