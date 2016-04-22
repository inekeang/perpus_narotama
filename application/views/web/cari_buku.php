<!doctype html>
    <html>
        <head>
            <title>Perpustakaan Unnar</title>
            <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
            <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.css');?>" rel="stylesheet">
        
            <link href="<?php echo base_url('assets/css/plugins/morris/morris-0.4.3.min.css');?>" rel="stylesheet">
            <link href="<?php echo base_url('assets/css/plugins/timeline/timeline.css');?>" rel="stylesheet">
        
            
            <script src="<?php echo base_url('assets/js/jquery.js');?>"></script>
            <script src="<?php echo base_url('assets/js/bootstrap.js');?>"></script>
            <script src="<?php echo base_url('assets/js/tinymce/tinymce.min.js');?>"></script>
            <script>
                    tinymce.init({selector:'textarea'});
            </script>
        </head>
        <body>
            <!--<img src="<?php echo base_url('assets/img/3.jpg');?>" height="140px" width="100%">-->
            <!-- Static navbar -->
            <?php include "menu.php"; ?>

            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <span class="glyphicon glyphicon-lock"></span> Pencarian Buku
                            </div>
                            <div class="panel-body">
                                <form class="navbar-form navbar-left" role="search" action="<?php echo site_url('web/cari_buku');?>" method="post">
                                    <?php echo $this->session->flashdata('message');?>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-3 control-label">
                                            Judul</label>
                                        <div class="col-sm-9">
                                            <!--<input type="text" name="cari" class="form-control" placeholder="Cari Buku">-->
                                            <input type="text" name="cari" class="form-control" id="inputEmail3" placeholder="Judul">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-3 control-label">
                                            Kategori</label>
                                        <div class="col-sm-9">
                                            <!--<input type="text" name="kategori" class="form-control" id="inputEmail3" placeholder="Kategori">-->
                                            <select name="pengarang" class="form-control" id="inputEmail3" placeholder="Pengarang">
                                                <option>IT</option>
                                                <option>Ekonomi</option>
                                                <option>Hukum</option>
                                                <option>Sipil</option>
                                                <option>Jurnal/Skripsi</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-3 control-label">
                                            Pengarang</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="pengarang" class="form-control" id="inputEmail3" placeholder="Pengarang">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-3 control-label">
                                            Penerbit</label>
                                        <div class="col-sm-9">
                                            <input type="password" name="penerbit" class="form-control" id="inputPassword3" placeholder="Penerbit">
                                        </div>
                                    </div>
                                    <div class="form-group last">
                                        <div class="col-sm-offset-3 col-sm-9">
                                            <button type="submit" class="btn btn-success btn-sm">
                                                Cari Buku</button>
                                                 <button type="reset" class="btn btn-default btn-sm">
                                                Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="panel-footer">
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 ">
                        <legend>Hasil Pencarian</legend>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <td>No.</td>
                                    <td>Gambar</td>
                                    <td>Kode Buku</td>
                                    <td>Judul Buku</td>
                                    <td>Pengarang</td>
                                    <td>Klasifikasi</td>
                                </tr>
                            </thead>
                            <?php $no=0; foreach($hasil as $row): $no++;?>
                            <tr>
                                <td><?php echo $no;?></td>
                                <td><img src="<?php echo base_url('assets/img/'.$row->image);?>" width="100px" height="100px"></td>
                                <td><?php echo $row->kode_buku;?></td>
                                <td><?php echo $row->judul;?></td>
                                <td><?php echo $row->pengarang;?></td>
                                <td><?php echo $row->klasifikasi;?></td>
                            </tr>
                            <?php endforeach;?>
                        </table>
                    </div>
                </div>
            </div>
    
            
            
            <!-- Core Scripts - Include with every page -->
            <script src="<?php echo base_url('assets/js/holder.js');?>"></script>
    
            <script src="<?php echo base_url('assets/js/application.js');?>"></script>
            <script src="<?php echo base_url('assets/js/jquery-1.10.2.js');?>"></script>
            <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
            <script src="<?php echo base_url('assets/js/plugins/metisMenu/jquery.metisMenu.js');?>"></script>
            <script src="<?php echo base_url('assets/js/plugins/morris/raphael-2.1.0.min.js');?>"></script>
            <script src="<?php echo base_url('assets/js/plugins/morris/morris.js');?>"></script>
            <script src="<?php echo base_url('assets/js/sb-admin.js');?>"></script>
            <script src="<?php echo base_url('assets/js/demo/dashboard-demo.js');?>"></script>   
        </body>
    </html>