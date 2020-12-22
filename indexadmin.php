<?php
session_start();
if(!isset($_SESSION['user'])) {
   header('location:loginadmin.php');
} else {
   $username = $_SESSION['user'];
}
?>

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

  <title>HOME ADMIN</title>
  <link rel="stylesheet" href="etc4/assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="etc4/assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
  <link rel="stylesheet" href="etc4/assets/tether/tether.min.css">
  <link rel="stylesheet" href="etc4/assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="etc4/assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="etc4/assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="etc4/assets/datatables/data-tables.bootstrap4.min.css">
  <link rel="stylesheet" href="etc4/assets/theme/css/style.css">
  <link rel="stylesheet" href="etc4/assets/mobirise/css/mbr-additional.css" type="text/css">



</head>
<body>

  <section class="features8 cid-rw4cmj4xIl mbr-parallax-background" id="features8-6">



    <div class="mbr-overlay" style="opacity: 0.2; background-color: rgb(35, 35, 35);">
    </div>

    <div class="container">
        <div class="media-container-row">

            <div class="card  col-12 col-md-6 col-lg-4">
                <div class="card-img">
                  <table>
                    <tr>
                      <td>
                        <img src="images/banner.png" width="40" height="200">
                      </td>
                    </tr>
                  </table>
                </div>
                <div class="card-box align-center">
                    <h4 class="card-title mbr-fonts-style display-7">
                        MENU EDIT BANNER
                        <br></br>
                    </h4>

                         <div class="mbr-section-btn text-center"> <a href="editbanner.php">
                            <button type="button" value="Upload" class="btn btn-secondary display-4" >
                              GANTI BANNER</button>
                          </a>

                        </div>
                </div>
            </div>

            <div class="card  col-12 col-md-6 col-lg-4">
                <div class="card-img">
                  <table>
                    <table>
                      <tr>
                        <td>
                          <img src="images/slide.png" width="50" height="200">
                        </td>
                      </tr>
                    </table>
                  </table>
                </div>
                <div class="card-box align-center">
                    <h4 class="card-title mbr-fonts-style display-7">
                        MENU EDIT SLIDE SHOW
                        <br></br>
                    </h4>


                         <div class="mbr-section-btn text-center"><a href="editslideshow.php">
                            <button type="button" name="upload" value="Upload" class="btn btn-secondary display-4" >
                              GANTI SLIDE SHOW
                            </button> </a>

                        </div>
                </div>
            </div>

            <div class="card  col-12 col-md-6 col-lg-4">
                <div class="card-img">
                  <table>
                    <table>
                      <tr>
                        <td>
                          <img src="images/news.png" width="50" height="200">
                        </td>
                      </tr>
                    </table>
                  </table>
                </div>
                <div class="card-box align-center">
                    <h4 class="card-title mbr-fonts-style display-7">
                        MENU EDIT BERITA
                        <br></br>
                    </h4>

                    <div class="mbr-section-btn text-center"><a href="editberita.php">
                       <button type="button" name="upload" value="Upload" class="btn btn-secondary display-4" >
                         GANTI BERITA
                       </button> </a>

                   </div>
                </div>
            </div>


        </div>
    </div>
</section>

<section class="engine"><a href="https://mobirise.info">Mobirise</a></section><section class="section-table cid-rw4nKgy7dZ" id="table1-c">



  <div class="container container-table">
      <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2">
          ASMASDA</h2>
      <h3 class="mbr-section-subtitle mbr-fonts-style align-center pb-5 mbr-light display-5">
            ASPIRASI
      </h3>
      <div class="table-wrapper">
        <div class="container">
          <div class="row search">
            <div class="col-md-6"></div>
            <div class="col-md-6">
                <div class="dataTables_filter">
                  <label class="searchInfo mbr-fonts-style display-7">Search:</label>
                  <input class="form-control input-sm" disabled="">
                </div>
            </div>
          </div>
        </div>

        <div class="container scroll">
          <table class="table isSearch" cellspacing="0">
            <thead>
              <tr class="table-heads ">




              <th class="head-item mbr-fonts-style display-7">
                      TANGGAL</th><th class="head-item mbr-fonts-style display-7">
                      NAMA</th><th class="head-item mbr-fonts-style display-7">
                      NIK</th><th class="head-item mbr-fonts-style display-7">
                      E-MAIL</th><th class="head-item mbr-fonts-style display-7">
                      KOTA/KAB.</th><th class="head-item mbr-fonts-style display-7">
                      ASPIRASI</th><th class="head-item mbr-fonts-style display-7">
                      ACTION</th></tr>
            </thead>

            <tbody>

              <?php
                include "koneksi.php";
                $query_mysql = mysql_query("SELECT * FROM asmasda")or die(mysql_error());


                while($data = mysql_fetch_array($query_mysql)){
                ?>
                <tr>
                        <td><?php echo $data['tanggal'] ?></td>
                        <td><?php echo $data['nama'] ?></td>
                        <td><?php echo $data['nik']; ?></td>
                        <td><?php echo $data['email']; ?></td>
                        <td><?php echo $data['kota']; ?></td>
                        <td><?php echo $data['aspirasi']; ?></td>
                        <td><a class="HAPUS" href="hapusdataasmasda.php?nik=<?php echo $data['nik']; ?>">HAPUS</a></td>



                    </tr>
                <?php } ?>
              </tbody>


          </table>
        </div>
        <div class="container table-info-container">
          <div class="row info">
            <div class="col-md-6">
              <div class="dataTables_info mbr-fonts-style display-7">
                <span class="infoBefore">Showing</span>
                <span class="inactive infoRows"></span>
                <span class="infoAfter">entries</span>
                <span class="infoFilteredBefore">(filtered from</span>
                <span class="inactive infoRows"></span>
                <span class="infoFilteredAfter"> total entries)</span>
              </div>
            </div>
            <div class="col-md-6"></div>
          </div>
        </div>
      </div>
    </div>
</section>

<section class="section-table cid-rw4n0q8dH8" id="table1-b">



  <div class="container container-table">
      <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2">
          GALLERY</h2>
      <h3 class="mbr-section-subtitle mbr-fonts-style align-center pb-5 mbr-light display-5">
            KUMPULAN FOTO DPD RI JAWABARAT</h3>
      <div class="table-wrapper">
        <div class="container">
          <div class="row search">
            <div class="col-md-6"></div>
            <div class="col-md-6">
                <div class="dataTables_filter">
                  <label class="searchInfo mbr-fonts-style display-7">Search:</label>
                  <input class="form-control input-sm" disabled="">
                </div>
            </div>
          </div>
        </div>

        <div class="container scroll">
          <table class="table isSearch" cellspacing="0">
            <thead>
              <tr class="table-heads ">
                <th class="head-item mbr-fonts-style display-7">FOTO YANG SUDAH ADA</th>
                <th class="head-item mbr-fonts-style display-7">NAMA KEGIATAN</th>
                <th class="head-item mbr-fonts-style display-7">CAPTION</th>
                <th class="head-item mbr-fonts-style display-7">ACTION</th>
              </tr>
            </thead>

            <tbody>

              <?php
                include "koneksi.php";
                $query_mysql = mysql_query("SELECT * FROM galery")or die(mysql_error());


                while($data = mysql_fetch_array($query_mysql)){
                ?>
                <tr>

                        <td><img src="<?php echo "filegalery/".$data['nama_file']; ?>" width="75" height="75"></td>
                        <td><?php echo $data['namakegiatan']; ?></td>
                        <td><?php echo $data['caption']; ?></td>
                        <td><a href="editgalery.php?id_file=<?php echo $data['id_file']; ?>">EDIT</a></td>



                    </tr>

                <?php } ?>




          </tbody>
          </table>
        </div>
        <div class="container table-info-container">
          <div class="row info">
            <div class="col-md-6">
              <div class="dataTables_info mbr-fonts-style display-7">
                <span class="infoBefore">Showing</span>
                <span class="inactive infoRows"></span>
                <span class="infoAfter">entries</span>
                <span class="infoFilteredBefore">(filtered from</span>
                <span class="inactive infoRows"></span>
                <span class="infoFilteredAfter"> total entries)</span>
              </div>
            </div>
            <div class="col-md-6">
            </div>
          </div>
        </div>
      </div>
    </div>
</section>

<!-- footer-->
<section class="engine"><a href="https://mobirise.info/l">free web templates</a></section><section class="cid-rvybOJWW0g" id="footer5-5">
    <div class="container">
        <div class="media-container-row">
            <div class="col-md-3">
                <div class="media-wrap">
                    <a href="https://mobirise.co/">

                    </a>
                </div>
            </div>
            <div class="col-md-9">
                <p class="mbr-text align-right links mbr-fonts-style display-7">
                    <a href="logout.php" class="text-black">LOGOUT</a> &nbsp;&nbsp;&nbsp;&nbsp;

                </p>
            </div>
        </div>
        <div class="footer-lower">
            <div class="media-container-row">
                <div class="col-md-12">
                    <hr>
                </div>
            </div>
            <div class="media-container-row mbr-white">
                <div class="col-md-2 copyright">
                    <p class="mbr-text mbr-fonts-style display-7">

                    </p>
                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>

  <script src="etc4/assets/web/assets/jquery/jquery.min.js"></script>
  <script src="etc4/assets/popper/popper.min.js"></script>
  <script src="etc4/assets/tether/tether.min.js"></script>
  <script src="etc4/assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="etc4/assets/smoothscroll/smooth-scroll.js"></script>
  <script src="etc4/assets/parallax/jarallax.min.js"></script>
  <script src="etc4/assets/datatables/jquery.data-tables.min.js"></script>
  <script src="etc4/assets/datatables/data-tables.bootstrap4.min.js"></script>
  <script src="etc4/assets/theme/js/script.js"></script>


</body>
</html>
