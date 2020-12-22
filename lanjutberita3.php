<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v4.10.5, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.10.5, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo5.png" type="image/x-icon">
  <meta name="description" content="">

  <title>BERITA 1</title>
  <link rel="stylesheet" href="etc5/assets/tether/tether.min.css">
  <link rel="stylesheet" href="etc5/assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="etc5/assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="etc5/assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="etc5/assets/theme/css/style.css">
  <link rel="stylesheet" href="etc5/assets/mobirise/css/mbr-additional.css" type="text/css">



</head>
<body><?php
  include "koneksi.php";

  $query_mysql = mysql_query("SELECT * FROM berita WHERE id_file = '3'")or die(mysql_error());

  while($data = mysql_fetch_array($query_mysql)){
  ?>
  <section class="mbr-section article content9 cid-rwh3Hn5seR" id="content9-h">



    <div class="container">
        <div class="inner-container" style="width: 100%;">
            <hr class="line" style="width: 25%;">
            <div class="section-text align-center mbr-fonts-style display-5"><strong>
                    <?php echo $data['judul'] ?></div>
            <hr class="line" style="width: 25%;">
        </div>
        </div>
</section>

<section class="engine"><a href="https://mobirise.info/d">web maker</a></section><section class="mbr-section content6 cid-rwh3cw7SiJ" id="content6-e">



    <div class="container">
        <div class="media-container-row">
            <div class="col-12 col-md-8">
                <div class="media-container-row">
                    <div class="mbr-figure" style="width: 200%;">
                      <img src="<?php echo "fileberita/".$data['nama_file']; ?>" width="700" height="300">
                    </div>
                    <div class="media-content">
                        <div class="mbr-section-text">
                            <p class="mbr-text mb-0 mbr-fonts-style display-7">
                               <strong>TANGGAL : </strong> <?php echo $data['tanggal'] ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section article content1 cid-rwh3mL30mn" id="content2-f">



    <div class="container">
        <div class="media-container-row">
            <div class="mbr-text col-12 col-md-8 mbr-fonts-style display-7">
                <blockquote> <?php echo $data['isi_lengkap'] ?></blockquote>
            </div>
        </div>
    </div>
</section>


  <script src="etc5/assets/web/assets/jquery/jquery.min.js"></script>
  <script src="etc5/assets/popper/popper.min.js"></script>
  <script src="etc5/assets/tether/tether.min.js"></script>
  <script src="etc5/assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="etc5/assets/smoothscroll/smooth-scroll.js"></script>
  <script src="etc5/assets/theme/js/script.js"></script>

<?php } ?>
</body>
</html>
