
<!DOCTYPE html>
<html>
<head>
	<title>Pemesanan</title>

    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/core.css');?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/shortcode/shortcodes.css');?>">
    <link rel="stylesheet" href="<?= base_url('assets/stylee.css');?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/responsive.css');?>">
    <link rel="icon" href="<?=base_url()?>/images/logo.png">
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
                            <h2>Konfirmasi <span>Pemesanan</span></h2>
                <div class="row">
                    <div class="col-md-12">
                        <div class="service-tab-desc text-left mt-60">
                            <div class="tab-content">
                                        <div class="booking-done-table table-responsive text-center" style="width: 100%;">
                                            <div class="text-center"><a href="<?= site_url('Welcome/index')?>" class="btn btn-primary">Kembali ke Beranda</a></div><br><br>
                                            <?php 
                                            $nomor = 1;
                                            foreach ($trans as $t) {
                                            ?>
                                            <h2 class="text-center"><b>PESANAN</b> <?php echo $nomor ?></h2>
                                            <table class="table">
                                                <tr>
                                                    <td><p><?=$t->jumlah?> Kamar <span><?=$t->tgl_in?> - <?=$t->tgl_out?></span></p></td>
                                                    <td><p>Status Pemesanan Anda <span>"<?=$t->status?>"</span></p></td>
                                                </tr>
                                                <tr class="row2">
                                                    <td><p><?=$t->jenis?></p></td>
                                                    <td></td>
                                                    <td></td>
                                                    <?php 
                                                        $tampil = $this->db->get_where('kamar',array('jenis' => $t->jenis))->row(); 
                                                    ?>
                                                    <td><p><?=$tampil->harga?></p></td>
                                                </tr>
                                                <tr class="row3">
                                                    <td><p>Total</p></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><p><?=$t->jumlah * $tampil->harga?></p></td>
                                                </tr>
                                            </table>
                                            <br>
                                            <br>
                                            <?php 
                                        $nomor++;
                                                                                        }
                                            ?>
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
    
</body>
</html>
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