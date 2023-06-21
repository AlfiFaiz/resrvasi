<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>ME HOTEL | Best hotel in Gerlong</title>

<!-- Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Raleway:300,500,800|Old+Standard+TT' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:300,500,800' rel='stylesheet' type='text/css'>

<!-- font awesome -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


<!-- bootstrap -->
<link rel="stylesheet" href="<?php echo base_url('bahan/bootstrap/css/bootstrap.min.css');?>" />

<!-- uniform -->
<link type="text/css" rel="stylesheet" href="<?php echo base_url('bahan/uniform/css/uniform.default.min.css');?>" />

<!-- animate.css -->
<link rel="stylesheet" href="<?php echo base_url('bahan/wow/animate.css');?>" />


<!-- gallery -->
<link rel="stylesheet" href="<?php echo base_url('bahan/gallery/blueimp-gallery.min.css');?>">


<link rel="shortcut icon" href="<?php echo base_url('foto/photos/logo.png');?>" type="image/x-icon">
<link rel="icon" href="<?php echo base_url('foto/photos/logo.png');?>" type="image/x-icon">


<link rel="stylesheet" type="text/css" href="<?php echo base_url('bahan/stylee.css'); ?>">

</head>

<body id="home">

<!-- header -->

<nav class="navbar  navbar-default" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href=""><img style="width: 30px;" src="<?php echo base_url('foto/photos/logo.png');?>" alt="ME HOTEL"></a>
    </div>

  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">        
      <li><a href="<?php echo site_url('welcome/index');?>">Home </a></li>
      <li><a href="<?php echo site_url('utama/about');?>">About Me</a></li>        
      <li><a href="<?php echo site_url('utama/contact');?>">Contact us</a></li> 
      <li><a href="<?= site_url('Auth/konfirmasi/').$this->session->userdata('id_pengguna')?>">pesanan</a></li>
      <li><a href="<?= site_url('Auth/profile/').$this->session->userdata('id_pengguna')?>">Info akun</a></li>
      <li><a href="<?= site_url('Auth/logout')?>">Logout</a></li>         
    </ul>
  </div><!-- Wnavbar-collapse -->
  </div><!-- container-fluid -->
</nav>
<!-- header -->
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
<style>
.wrap{
width: 800px;
color:black;
margin: 20px auto;
padding:15px;
}
</style>
<body>

<div class="container">
    <div class="room-booking ptb-80">
    <div class="wrapper">
    <div class="col-md-12">
    <table style="padding: 5%;" class="table">
    <tr><td rowspan="10" width="100px">
    <img src="<?= base_url('images/pengguna/'.$detail->gambar)?>"style="border-radius: 5%;border-color:white; margin-right:30px; width:600px;" border="2px" ></td></tr>
    <tr style="padding: 2px;"><td><b>Nama </b></td><td>:</td> <td><?=$detail->nama?> </td></tr>
    <tr><td><b>Username </b></td><td>:</td> <td><?= $detail->email?> </td></tr>
    <tr><td><b>Jenis Kelamin </b></td><td>:</td> <td><?=$detail->no?> </td></tr>
    <tr><td><b>Type</b></td><td>:</td> <td><?= $detail->akses?></td></tr></table>
    <a class="btn btn-success" href="<?=site_url('utama/editdata/'.$detail->id_pengguna)?>">Edit</a>
    <br>
    <br>
    <br>
    <br>
    <br>
    </div>
    </div>
    </div>


    </div>
  <!-- Placed js at the end of the document so the pages load faster -->

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

</body>

</html>

<footer class="spacer">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <h4>ME HOTEL</h4>
                    <i
              class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i>
            Bandung, Indonesia<br />
            <i
              class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i>
            Phone: +62 151515<br />
            <i
              class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i>
            Email: mehotel@gmail.com<br />
                </div>              
                 
                 <div class="col-sm-3">
                    <h4>Quick Links</h4>
                    <ul class="list-unstyled">
                    <?php if($this->session->is_logged_in){ ?>
        <li><a href="<?php echo site_url('welcome/index');?>">Home </a></li>
        <li><a href="<?php echo site_url('utama/about');?>">About Me</a></li>
        <li><a href="<?php echo site_url('utama/contact');?>">Contact us</a></li>           
        <li><a href="<?= site_url('Auth/konfirmasi/').$this->session->userdata('id_pengguna')?>">pesanan</a></li>
        <li><a href="<?= site_url('Auth/logout')?>">Logout</a></li>   
      </ul>
      <?php } else { ?>
        <li><a href="<?php echo site_url('utama/index');?>">Home </a></li>
        <li><a href="<?php echo site_url('utama/about');?>">About Me</a></li> 
        <li><a href="<?php echo site_url('utama/contact');?>">Contact us</a></li>          
            <li><a href="<?php echo site_url('Auth/login');?>">Reservasi</a></li>        
          </ul>
          <?php } ?>
                </div>
                 <div class="col-sm-4 subscribe">
                    <div class="social">
                    <a href="#"><i class="fa fa-facebook-square" data-toggle="tooltip" data-placement="top" data-original-title="facebook"></i></a>
                    <a href="#"><i class="fa fa-instagram"  data-toggle="tooltip" data-placement="top" data-original-title="instragram"></i></a>
                    <a href="#"><i class="fa fa-twitter-square" data-toggle="tooltip" data-placement="top" data-original-title="twitter"></i></a>
                    <a href="#"><i class="fa fa-pinterest-square" data-toggle="tooltip" data-placement="top" data-original-title="pinterest"></i></a>
                    <a href="#"><i class="fa fa-tumblr-square" data-toggle="tooltip" data-placement="top" data-original-title="tumblr"></i></a>
                    <a href="#"><i class="fa fa-youtube-square" data-toggle="tooltip" data-placement="top" data-original-title="youtube"></i></a>
                    </div>
                </div>
            </div>
            <!--/.row--> 
        </div>
        <!--/.container-->    
    
    <!--/.footer-bottom--> 
</footer>

<div class="text-center copyright">Powered by <a href="#">Alfi & Yusdan</a></div>


<script src="<?php echo base_url('bahan/jquery.js');?>"></script>

<!-- wow script -->
<script src="<?php echo base_url('bahanbahan/wow/wow.min.js');?>"></script>

<!-- uniform -->
<script src="bahan/uniform/js/jquery.uniform.js"></script>


<!-- boostrap -->
<script src="bahan/bootstrap/js/bootstrap.js" type="text/javascript" ></script>

<!-- jquery mobile -->
<script src="bahan/mobile/touchSwipe.min.js"></script>

<!-- jquery mobile -->
<script src="bahan/respond/respond.js"></script>

<!-- gallery -->
<script src="bahan/gallery/jquery.blueimp-gallery.min.js"></script>


<!-- custom script -->
<script src="bahan/script.js"></script>

