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
          background: url('<?php echo base_url('foto/photos/u.jpg');?>')no-repeat scroll center center;
          background-size: cover;
          background-attachment: fixed;
        }
        .footer-bg-opacity {
          background: rgba(0, 0, 0, 0.8) none repeat scroll 0 0;

        }
    </style>
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


        <div class="our-room text-center ptb-80 white-bg">
        <section style="margin: 3%;">
      <div class="col-sm-6">
              <h2 class="section-heading mb-4">
                <span >ME HOTEL</span>
              </h2>
              <br>
            <p  style="text-align: justify;">
            ME HOTEL terletak di jantung distrik prestisius Jakarta Barat. Sangat dekat dari Puri Central Business District.
            <br>
            ME HOTEL adalah tempat peristirahatan yang tenang dari keramaian dan hiruk pikuk Metropolitan Jakarta namun dekat dengan Lippo Mall Puri dan Mal Taman Anggrek, kawasan hiburan Jakarta Barat yang semarak.
            <br>

            Manjakan diri Anda dengan suasana mewah semi retro dengan 63 kamar kami yang modern dan luas dengan kamar mandi marmer en-suite yang dipadukan dengan kenyamanan dan suasana santai.
            <br>

            Fasilitas kami yang luar biasa meliputi restoran khas Indonesia, taman bermain anak-anak, Perpustakaan, gym yang dirancang Italia, dan kolam renang luar ruangan.
						</p>
          </div>
			<br>
			<br>
			<br>
			<br>
      <div class="col-sm-6">				
          <img
							class="intro-img img-fluid mb-3 mb-lg-0 rounded"
							src="<?php echo base_url('foto/photos/banner.jpg'); ?>"
							alt="...""/>
        </div>
        
            <div class="container">
                
        </div>
    </div>

    
            <div class="container">
            <div class="row">
                    <div class="col-md-12">
                        <div class="section-title mb-75">
                        <br>
                          <br>
                          <h2><span>Fasilitas Tersedia</span></h2>
                            <p>Fasilitas yang kami sediakan sudah terintegarsi.</p>
                        </div>
                    </div>
                </div>
                <div class="our-room-show">
                    <div class="row">
                        <div class="carousel-list">
                            <?php foreach($fasilitas as $fs) {?>
                            <div class="col-md-4">
                                <div class="single-room">
                                    <div class="room-img">
                                        <a href="#"><img style="height : 250px;" src="<?=base_url()?>/images/fasilitas/<?=$fs->gambar?>" alt=""></a>
                                    </div>
                                    <div class="room-desc">
                                        <div class="room-name">
                                            <h3><a href="#"><?=$fs->nama_fasilitas?></a></h3>
                                        </div>
                                        <div class="room-rent">
                                            <h6><?=$fs->deskripsi?><label></label></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           <?php } ?>
                            
                        </div>
                    </div>
                </div>
            </div>
                            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title mb-75">
                        <br>
                          <br>
                          <h2>Jenis <span>Kamar</span></h2>
                            <p>Kami menyediakan berbagai jenis kamar, baik untuk sendiri, pasangan, maupun keluarga</p>
                        </div>
                    </div>
                </div>
                <div class="our-room-show">
                    <div class="row">
                        <div class="carousel-list">
                            <?php foreach($kamar as $kmr) {?>
                            <div class="col-md-4">
                                <div class="single-room">
                                    <div class="room-img">
                                        <a href="#"><img style="height : 250px;" src="<?=base_url()?>/images/kamar/<?=$kmr->gambar?>" alt=""></a>
                                    </div>
                                    <div class="room-desc">
                                        <div class="room-name">
                                            <h3><a href="#"><?=$kmr->jenis?></a></h3>
                                        </div>
                                        <div class="room-rent">
                                            <h6>Rp <?=$kmr->harga?> / <label>Malam</label></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           <?php } ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Our room end-->

        
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