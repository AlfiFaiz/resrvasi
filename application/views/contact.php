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
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
<body>

<div class="banner" >    	   
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


<section id="D" class="page-section cta">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner bg-faded text-center rounded">
                  <!-- Container (Contact Section) -->
    <div class="w3-content w3-container w3-padding-64" id="contact">
      <h3 class="w3-center">WHERE I WORK</h3>
      <p class="w3-center"><em>I'd love your feedback!</em></p>
      <div class="w3-row w3-padding-32 w3-section">
        <div class="w3-col m4 w3-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d247.57741813814312!2d107.59082387437581!3d-6.86197222726383!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6bbbafdbb23%3A0x57f0a75328ea61c5!2sComputer%20Science%20Building%20UPI%20-%20FPMIPA%20C!5e0!3m2!1sen!2sid!4v1686810055480!5m2!1sen!2sid" width="250" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="w3-col m8 w3-panel">
          <div class="w3-large w3-margin-bottom">
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
          <form  method = "post" action = "">
            <div class="w3-row-padding" style="margin: 0 -16px 8px -16px">
              <div class="w3-half">
                <input
                  class="w3-input w3-border"
                  placeholder="Nama"
                  name = "nama" type = "text" id = "nama" required autocomplete="off">
              </div>
              <div class="w3-half">
                <input
                  class="w3-input w3-border"
                  type="text"
                  placeholder="Email"
                  required
                  name="email" id="email" autocomplete="off"/>
              </div>
            </div>
            <textarea
              class="w3-input w3-border"
              type="text"
              placeholder="Message"
              required
              name="pesan" id="pesan" autocomplete="off"/></textarea>
            <button
              class="w3-button w3-black w3-right w3-section"
              type="submit" id = "add" name = "add"  >
              <i class="fa fa-paper-plane"></i> SEND MESSAGE
            </button>
          </form>
            </div>
          </div>
        </div>
      </div>
    </section>

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



<?php include 'footer.php';?>