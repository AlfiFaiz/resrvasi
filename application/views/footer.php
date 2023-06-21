

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










</body>
</html>





