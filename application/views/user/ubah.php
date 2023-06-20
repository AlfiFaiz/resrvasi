<!DOCTYPE html>
<html>
<head>
    <title>Ubah Data</title>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" href="<?= base_url('assets/vendors/bootstrap/dist/css/bootstrap.min.css');?>">
    <link rel="icon" href="<?=base_url()?>/images/logo.png">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css');?>">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <style>
        .center {
  display: flex;
  justify-content: center;
}
    </style>
</head>
<body>


    <div id="right-panel" class="right-panel">


        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Ubah Data</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="<?= site_url('Auth/konfirmasi/').$this->session->userdata('id_pengguna')?>">Kembali</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>


       <div class="center">
            <div class="animated fadeIn">
                                <div id="pay-invoice">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center">Ubah Data Pengguna <?= $detail->nama ?></h3>
                                        </div>
                                        <hr>
                                        <form action="<?=site_url('utama/update/'.$detail->id_pengguna)?>" method="post" novalidate="novalidate" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <img src="<?= base_url('images/pengguna/'.$detail->gambar)?>" width="200px" height="200px">
                                            </div>
                                            <input type="hidden" name="id" value="<?=$detail->id_pengguna?>">
                                                <div class="form-group has-success">
                                                    <label for="cc-name" class="control-label mb-1">Nama Lengkap</label>
                                                    <input id="cc-name" value="<?= $detail->nama ?>" name="nama" type="text" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="cc-number" class="control-label mb-1">Email</label>
                                                    <input id="cc-number" name="email" type="tel" class="form-control" value="<?= $detail->email ?>">
                                                </div>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <label for="cc-exp" class="control-label mb-1">No. Telp</label>
                                                            <input id="cc-exp" name="no" type="tel" class="form-control " value="<?= $detail->no ?>" >
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <label for="cc-exp" class="control-label mb-1">Hak Akses</label>
                                                            <select id="cc-exp" name="akses" class="form-control ">
                                                                <option>User</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <label for="x_card_code" class="control-label mb-1">File Gambar</label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="gambar" type="file" class="form-control" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                            <input name="simpan" id="payment-button" type="submit" class="btn btn-lg btn-info btn-block" value="Simpan">
                                                </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div> <!-- .card -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</center>
    <script src="<?= base_url('assets/vendors/jquery/dist/jquery.min.js');?>"></script>
    <script src="<?= base_url('assets/vendors/popper.js/dist/umd/popper.min.js');?>"></script>
    <script src="<?= base_url('assets/vendors/bootstrap/dist/js/bootstrap.min.js');?>"></script>
    <script src="<?= base_url('assets/main.js');?>"></script>
</body>
</html>