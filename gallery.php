<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>GALLERY</title><link rel="icon" href="images/dpdri.png" />
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Photowall Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta tag Keywords -->

    <!-- Custom-Files -->
    <link rel="stylesheet" href="css_gallery/bootstrap.css">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="css_gallery/lightbox.css">
    <!-- Banner-Slider-CSS -->
    <link rel="stylesheet" href="css_gallery/banner-style.css">
    <link rel="stylesheet" href="css_gallery/aos.css">
    <link href='css_gallery/aos-animation.css' rel='stylesheet prefetch' type="text/css" media="all" />
    <!-- owl carousel -->
    <link rel="stylesheet" href="css_gallery/style.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <link rel="stylesheet" href="css_gallery/fontawesome-all.css">
    <!-- Font-Awesome-Icons-CSS -->
    <link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700" rel="stylesheet">

</head>
<body>


<section class="content-main-w3" id="home">
<!--/nav-->
<div class="header_top_w3ls">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <button class="navbar-toggler navbar-toggler-right mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav mx-auto">
                        <li class="nav-item active">

                    </ul>
                </div>

            </nav>
            <div class="logo-wthree text-center">
                <a class="navbar-brand">
				 GALLERY<span> <br>Dewan Perwakilan Daerah Republik Indonesia Provinsi Jawa Barat</span></a>
            </div>

</div>
<!--//nav-->
<!--//gallery-->


<div class="container-fluid gallery-lightbox my-5">
            <div class="row m-0">
                <div class="col-lg-2 col-md-2 col-sm-3 p-0 snap-img">
                    <div class="gallery_grid1 hover08" data-aos="fade-up">
                        <div class="gallery_effect">
                          <?php
                          include "koneksi.php";
                          $query_mysql = mysql_query("SELECT * FROM galery where id_file = '1'")or die(mysql_error());


                          while($data = mysql_fetch_array($query_mysql)){
                          ?>

                            <a href="<?php echo "filegalery/".$data['nama_file']; ?>" data-lightbox="example-set" data-title-wthree="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                              <p><?php echo $data['namakegiatan']; ?></p>  <figure> <img src="<?php echo "filegalery/".$data['nama_file']; ?>" alt=" " class="img-fluid"><p><?php echo $data['caption']; ?></p></figure>
                            </a>
                        </div>
                    </div> <?php }?>
                    <div class="gallery_grid1 hover08" data-aos="fade-up">
                        <div class="gallery_effect">
                          <?php
                          include "koneksi.php";
                          $query_mysql = mysql_query("SELECT * FROM galery where id_file = '2'")or die(mysql_error());


                          while($data = mysql_fetch_array($query_mysql)){
                          ?>

                            <a href="<?php echo "filegalery/".$data['nama_file']; ?>" data-lightbox="example-set" data-title-wthree="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                              <p><?php echo $data['namakegiatan']; ?></p>  <figure> <img src="<?php echo "filegalery/".$data['nama_file']; ?>" alt=" " class="img-fluid"><p><?php echo $data['caption']; ?></p></figure>
                            </a>
                        </div>
                    </div> <?php }?>
                    <div class="gallery_grid1 hover08" data-aos="fade-up">
                        <div class="gallery_effect">
                          <?php
                          include "koneksi.php";
                          $query_mysql = mysql_query("SELECT * FROM galery where id_file = '3'")or die(mysql_error());


                          while($data = mysql_fetch_array($query_mysql)){
                          ?>

                            <a href="<?php echo "filegalery/".$data['nama_file']; ?>" data-lightbox="example-set" data-title-wthree="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                              <p><?php echo $data['namakegiatan']; ?></p>  <figure> <img src="<?php echo "filegalery/".$data['nama_file']; ?>" alt=" " class="img-fluid"><p><?php echo $data['caption']; ?></p></figure>
                            </a>
                        </div>
                    </div> <?php }?>

                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 p-0 snap-img">
                    <div class="gallery_grid1 hover08" data-aos="fade-up">
                        <div class="gallery_effect">
                          <?php
                          include "koneksi.php";
                          $query_mysql = mysql_query("SELECT * FROM galery where id_file = '5'")or die(mysql_error());


                          while($data = mysql_fetch_array($query_mysql)){
                          ?>

                            <a href="<?php echo "filegalery/".$data['nama_file']; ?>" data-lightbox="example-set" data-title-wthree="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                              <p><?php echo $data['namakegiatan']; ?></p>  <figure> <img src="<?php echo "filegalery/".$data['nama_file']; ?>" alt=" " class="img-fluid"><p><?php echo $data['caption']; ?></p></figure>
                            </a>
                        </div>
                    </div> <?php }?>
                    <div class="gallery_grid1 hover08" data-aos="fade-up">
                        <div class="gallery_effect">
                          <?php
                          include "koneksi.php";
                          $query_mysql = mysql_query("SELECT * FROM galery where id_file = '6'")or die(mysql_error());


                          while($data = mysql_fetch_array($query_mysql)){
                          ?>

                            <a href="<?php echo "filegalery/".$data['nama_file']; ?>" data-lightbox="example-set" data-title-wthree="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                              <p><?php echo $data['namakegiatan']; ?></p>  <figure> <img src="<?php echo "filegalery/".$data['nama_file']; ?>" alt=" " class="img-fluid"><p><?php echo $data['caption']; ?></p></figure>
                            </a>
                        </div>
                    </div> <?php }?>
                    <div class="gallery_grid1 hover08" data-aos="fade-up">
                        <div class="gallery_effect">
                          <?php
                          include "koneksi.php";
                          $query_mysql = mysql_query("SELECT * FROM galery where id_file = '7'")or die(mysql_error());


                          while($data = mysql_fetch_array($query_mysql)){
                          ?>

                            <a href="<?php echo "filegalery/".$data['nama_file']; ?>" data-lightbox="example-set" data-title-wthree="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                              <p><?php echo $data['namakegiatan']; ?></p>  <figure> <img src="<?php echo "filegalery/".$data['nama_file']; ?>" alt=" " class="img-fluid"><p><?php echo $data['caption']; ?></p></figure>
                            </a>
                        </div>
                    </div> <?php }?>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 p-0 snap-img">
                    <div class="gallery_grid1 hover08">
                        <div class="gallery_effect" data-aos="fade-up">
                          <?php
                          include "koneksi.php";
                          $query_mysql = mysql_query("SELECT * FROM galery where id_file = '8'")or die(mysql_error());


                          while($data = mysql_fetch_array($query_mysql)){
                          ?>

                            <a href="<?php echo "filegalery/".$data['nama_file']; ?>" data-lightbox="example-set" data-title-wthree="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                              <p><?php echo $data['namakegiatan']; ?></p>  <figure> <img src="<?php echo "filegalery/".$data['nama_file']; ?>" alt=" " class="img-fluid"><p><?php echo $data['caption']; ?></p></figure>
                            </a>
                        </div>
                    <?php }?>
                        <div class="gallery_effect" data-aos="fade-up">
                          <?php
                          include "koneksi.php";
                          $query_mysql = mysql_query("SELECT * FROM galery where id_file = '9'")or die(mysql_error());


                          while($data = mysql_fetch_array($query_mysql)){
                          ?>

                            <a href="<?php echo "filegalery/".$data['nama_file']; ?>" data-lightbox="example-set" data-title-wthree="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                              <p><?php echo $data['namakegiatan']; ?></p>  <figure> <img src="<?php echo "filegalery/".$data['nama_file']; ?>" alt=" " class="img-fluid"><p><?php echo $data['caption']; ?></p></figure>
                            </a>
                        </div>
                    <?php }?>
                    </div>
                    <div class="gallery_grid1 hover08" data-aos="fade-up">
                        <div class="gallery_effect">
                          <?php
                          include "koneksi.php";
                          $query_mysql = mysql_query("SELECT * FROM galery where id_file = '10'")or die(mysql_error());


                          while($data = mysql_fetch_array($query_mysql)){
                          ?>

                            <a href="<?php echo "filegalery/".$data['nama_file']; ?>" data-lightbox="example-set" data-title-wthree="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                              <p><?php echo $data['namakegiatan']; ?></p>  <figure> <img src="<?php echo "filegalery/".$data['nama_file']; ?>" alt=" " class="img-fluid"><p><?php echo $data['caption']; ?></p></figure>
                            </a>
                        </div>
                      </div>
                    <?php }?>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 p-0 snap-img">
                    <div class="gallery_grid1 hover08" data-aos="fade-up">
                        <div class="gallery_effect">
                          <?php
                          include "koneksi.php";
                          $query_mysql = mysql_query("SELECT * FROM galery where id_file = '11'")or die(mysql_error());


                          while($data = mysql_fetch_array($query_mysql)){
                          ?>

                            <a href="<?php echo "filegalery/".$data['nama_file']; ?>" data-lightbox="example-set" data-title-wthree="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                              <p><?php echo $data['namakegiatan']; ?></p>  <figure> <img src="<?php echo "filegalery/".$data['nama_file']; ?>" alt=" " class="img-fluid"><p><?php echo $data['caption']; ?></p></figure>
                            </a>
                        </div>
                      </div>
                    <?php }?>
                    <div class="gallery_grid1 hover08">
                        <div class="gallery_effect" data-aos="fade-up">
                          <?php
                          include "koneksi.php";
                          $query_mysql = mysql_query("SELECT * FROM galery where id_file = '12'")or die(mysql_error());


                          while($data = mysql_fetch_array($query_mysql)){
                          ?>

                            <a href="<?php echo "filegalery/".$data['nama_file']; ?>" data-lightbox="example-set" data-title-wthree="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                              <p><?php echo $data['namakegiatan']; ?></p>  <figure> <img src="<?php echo "filegalery/".$data['nama_file']; ?>" alt=" " class="img-fluid"><p><?php echo $data['caption']; ?></p></figure>
                            </a>
                        </div>

                    <?php }?>
                        <div class="gallery_effect" data-aos="fade-up">
                          <?php
                          include "koneksi.php";
                          $query_mysql = mysql_query("SELECT * FROM galery where id_file = '13'")or die(mysql_error());


                          while($data = mysql_fetch_array($query_mysql)){
                          ?>

                            <a href="<?php echo "filegalery/".$data['nama_file']; ?>" data-lightbox="example-set" data-title-wthree="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                              <p><?php echo $data['namakegiatan']; ?></p>  <figure> <img src="<?php echo "filegalery/".$data['nama_file']; ?>" alt=" " class="img-fluid"><p><?php echo $data['caption']; ?></p></figure>
                            </a>
                        </div>
                      </div>
                    <?php }?>

                </div>
                <div class="col-lg-2 col-md-2 p-0 snap-img">
                    <div class="gallery_grid1 hover08">
                        <div class="gallery_effect" data-aos="fade-up">
                          <?php
                          include "koneksi.php";
                          $query_mysql = mysql_query("SELECT * FROM galery where id_file = '15'")or die(mysql_error());


                          while($data = mysql_fetch_array($query_mysql)){
                          ?>

                            <a href="<?php echo "filegalery/".$data['nama_file']; ?>" data-lightbox="example-set" data-title-wthree="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                              <p><?php echo $data['namakegiatan']; ?></p>  <figure> <img src="<?php echo "filegalery/".$data['nama_file']; ?>" alt=" " class="img-fluid"><p><?php echo $data['caption']; ?></p></figure>
                            </a>
                        </div>
                      </div>
                    <?php }?>

                    <div class="gallery_grid1 hover08">
                        <div class="gallery_effect" data-aos="fade-up">
                          <?php
                          include "koneksi.php";
                          $query_mysql = mysql_query("SELECT * FROM galery where id_file = '16'")or die(mysql_error());


                          while($data = mysql_fetch_array($query_mysql)){
                          ?>

                            <a href="<?php echo "filegalery/".$data['nama_file']; ?>" data-lightbox="example-set" data-title-wthree="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                              <p><?php echo $data['namakegiatan']; ?></p>  <figure> <img src="<?php echo "filegalery/".$data['nama_file']; ?>" alt=" " class="img-fluid"><p><?php echo $data['caption']; ?></p></figure>
                            </a>
                        </div>
                      </div>
                    <?php }?>
                    <div class="gallery_grid1 hover08">
                        <div class="gallery_effect" data-aos="fade-up">
                          <?php
                          include "koneksi.php";
                          $query_mysql = mysql_query("SELECT * FROM galery where id_file = '17'")or die(mysql_error());


                          while($data = mysql_fetch_array($query_mysql)){
                          ?>

                            <a href="<?php echo "filegalery/".$data['nama_file']; ?>" data-lightbox="example-set" data-title-wthree="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                              <p><?php echo $data['namakegiatan']; ?></p>  <figure> <img src="<?php echo "filegalery/".$data['nama_file']; ?>" alt=" " class="img-fluid"><p><?php echo $data['caption']; ?></p></figure>
                            </a>
                        </div>
                      </div>
                    <?php }?>
                </div>


                <div class="col-lg-2 col-md-2 p-0 snap-img">
                    <div class="gallery_grid1 hover08">
                        <div class="gallery_effect" data-aos="fade-up">
                          <?php
                          include "koneksi.php";
                          $query_mysql = mysql_query("SELECT * FROM galery where id_file = '18'")or die(mysql_error());


                          while($data = mysql_fetch_array($query_mysql)){
                          ?>

                            <a href="<?php echo "filegalery/".$data['nama_file']; ?>" data-lightbox="example-set" data-title-wthree="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                              <p><?php echo $data['namakegiatan']; ?></p>  <figure> <img src="<?php echo "filegalery/".$data['nama_file']; ?>" alt=" " class="img-fluid"><p><?php echo $data['caption']; ?></p></figure>
                            </a>
                        </div>
                      </div>
                    <?php }?>
                    <div class="gallery_grid1 hover08">
                        <div class="gallery_effect" data-aos="fade-up">
                          <?php
                          include "koneksi.php";
                          $query_mysql = mysql_query("SELECT * FROM galery where id_file = '19'")or die(mysql_error());


                          while($data = mysql_fetch_array($query_mysql)){
                          ?>

                            <a href="<?php echo "filegalery/".$data['nama_file']; ?>" data-lightbox="example-set" data-title-wthree="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                              <p><?php echo $data['namakegiatan']; ?></p>  <figure> <img src="<?php echo "filegalery/".$data['nama_file']; ?>" alt=" " class="img-fluid"><p><?php echo $data['caption']; ?></p></figure>
                            </a>
                        </div>
                      </div>
                    <?php }?>
                    <div class="gallery_grid1 hover08">
                        <div class="gallery_effect" data-aos="fade-up">
                          <?php
                          include "koneksi.php";
                          $query_mysql = mysql_query("SELECT * FROM galery where id_file = '20'")or die(mysql_error());


                          while($data = mysql_fetch_array($query_mysql)){
                          ?>

                            <a href="<?php echo "filegalery/".$data['nama_file']; ?>" data-lightbox="example-set" data-title-wthree="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                              <p><?php echo $data['namakegiatan']; ?></p>  <figure> <img src="<?php echo "filegalery/".$data['nama_file']; ?>" alt=" " class="img-fluid"><p><?php echo $data['caption']; ?></p></figure>
                            </a>
                        </div>
                      </div>
                    <?php }?>

                </div>


            </div>

        </div>

<!--tutup gallery-->
<!--/footer-->
<footer class="mt-lg-5 mt-3">
             <div class="social_media_w3layouts text-center">
           <ul class="social-icons justify-content-center ">
                                <h3><a href="index.php">  HOME  |</a>
                                <a href="asmasda.php">  ASMASDA   |</a>
                                <a href="jdih.html">  JDIH   |</a>
                                <a href="ppid.html">  PPID  |</a>
                                <a href="aboutus.html">  ABOUT US</a></h3>

                            </ul>
                            <p class="mbr-text mb-0 mbr-fonts-style mbr-white align-center display-7">
                                <h4>© Copyright 2019</h4>
                            </p></div>
        </footer>
    </section>
<!--//footer-->


    <script src="js/jquery-2.2.3.min.js"></script>
     <script src='js/aos.js'></script>
    <script>
        AOS.init({
            easing: 'ease-out-back',
            duration: 1000
        });
    </script>
      <script src="js/lightbox-plus-jquery.min.js">
    </script>

    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script>
        $(document).ready(function() {

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>

    <script src="js/bootstrap.js"></script>

</body>

</html>
