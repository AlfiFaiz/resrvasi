
<!DOCTYPE html>
<html>
<head>
	<title>Pemesanan</title>

    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/core.css');?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/shortcode/shortcodes.css');?>">
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
<style>
.wrap{
width: 800px;
color:black;
margin: 20px auto;
padding:15px;
}
</style>
<body>
    </head>
    
    <div class="room-booking ptb-80">
                <div class="container">
    <div class="wrapper">
    <div class="col-md-12">
    <table style="padding: 5%;" class="table">
    <tr><td rowspan="10" width="100px">
    <img src="<?= base_url('images/pengguna/'.$this->session->userdata('gambar'))?>"style="display: block;border-radius: 5%;border-color:white;margin-right:30px; width:700px;" border="2px" ></td></tr>
    <tr style="padding: 2px;"><td><b>Nama </b></td><td>:</td> <td> <?= $this->session->userdata('nama');?> </td></tr>
    <tr><td><b>Username </b></td><td>:</td> <td><?= $this->session->userdata('email');?> </td></tr>
    <tr><td><b>Jenis Kelamin </b></td><td>:</td> <td><?= $this->session->userdata('no');?> </td></tr>
    <tr><td><b>Type</b></td><td>:</td> <td><?= $this->session->userdata('akses');?></td></tr></table>
    </div>
    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title mb-80 text-center">
                                <h2>Konfirmasi <span>Pemesanan</span></h2>
                                    <div class="service-tab-desc text-left mt-60">
                                        <div class="tab-content">
                                            <div class="text-center"><a href="<?= site_url('Welcome/index')?>" class="btn btn-primary">Kembali ke Beranda</a></div><br><br>
                                                    <div class="booking-done-table table-responsive text-center" style="width: 100%;">                                       
                                                        <?php 
                                                        $nomor = 1;
                                                        foreach ($trans as $t) {
                                                        ?>
                                                        <h2 class="text-center"><b>PESANAN</b> <?php echo $nomor ?></h2>
                                                <body style='font-family:tahoma; font-size:18px;' >
                                                <center>
                                                    <div style='background-color:#9BA4B5; border-radius:5px; padding:20px;'>
                                                    <table style='width:900px; font-size:18px; font-family:calibri; border:#9BA4B5;'>
                                                        <td width='70%' align='left' style='padding-right:80px; vertical-align:top; border:#9BA4B5;'>
                                                            <span style='font-size:25px'><b>ME HOTEL</b></span></br>
                                                            Bandung, Indonesia</br>
                                                            Phone: +62 151515
                                                        </td>
                                                        <td style='vertical-align:top; border:#9BA4B5;' width='30%' align='left'>
                                                            <b><span style='font-size:25px'>BUKTI TRANSAKSI</span></b></br>
                                                            No Trans. : <?= $t->id_transaksi?></br>
                                                            Tanggal : <?=$t->tgl_in?></br>
                                                        </td>
                                                    </table>
                                                    <table style='width:900px; font-size:18px; font-family:calibri;border:#9BA4B5;'>
                                                        <td width='70%' align='left' style='padding-right:80px; vertical-align:top; border:#9BA4B5;'>
                                                        </td>
                                                        <td style='vertical-align:top; border:#9BA4B5;' width='30%' align='left'>
                                                        NAMA : <?=$t->nama?>
                                                        </td>
                                                    </table>
                                                    <table style='width:900px; font-size:18px; font-family:calibri;border:#9BA4B5;'>
                                                        <td width='70%' align='left' style='padding-right:80px; vertical-align:top; border:#9BA4B5;'>
                                                        </td>
                                                        <td style='vertical-align:top; border:#9BA4B5;' width='30%' align='left'>
                                                            EMAIL : <?=$t->email?>
                                                        </td>
                                                    </table>
                                                    <table style='width:900px; font-size:18px; font-family:calibri;border:#9BA4B5;'>
                                                        <td width='70%' align='left' style='padding-right:80px; vertical-align:top; border:#9BA4B5;'>
                                                        </td>
                                                        <td style='vertical-align:top; border:#9BA4B5;' width='30%' align='left'>
                                                            No Telp : <?=$t->no?>
                                                        </td>
                                                    </table>
                                                    <?php 
                                                    $tampil = $this->db->get_where('kamar',array('jenis' => $t->jenis))->row(); 
                                                    ?>
                                                    <br>
                                                    <table cellspacing='0' style='width:900px; font-size:18px; font-family:calibri;  border-collapse: collapse;border:#9BA4B5;'>
                                                        <tr align='center'>
                                                            <td width='10%' style="border:#9BA4B5;">Check-in</td>
                                                            <td width='10%'style="border:#9BA4B5;">Check-out</td>
                                                            <td width='15%'style="border:#9BA4B5;">Tipe Kamar</td>
                                                            <td width='10%'style="border:#9BA4B5;">Jumlah Kamar</td>
                                                            <td width='10%'style="border:#9BA4B5;">Status</td>
                                                            <td width='15%' style='text-align:right;border:#9BA4B5;'>Total Harga</td>
                                                        </tr>
                                                        <tr align='center'>
                                                            <td><?=$t->tgl_in?></td> 
                                                            <td><?=$t->tgl_out?></td>
                                                            <td><?=$t->jenis?></td>
                                                            <td><?=$t->jumlah?></td>
                                                            <td><?=$t->status?></td>
                                                            <td style='text-align:right'><?=$t->jumlah * $tampil->harga?></td>
                                                        <tr>
                                                            <td colspan = '5'><div style='text-align:right'>Total Yang Harus Di Bayar Adalah : </div></td>
                                                            <td style='text-align:right'><?=$t->jumlah * $tampil->harga?></td>
                                                        </tr>
                                                    </table>
                                                <br>
                                                    <table style='width:900px; font-size:18px;border:#9BA4B5;' cellspacing='2'>
                                                    <tr>
                                                        <td align='center' style="border:#9BA4B5;">Diterima Oleh,</br></br><u>(............)</u></td>
                                                        <td align='center' style="border:#9BA4B5;">TTD,</br></br><u>(...........)</u></td>
                                                    </tr>
                                                </table>
                                                <?php if ($t->status === 'Confirm') { ?>
                                                <table cellspacing='0' style='width:900px; font-size:18px; font-family:calibri;  border-collapse: collapse;border:#9BA4B5;'>
                                                        <tr align='center'>
                                                            <td width='15%' style='text-align:right;border:#9BA4B5;'>
                                                            <a style="cursor:pointer; color:white; font-weight:bold; text-decoration: underline;" onclick="window.open('<?= site_url('Auth/cetak/').$t->id_transaksi?>','','width=1100px,height=500,toolbar=no,location=no,directories=no,status=no,menubar=no, scrollbars=no,resizable=yes,copyhistory=no')">Print Bukti</a> 
                                                        </td>
                                                        </tr>
                                                    </table>
                                                    <?php
                                                }?>
                                                    </div>
                                                </center>
                                                <br>
                                                <br>
                                                <br>
                                                <br>
                                                <?php 
                                                    $nomor++;
                                                    }
                                                    ?>
                                                </body>
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