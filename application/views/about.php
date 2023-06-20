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
    <style>
      .card {
    width: 300px;
    height: 400px;
    background: #000;
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
    background: linear-gradient(180deg, rgba(0,0,0,0) 0%, rgba(0,0,0,1)100%);
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
    font-size: .8rem;
    opacity: 0;
    margin-bottom: -170px;
    transition: all .25s ease;
    display: flex;
    align-items: center;
    justify-content: flex-end;
    flex-direction: column;
}
.card .con-text a button {
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
    font-size: .75rem;
    outline: none;
}
.card .con-text a button:hover {
    background: #fff;
    color: #000;
}
.center {
  display: flex;
  justify-content: center;
}
    </style>
</head>
<body>

<div class="banner">    	   
<img src="<?php echo base_url('foto/photos/atap.jpg');?>" class="img-responsive" alt="slide" style="height:400px">
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
            <span" class="section-heading-upper">BECOME PART OF ME HOTEL</span> 
          </h2>
          <br>
          <br>
          <br>

          <p  style="text-align: justify;">
            Based on the General Meeting of Shareholders (AGM) of ME HOTEL in deciding to spin off the Department of TOD (Transit Oriented Development) and Hotels to become a subsidiary, ME HOTEL. This is done so that business activities related to TOD and Hotels can be handled specifically and more focused by ME HOTEL as a subsidiary.
            <br>
        Being part of ME HOTEL provides a greater opportunity to be able to expand, of course the feasibility study will still be conducted to assess the feasibility of implementing a business. The opportunity is wide open for ME HOTEL to develop its brand and become a hotel operator capable of providing complete services for partners, clients and investors.
          </p>
          <br>
          <br>
        </div>
        <h3 class="section-heading mb-4"  style="text-align: center;">
          <span" class="section-heading-upper">WEB HOTEL DEVELOPER</span> 
        </h3>
        <center>
        <div class="center">
        <a href="https://alfi.ilkomc1.com/" target="_blank" > 
        <div class="card col-sm-10" style="padding:0%; margin:16px;">
        <img style="width:600px" src="<?php echo base_url('images/alfii.jpg'); ?>" alt="card-hover">
        <div class="con-text">
        <h2 style="color:white">M Alfi Faiz</h2>
        <p style="color:white">	2207045 </p>
    </div>
    </div>
  </a>
  <a href="https://mhmmdysdn.ilkomc1.com/" target="_blank" > 
    <div class="card col-sm-10" style="padding:0%; margin:16px;">
        <img style="width: 600px" src="<?php echo base_url('image/danz.jpeg'); ?>" alt="card-hover" >
          <div class="con-text">
          <h2 style="color:white">M Yusdan</h2>
          <p style="color:white">	2206847 </p>
    </div>
  </div>
</a>
</div>
  </center>
        </section>
        <br>
          <br>
          <br>
          <br>
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