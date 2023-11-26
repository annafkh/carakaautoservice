<?php
  include("../config/koneksi.php");  
  ?>
  <?php
$id_jenis_service = $_GET['id_jenis_service'];

$queryy = mysql_query("SELECT * FROM jenis_service WHERE id_jenis_service = '$id_jenis_service'");
$dt=mysql_fetch_array($queryy);

?>
<div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Jenis Service</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Jenis Service</a></li>
                                    <li class="active"><a href="#">Edit Data Jenis Service</a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Edit Data Jenis Service</strong>
                            </div>
                            <div class="card-body">
         
<form action="index.php?p=proses_edit_jenis_service" method="post" enctype="multipart/form-data" class="form-horizontal">
     <input type="hidden" id="text-input" name="id_jenis_service" value="<?=$dt['id_jenis_service'];?>" class="form-control" required="">

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Jenis Service</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="text-input" name="jenis_service" class="form-control" value="<?=$dt['jenis_service'];?>" required="">
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Biaya Layanan</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="number" id="text-input" name="biaya" class="form-control" value="<?=$dt['biaya'];?>" required="">
                                        </div>
                                    </div>
                                
                                    
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                </form>


                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->