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


<!-- favicon -->
<link rel="shortcut icon" href="<?php echo base_url('images/favicon.png');?>" type="image/x-icon">
<link rel="icon" href="<?php echo base_url('images/favicon.png');?>" type="image/x-icon">

<link rel="stylesheet" type="text/css" href="<?php echo base_url('bahan/stylee.css'); ?>">

</head>

<body id="home">
  
  <center>
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
    </div>
    <a class="navbar-brand" href=""><img src=""  alt="ME HOTEL"></a>

  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">        
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
  </div><!-- Wnavbar-collapse -->
</center>
    <!-- Collect the nav links, forms, and other content for toggling -->
  </div><!-- container-fluid -->
</nav>
<!-- header -->