<?php include 'header.php';?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Selamat Datang</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css');?>">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="<?= base_url('assets/css/core.css');?>">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="<?= base_url('assets/css/shortcode/shortcodes.css');?>">
    <!-- Theme main style -->
    <link rel="stylesheet" href="<?= base_url('assets/stylee.css');?>">
    <!-- Responsive css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/responsive.css');?>">
    <!-- customizer style css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style-customizer.css');?>">
 
    <link rel="icon" href="<?=base_url('/images/logo.png')?>">
    <!-- Modernizr JS -->
    <script src="<?= base_url('assets/js/vendor/modernizr-2.8.3.min.js');?>"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.35.1/js/bootstrap-dialog.min.js"></script>
</head>
    <style type="text/css">
        .header-section{
          background: url('<?php echo base_url('foto/photos/banner.jpg');?>')no-repeat scroll center center;
          background-size: cover;
          background-attachment: fixed;
        }
        .header-section.height-vh{
          height: 100vh;
        }
        .header-section,.menu .search-bar,.b-date,.select-book{
          position: relative
        }
        .footer{
          background: url('<?php echo base_url('foto/photos/banner.jpg');?>')no-repeat scroll center center;
          background-size: cover;
          background-attachment: fixed;
        }
        .footer-bg-opacity {
          background: rgba(0, 0, 0, 0.8) none repeat scroll 0 0;

        }
    </style>
    <style>
.card {
    width: 250px;
    height: 400px;
    background: #dffef7;
    border-radius: 30px;
    overflow: hidden;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all .25s ease;
    backface-visibility: hidden;
}
.card:hover {
    transform: scale(.9);
}
.card:hover::after {
    height: 280px;
}
.card:hover .con-text p {
    margin-bottom: 0px;
    opacity: 1;
}
.card:hover img {
    transform: scale(1.25);
}
.card:hover .ul {
    transform: translate(0);
    opacity: 1;
}
.card::after {
    width: 100%;
    content: '';
    left: 0px;
    bottom: 0px;
    height: 150px;
    position: absolute;
    background: linear-gradient(180deg, rgba(0,0,0,0) 0%, rgba(0,66,112,1)100%);
    z-index: 20;
    transition: all .25s ease;
}
.card .con-text {
    z-index: 30;
    position: absolute;
    bottom: 0px;
    color: #fff;
    padding: 20px;
    padding-bottom: 30px;
}

.card .con-text a {
    font-size: 12px;
    opacity: 0;
    margin-bottom: -180px;
    transition: all .25s ease;
    display: flex;
    align-items: center;
    justify-content: flex-end;
    flex-direction: column;
}
.card .con-text p button {
    padding: 7px 17px;
    border-radius: 12px;
    background: transparent;
    border: 2px solid #fff;
    color: #fff;
    margin-top: 10px;
    margin-left: auto;
    cursor: pointer;
    transition: all .25s ease;
    font-family: poppins;
    font-size: 12px;
    outline: none;
}
.card .con-text p button:hover {
    background: #fff;
    color: #000;
}



</style>
<body>

<div class="banner">    	   
    <img src="<?php echo base_url('foto/photos/banner.jpg');?>" class="img-responsive" alt="slide" style="height:400px">
    <div class="welcome-message">
        <div class="wrap-info">
        <div class="information">
            <marquee><h1  class="animated fadeInDown" style="color:white;">Best hotel in Gerlong</h1></marquee>
                <p class="animated fadeInUp" style="color:white;">Most luxurious hotel of asia with the royal treatments and excellent customer service.</p>                
            </div>
        </div>
    </div>
</div>

<br>
<br>
<br>
<br>
<br>

<section id="B" class="page-section about-heading">
      <div class="container">
          <div class="about-heading-content">
          <h2 class="section-heading mb-4"  style="text-align: center;">
            <span" class="section-heading-upper">BECOME PART OF PT. ADHI COMMUTER PROPERTY</span> 
          </h2>
          <br>
          <br>
          <br>

          <p  style="text-align: justify;">
          Based on the General Meeting of Shareholders (AGM) of PT Adhi Karya Tbk (ADHI) in deciding to spin off the Department of TOD (Transit Oriented Development) and Hotels to become a subsidiary, PT Adhi Commuter Properti (ACP). This is done so that business activities related to TOD and Hotels can be handled specifically and more focused by PT Adhi Commuter Properti (ACP) as a subsidiary.

Being part of PT Adhi Commuter Properti (ACP) provides a greater opportunity for Hotel GranDhika to be able to expand, of course the feasibility study will still be conducted to assess the feasibility of implementing a business. The opportunity is wide open for Hotel GranDhika to develop its brand and become a hotel operator capable of providing complete services for partners, clients and investors.
          </p>

          <br>
          <br>
          <br>

          <h3 class="section-heading mb-4"  style="text-align: center;">
            <span" class="section-heading-upper">WEB HOTEL DEVELOPER</span> 
            <div>
              <a href="https://furqon.ilkomc1.com/" target="_blank"> 
                        <div class="card col-sm-5" style="margin:16px;">
                          <img src="<?php echo base_url('assets/FU.jpg'); ?>" alt="card-hover" style="width:400px;">
                        <div class="con-text">
                            <h2>M FURQON</h2>
                            <p>	2207207
                              </p>
                            </div>
                          </div>
                        </a>
                      </h3>
        </div>
      </div>
    </section>

    <!-- jquery latest version -->
    <script src="<?= base_url('assets/js/vendor/jquery-1.12.0.min.js');?>"></script>
    <!-- Bootstrap framework js -->
    <script src="<?= base_url('assets/js/bootstrap.min.js');?>"></script>
    <!--counter up js-->
    <script src="<?= base_url('assets/js/waypoints.min.js');?>"></script>
    <script src="<?= base_url('assets/js/jquery.counterup.min.js');?>"></script>
    <!-- Video player js -->
    <script src="<?= base_url('assets/js/video-player.js');?>"></script>
    <!-- headlines js -->
    <script src="<?= base_url('assets/js/animated-headlines.js');?>"></script>
    <!-- Ajax mail js -->
    <script src="<?= base_url('assets/js/mailchimp.js');?>"></script>
    <!-- Ajax mail js -->
    <script src="<?= base_url('assets/js/ajax-mail.js');?>"></script>
    <!-- parallax js -->
    <script src="<?= base_url('assets/js/parallax.js');?>"></script>
    <!-- textilate js -->
    <script src="<?= base_url('assets/js/textilate.js');?>"></script>
    <script src="<?= base_url('assets/js/lettering.js');?>"></script>
    <!--isotope js-->
    <script src="<?= base_url('assets/js/isotope.pkgd.min.js');?>"></script>
    <script src="<?= base_url('assets/js/packery-mode.pkgd.min.js');?>"></script>
    <!-- Style Customizer Js  -->
    <script src="<?= base_url('assets/js/style-customizer.js');?>"></script>
    <!-- Owl carousel Js -->
    <script src="<?= base_url('assets/js/owl.carousel.min.js');?>"></script>
    <!--Magnificant js-->
    <script src="<?= base_url('assets/js/jquery.magnific-popup.js');?>"></script>
    <!-- All js plugins included in this file. -->
    <script src="<?= base_url('assets/js/plugins.js');?>"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="<?= base_url('assets/js/main.js');?>"></script>



<?php include 'footer.php';?>