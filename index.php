<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.10.5, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo5.png" type="image/x-icon">
  <meta name="description" content="">


  <title>HOME</title>
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
<!--css navbar-->
  <style>
    * {
        margin:0;
        padding:0;}
    nav {
        margin: 0px 0px -38px;
        text-align: center;
        width: 100%;
        font-family: arial;}
    nav ul {
        background:#00BFFF;
        padding: 0 20px;
        list-style: none;
        position: relative;
        display: inline-table;
        width: 100%;}
    nav ul li{
        float:left;
      padding: 0 20px;
    }
    nav ul li:hover{
        background:;
    }
    nav ul li:hover a{
        color:#000; }
    nav ul li a{
        display: block;
        padding: 20px;
        color: #fff;
        text-decoration: none;}
    </style>
<!--tutup css navbar-->
</head>
<body>
<!--navbar -->
  <nav>
    <ul>
      <div style="padding: 5px"></div>
        <img src="images/dpdri.png"  width="45" height="40"align=left >
        <li><a href="#"><b><font size="3">HOME</font></b></a></li>
        <li><a href="gallery.php"><b><font size="3">GALLERY</a></li>
        <li><a href="asmasda.php"><b><font size="3">ASMASDA</a></li>
        <li><a href="jdih.html"><b><font size="3">JDIH</a></li>
        <li><a href="ppid.html"><b><font size="3">PPID</a></li>
        <li><a href="aboutus.html"><b><font size="3">ABOUT US</a></li>

    </ul>
  </nav>
<!--tutup navbar -->
<!--banner -->
<section class="header3 cid-rvaNGlrOdB mbr-parallax-background" id="header3-8">
    <div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(35, 35, 35);">
      <?php
        include 'koneksi.php';
      $data = mysql_query("select * from uploadbanner");
      while($d = mysql_fetch_array($data)){
      ?>
      <tr>
        <td>
          <img src="<?php echo "filebanner/".$d['nama_file']; ?>"width="1350" height="600"align=justify>
        </td>
      </tr>
      <?php } ?>
    </div>

    <div class="container">
        <div class="media-container-row">
            <div class="mbr-figure" style="width: 100% ">
              <div id="demo" class="carousel slide" data-ride="carousel">

                  <!-- Indicators -->
                  <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                  </ul>

                  <!-- The slideshow -->
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <?php
                        include 'koneksi.php';
                      $data = mysql_query("select * from slied_show WHERE id_file = '1' ");
                      while($d = mysql_fetch_array($data)){
                      ?>
                      <tr>
                        <td>
                          <img src="<?php echo "fileslideshow/".$d['nama_file']; ?>"width="100" height="250">
                        </td>
                      </tr>
                      <?php } ?>
                    </div>
                    <div class="carousel-item">
                      <?php
                        include 'koneksi.php';
                      $data = mysql_query("select * from slied_show WHERE id_file = '2' ");
                      while($d = mysql_fetch_array($data)){
                      ?>
                      <tr>
                        <td>
                          <img src="<?php echo "fileslideshow/".$d['nama_file']; ?>"width="100" height="250">
                        </td>
                      </tr>
                      <?php } ?>
                    </div>
                    <div class="carousel-item">
                      <?php
                        include 'koneksi.php';
                      $data = mysql_query("select * from slied_show WHERE id_file = '3' ");
                      while($d = mysql_fetch_array($data)){
                      ?>
                      <tr>
                        <td>
                          <img src="<?php echo "fileslideshow/".$d['nama_file']; ?>"width="100" height="250">
                        </td>
                      </tr>
                      <?php } ?>
                    </div>
                  </div>

                  <!-- Left and right controls -->
                  <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                  </a>
                  <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                  </a>
              </div>
            </div>

            <div class="media-content">
                <h1 class="mbr-section-title mbr-white pb-3 mbr-fonts-style display-1">
                    SELAMAT
                </h1>

                <h1 class="mbr-section-title mbr-white pb-3 mbr-fonts-style display-1">
                    DATANG
                </h1>

                <div class="mbr-section-text mbr-white pb-3 ">
                    <p class="mbr-text mbr-fonts-style display-5">
                        di Offical Website DPD RI Provinsi Jawa Barat
                      </p>
                </div>

            </div>
        </div>
    </div>
  </section>
<!--tutup banner -->
<!--berita -->
<section class="engine"><a href="#"></a></section><section class="features3 cid-rvaO7JII5S" id="features3-9">
    <div class="container">
        <div class="media-container-row">
            <div class="card p-3 col-12 col-md-6 col-lg-4">
              <?php
                include "koneksi.php";

                $query_mysql = mysql_query("SELECT * FROM berita WHERE id_file = '1'")or die(mysql_error());

                while($data = mysql_fetch_array($query_mysql)){
                ?>
                <div class="card-wrapper">
                    <div class="card-img">
                      <img src="<?php echo "fileberita/".$data['nama_file']; ?>"width="130" height="300">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title mbr-fonts-style display-7">
                          <?php echo $data['judul'] ?>
                        </h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                            <?php echo $data['tanggal'] ?>
                        </p>
                        <p class="mbr-text mbr-fonts-style display-7">
                              <?php echo $data['isi_singkat'] ?>
                        </p>
                    </div>
                    <div class="mbr-section-btn text-center">
                        <a href="lanjutberita1.php" class="btn btn-primary display-4">
                            Baca Selengkapnya..
                        </a>
                    </div>
                </div><?PHP } ?>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-4">
              <?php
                include "koneksi.php";

                $query_mysql = mysql_query("SELECT * FROM berita WHERE id_file = '2'")or die(mysql_error());

                while($data = mysql_fetch_array($query_mysql)){
                ?>
                <div class="card-wrapper">
                    <div class="card-img">
                      <img src="<?php echo "fileberita/".$data['nama_file']; ?>" width="130" height="300">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title mbr-fonts-style display-7">
                          <?php echo $data['judul'] ?>
                        </h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                            <?php echo $data['tanggal'] ?>
                        </p>
                        <p class="mbr-text mbr-fonts-style display-7">
                              <?php echo $data['isi_singkat'] ?>
                        </p>
                    </div>
                    <div class="mbr-section-btn text-center">
                        <a href="lanjutberita2.php" class="btn btn-primary display-4">
                            Baca Selengkapnya..
                        </a>
                    </div>
                </div><?PHP } ?>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-4">
              <?php
                include "koneksi.php";

                $query_mysql = mysql_query("SELECT * FROM berita WHERE id_file = '3'")or die(mysql_error());

                while($data = mysql_fetch_array($query_mysql)){
                ?>
                <div class="card-wrapper">
                    <div class="card-img">
                      <img src="<?php echo "fileberita/".$data['nama_file']; ?>"width="130" height="300">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title mbr-fonts-style display-7">
                          <?php echo $data['judul'] ?>
                        </h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                            <?php echo $data['tanggal'] ?>
                        </p>
                        <p class="mbr-text mbr-fonts-style display-7">
                              <?php echo $data['isi_singkat'] ?>
                        </p>
                    </div>
                    <div class="mbr-section-btn text-center">
                        <a href="lanjutberita3.php" class="btn btn-primary display-4">
                            Baca Selengkapnya..
                        </a>
                    </div>
                </div><?PHP } ?>
            </div>


        </div>
    </div>
</section>
<!--tutup berita -->
<br></br><center>
<!--footer-->
<section once="footers" class="cid-rvaOac0EKF" id="footer7-a">

    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="row row-links">
                <ul class="foot-menu">

                <li class="foot-menu-item mbr-fonts-style display-7">
                        <a class="text-white mbr-bold" href="gallery.php" >GALLERY</a>
                    </li><li class="foot-menu-item mbr-fonts-style display-7">
                        <a class="text-white mbr-bold" href="asmasda.php" >ASMASDA</a>
                    </li><li class="foot-menu-item mbr-fonts-style display-7">
                        <a class="text-white mbr-bold" href="jdih.html" >JDIH</a>
                    </li><li class="foot-menu-item mbr-fonts-style display-7">
                        <a class="text-white mbr-bold" href="ppid.html" >PPID</a>
                    </li><li class="foot-menu-item mbr-fonts-style display-7">
                        <a class="text-white mbr-bold" href="aboutus.html" >ABOUT US</a>
                    </li></ul>
            </div>


            <div class="row row-copirayt">
                <p class="mbr-text mb-0 mbr-fonts-style mbr-white align-center display-7">
                    © Copyright 2019
                </p>
            </div>
        </div>
    </div>
</section>
<!--tutup footer-->


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/theme/js/script.js"></script>

</body>
</html>
