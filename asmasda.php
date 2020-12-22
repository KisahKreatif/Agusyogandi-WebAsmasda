<!DOCTYPE html>
<html lang="en">
<head>
    <title>ASMASDA</title><link rel="icon" href="images/dpdri.png" />
    <!-- Meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Gadget Sign Up Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
    />
    <link rel="stylesheet" href="css/stylepopup.css" type="text/css" />
    <script>
        addEventListener("load", function () { setTimeout(hideURLbar, 0); }, false); function hideURLbar() { window.scrollTo(0, 1); }
    </script>

    <link href="css_asmasda/font-awesome.min.css" rel="stylesheet">
    <link href="css_asmasda/style.css" rel='stylesheet' type='text/css' media="all">
    <link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">

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
  <?php
if(isset($_GET['pesan'])){
$pesan = $_GET['pesan'];
if($pesan == "input"){
  echo "Data berhasil di input.";
}else if($pesan == "update"){
  echo "Data berhasil di update.";
}else if($pesan == "hapus"){
  echo "Data berhasil di hapus.";
}
}
?>
<!--navbar -->
<nav>
  <ul>
    <div style="padding: 5px"></div>
        <img src="images/dpdri.png"  width="45" height="40"align=left >
        <li><a href="index.php"><b><font size="3">HOME</font></b></a></li>
        <li><a href="gallery.php"><b><font size="3">GALLERY</a></li>
        <li><a href="asmasda.php"><b><font size="3">ASMASDA</a></li>
        <li><a href="jdih.html"><b><font size="3">JDIH</a></li>
        <li><a href="ppid.html"><b><font size="3">PPID</a></li>
        <li><a href="aboutus.html"><b><font size="3">ABOUT US</a></li>

    </ul>
</nav>
<!--tutup navbar -->
<!--//form-->
<h1 class="error">ASPIRASI MASYARAKAT DAERAH JAWA BARAT</h1>
      <div class="w3layouts-two-grids">
        <div class="mid-class">
            <div class="img-right-side">
                <h3>BERIKAN ASPIRASIMU UNTUK JAWA BARAT</h3>
                <p>ASMASDA adalah sistem informasi untuk masyarakat agar bisa memberikan aspirasinya kepada pemerintah
                lewat sistem ASMASDA DPD RI Jawa Barat</p>
                <img src="images/suara.png" class="img-fluid" alt="">
            </div>
            <div class="txt-left-side">
                <h2>MASUKAN ASPIRASI</h2>
                <form action="prosesuploadasmasda.php" method="post">
                    <div class="form-left-to-w3l">
                        <span class="fa fa-users" aria-hidden="true"></span>
                        <input type="text" name="nama" placeholder=" NAMA" required="">

                        <div class="clear"></div>
                    </div>
                    <div class="form-left-to-w3l">
                        <span class="fa fa-user-o" aria-hidden="true"></span>
                        <input type="text" name="nik" placeholder="NIK" required="">

                        <div class="clear"></div>
                    </div>
                    <div class="form-left-to-w3l">
                        <span class="fa fa-envelope-o" aria-hidden="true"></span>
                        <input type="email" name="email" placeholder="EMAIL" required="">

                        <div class="clear"></div>
                    </div>
                    <div class="form-left-to-w3l ">

                        <span class="fa fa-home" aria-hidden="true"></span>
                        <input type="text" name="kota" placeholder="KOTA/KABUPATEN" required="">
                        <div class="clear"></div>
                    </div>
                    <div class="form-left-to-w3l ">

                        <span class="fa fa-pencil" aria-hidden="true"></span>
                        <input type="text" name="aspirasi" placeholder="MASUKAN ASPIRASI" required="">
                        <div class="clear"></div>
                    </div>
                    <div class="btnn">
                        <button type="submit" name="submit">BERIKAN ASPIRASI</button>
                    </div>
                </form>

                <div class="clear"></div>
            </div>
        </div>
      </div>
<!---tutup form--->
<!--footer-->
<br>
<br>
<br>
<br>
<br>
    <footer class="Copyright-wthree">
        <center><p>
            © Copyright 2019

        </p></center>
    </footer>
<!--tutup footer-->
</body>
</html>
