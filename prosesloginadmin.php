
<?php
   session_start();
   require_once("koneksi.php");
   $user = $_POST['user'];
   $pass = $_POST['pass'];
   $cekuser = mysql_query("SELECT * FROM admin WHERE user = '$user'");
   $hasil = mysql_fetch_array($cekuser);
   if(mysql_num_rows($cekuser) == 0) {
     echo "<div align='center'>username tidak di ketahui <a href='loginadmin.php'>Back</a></div>";
   } else {
     if($pass <> $hasil['pass']) {
       echo "<div align='center'>Password salah! <a href='loginadmin.php'>Back</a></div>";
     } else {
       $_SESSION['user'] = $hasil['user'];
       $tanggal= mktime(date("m"),date("d"),date("Y"));

       date_default_timezone_set('Asia/Jakarta');
       $jam=date("H:i:s");

      $a = date ("H");
      if (($a>=6) && ($a<=11)){
      	echo "<script>alert ('| Pukul :". $jam." "." SELAMAT PAGI ADMIN');document.location='indexadmin.php' </script> ";
      }
      else if(($a>11) && ($a<=15))
      {
    	echo "<script>alert ('| Pukul :". $jam." "." SELAMAT PAGI ADMIN');document.location='indexadmin.php' </script> ";}
      else if (($a>15) && ($a<=18)){
    	echo "<script>alert ('| Pukul :". $jam." "." SELAMAT SIANG ADMIN');document.location='indexadmin.php' </script> ";}
      else {	echo "<script>alert ('| Pukul :". $jam." "." SELAMAT MALAM ADMIN');document.location='indexadmin.php' </script> ";
      }


     }
   }
?>
