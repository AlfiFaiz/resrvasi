<!DOCTYPE html>
<html>
<head>
	<title>Pemesanan</title>

    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/core.css');?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/shortcode/shortcodes.css');?>">
    <link rel="shortcut icon" href="<?php echo base_url('foto/photos/logo.png');?>" type="image/x-icon">
<link rel="icon" href="<?php echo base_url('foto/photos/logo.png');?>" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url('assets/stylee.css');?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/responsive.css');?>">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/smoothness/jquery-ui.min.css" rel="stylesheet" type="text/css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script language="javascript">
         $(document).ready(function () {
            $("#txtCheckin").datepicker({
                minDate:0,
                dateFormat: "dd-M-yy",
                onSelect: function (date) {
                    var date2 = $('#txtCheckin').datepicker('getDate');
                    date2.setDate(date2.getDate());
                    $('#txtCheckout').datepicker('setDate', date2);
                    //sets minDate to dateofbirth date + 1
                    $('#txtCheckout').datepicker('option', 'minDate', date2);
                }
            });
            $('#txtCheckout').datepicker({
                minDate:0,
                dateFormat: "dd-M-yy",
                onClose: function () {
                    var dt1 = $('#txtCheckin').datepicker('getDate');
                    console.log(dt1);
                    var dt2 = $('#txtCheckout').datepicker('getDate');
                    if (dt2 <= dt1) {
                        var minDate = $('#txtCheckout').datepicker('option', 'minDate');
                        $('#txtCheckout').datepicker('setDate', minDate);
                    }
                }
            });
        });

    </script>
</head>  
<body>
    <div class="wrapper">

          <div class="room-booking ptb-80">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title mb-80 text-center">
                            <h2>Pemesanan <span>Kamar</span></h2>
                           <!--  <p>Isi data dengan benar agar pemesanan dapat dilakukan</p> -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-right"><a href="<?= site_url('Welcome/index')?>" class="btn btn-primary">Kembali ke Beranda</a></div><br><br>
                        <div class="service-tab-desc text-left mt-60">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="booking">
                                    
                                    <div class="booking-info-deatils">
                                        <div class="single-room-details fix">
                                            <div class="room-img">
                                                <img src="<?=base_url()?>/images/kamar/<?=$detail->gambar?>" alt="">
                                            </div>
                                            <div class="single-room-details pl-50">
                                                <h3 class="s_room_title"><?=$detail->jenis?></h3>
                                                <h4 class="s_room_title">Tersedia <?=$detail->jumlah?> Kamar</h4>
                                                <div class="room_price"><br>
                                                    <h4>Harga</h4><br>
                                                    <h5><?=$detail->harga?> <span>/ malam</span></h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-room-booking-form mt-60">
                                            <form action="<?=site_url('Auth/do_booking')?>" method="post">
                                                <div class="single-form-part"> 
                                                <div class="date-to mb-15">
                                                    <label style="color: white;">NAMA</label>
                                                    <input type="text" placeholder="id pengguna" value="<?=$this->session->userdata('id_pengguna')?>" readonly="" name="id_pengguna" hidden>
                                                    <input type="text" placeholder="Nama Lengkap" value="<?=$this->session->userdata('nama')?>" readonly="" name="nama" >
                                                </div>
                                                </div>
                                                <div class="booking_form_inner">
                                                    <div class="single-form-part">
                                                    <div class="date-to mb-15">
                                                        <label style="color: white;">Arrive Date</label>
                                                        <input id="txtCheckin" value="Arrive Date" name="tgl_in">
                                                    </div>
                                                    <div class="date-to mb-15">
                                                        <label style="color: white;">JUMLAH KAMAR</label>
                                                        <select name="jumlah" placeholder="jumlah kamar">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="single-form-part">
                                                    <div class="date-to mb-15">
                                                            <label style="color: white;">Departure Date</label>
                                                            <input id="txtCheckout" value="Departure Date" name="tgl_out">
                                                        </div>
                                                        <div class="date-to mb-15">
                                                        <label style="color: white;">JENIS KAMAR</label>
                                                            <input type="text" readonly name="jenis" name="jenis" value="<?=$detail->jenis?>" >
                                                        </div>
                                                    </div>

                                                    <div class="single-form-part">
                                                    <div class="date-to mb-15">
                                                    <label style="color: white;">NO TELEPON</label>
                                                            <input type="text" placeholder="No Telp." value="<?=$this->session->userdata('no')?>" readonly="" name="no" >
                                                        </div>
                                                        <div class="date-to mb-15">
                                                        <label style="color: white;">EMAIL</label>
                                                            <input type="text" placeholder="Email" value="<?=$this->session->userdata('email')?>" readonly="" name="email" >
                                                        </div>
                                                    </div>
                                                <div class="prve-next-box mt-20">
                                                    <div class="back-link">
                                                        <a href="<?= site_url('Welcome')?>">Cancel</a>
                                                    </div>
                                                    <button type="submit">Pesan Sekarang</button>
                                                </div>
                                            </form>
                                        </div>
                                        </div>
                                        </div>
                                    </div>        
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
</div>

<!-- <script src="<?= base_url('assets/js/vendor/jquery-1.12.0.min.js');?>"></script> -->

    <script src="<?= base_url('assets/js/bootstrap.min.js');?>"></script>
   
   <!--  <script src="<?= base_url('assets/js/waypoints.min.js');?>"></script>
    <script src="<?= base_url('assets/js/jquery.counterup.min.js');?>"></script>
    <script src="<?= base_url('assets/js/video-player.js');?>"></script>
    <script src="<?= base_url('assets/js/animated-headlines.js');?>"></script>
    <script src="<?= base_url('assets/js/mailchimp.js');?>"></script>
    <script src="<?= base_url('assets/js/ajax-mail.js');?>"></script>
    <script src="<?= base_url('assets/js/parallax.js');?>"></script>
    <script src="<?= base_url('assets/js/textilate.js');?>"></script>
    <script src="<?= base_url('assets/js/lettering.js');?>"></script>
    <script src="<?= base_url('assets/js/isotope.pkgd.min.js');?>"></script>
    <script src="<?= base_url('assets/js/packery-mode.pkgd.min.js');?>"></script>
    <script src="<?= base_url('assets/js/owl.carousel.min.js');?>"></script>
    <script src="<?= base_url('assets/js/jquery.magnific-popup.js');?>"></script>
    <script src="<?= base_url('assets/js/plugins.js');?>"></script>
    <script src="<?= base_url('assets/js/main.js');?>"></script> -->
    
    </html>