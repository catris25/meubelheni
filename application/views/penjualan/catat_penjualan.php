<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard | Mebel Heni</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/superadmin_style.css">
  <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Roboto:400,700'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="shortcut icon" href="<?=base_url();?>assets/img/mebelheny.ico"-->
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 550px}

    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }

    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
      .row.content {height: auto;}
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            Catat Penjualan
        </div>

          <div class="panel-body">
            <?php if(!empty($this->session->flashdata('flash_data'))) {
              echo "<div class='alert alert-warning'>";
              echo "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
              echo $this->session->flashdata('flash_data');
              echo "</div>";
            } ?>
            <form class="form-horizontal" role="form" method="POST" action="<?= site_url('penjualan/catat_process') ?>">

              <?php if(!empty($barang)){
                foreach($barang as $b){ ?>

                  <input id="id_barang" type="text" class="validate" name="id_barang" value="<?php echo $b->id_barang; ?>" hidden>

                  <div class="form-group">
                    <label class="control-label col-sm-2" for="nama_barang">Nama barang</label>
                    <div class="col-sm-9">
                      <input id="nama_barang" type="text" class="form-control" name="nama_barang" value="<?php echo $b->nama_barang; ?>" readonly>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-2" for="jenis_barang">Jenis barang</label>
                    <div class="col-sm-9">
                      <input id="jenis_barang" type="text" class="form-control" name="jenis_barang" value="<?php echo $b->jenis_barang; ?>" readonly>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-2" for="tgl_keluar">Tanggal penjualan</label>
                    <div class="col-sm-9">
                      <input id="tgl_keluar" type="date" class="form-control" name="tgl_keluar" value="<?php echo set_value('tgl_keluar'); ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-2" for="harga">Harga</label>
                    <div class="col-sm-9">
                      <input id="harga" type="number" class="form-control" name="harga" value="<?php echo set_value('harga'); ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-2" for="keterangan">Keterangan</label>
                    <div class="col-sm-9">
                      <input id="keterangan" type="text" class="form-control" name="keterangan" value="<?php echo set_value('keterangan'); ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </div>

            <?php } ?>

          </form>
          <?php }else{
            echo "Data kosong";
          }?>

        </div>
      </div>
    </div>
</body>
</head>
