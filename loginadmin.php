<?php
session_start();
if(isset($_SESSION['username'])) {
header('location:indexadmin.php','index.php'); }
require_once("koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>LOGIN ADMIN</title><link rel="icon" href="images/dpdri.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Allied Login Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
    />
    <script>
        addEventListener("load", function () { setTimeout(hideURLbar, 0); }, false); function hideURLbar() { window.scrollTo(0, 1); }
    </script>
    <link href="css_loginadmin/font-awesome.min.css" rel="stylesheet">
    <link href="css_loginadmin/style.css" rel='stylesheet' type='text/css' media="all">
    <link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
</head>

<body>
    <h1 class="error">LOGIN ADMIN</h1>
    <div class="w3layouts-two-grids">
        <div class="mid-class">
            <div class="txt-left-side">
                <h2> Login Here </h2>
                <br></br>
                <br></br>
                <form action="prosesloginadmin.php" method="post">
                    <div class="form-left-to-w3l">
                      <span class="fa fa-user" aria-hidden="true"></span>
                      <input type="text" name="user" placeholder="USERNAME" required="" autocomplete="off">
                      <div class="clear"></div>
                    </div>
                    <div class="form-left-to-w3l ">

                        <span class="fa fa-lock" aria-hidden="true"></span>
                        <input type="password" name="pass" placeholder="PASSWORD" required="" autocomplete="off">
                        <div class="clear"></div>
                    </div>

                    <div class="btnn">
                        <button type="submit">Login </button>
                    </div>
                </form>

            </div>
            <div class="img-right-side">
                <h3>SELAMAT DATANG ADMIN</h3>

                <img src="images/login dpd.jpg" class="img-fluid" alt="">
            </div>
        </div>
    </div>

</body>

</html>
