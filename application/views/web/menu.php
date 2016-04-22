            <div class="navbar navbar-default">
                <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <img src="<?php echo base_url();?>images/logo.png" style="float:left;height:40px;width:150px;margin:5px 10px 0 10px">
                    <a class="navbar-brand" href="<?php echo site_url('web');?>">Perpustakaan</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="<?php echo site_url('web');?>"><i class="glyphicon glyphicon-home"></i> Home</a></li>
                        <li><a href="<?php echo site_url('web/cari_buku');?>"><i class="glyphicon glyphicon-book"></i> Cari Buku</a></li>
                    </ul>
                    <!--<div class="nav navbar-nav navbar-right">
                        <form class="navbar-form navbar-left" role="search" action="<?php echo site_url('web/cari_buku');?>" method="post">
                            <div class="form-group">
                                <input type="text" name="cari" class="form-control" placeholder="Cari Buku">
                            </div>
                            <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i> Cari</button>
                        </form>
                    </div>-->
                </div><!--/.nav-collapse -->
                </div>
            </div>