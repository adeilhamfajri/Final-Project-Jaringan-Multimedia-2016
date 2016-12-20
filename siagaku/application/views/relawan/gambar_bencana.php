<div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
    <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
        <div class="page-header pull-left">
            <div class="page-title">
                </div>
        </div>
        <ol class="breadcrumb page-breadcrumb pull-right">
            <li><i class="fa fa-home"></i>&nbsp;<a href="dashboard.html">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
            <li class="hidden"><a href="#">Tables</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
            <li class="active">Tables</li>
        </ol>
        <div class="clearfix"></div>
    </div>
        <!--BEGIN CONTENT-->
    <div class="page-content">
        <div id="tab-general">
            <div class="row mbl">
                <div class="col-lg-12">        
                    <div class="col-md-12">
                        <div id="area-chart-spline" style="width: 100%; height: 300px; display: none;">
                        </div>
                    </div>    
                </div>

                <div class="col-lg-12">
                    <div class="row">
                    <br/><br/><br/>

                     <div class="col-lg-12">
                        <div class="panel panel-violet">
                            <div class="panel-heading" align="center">Realtime Gambar Bencana</div>
                                <div class="panel-body">
                                    
                                    <form action="<?php echo base_url().'index.php/crud_gambar/do_addimage' ?>" method="post" enctype="multipart/form-data">

                                    <table class="table table-hover">
                                        <thead>  
                                            <tr>
                                                <th style="width:10%;">Gambar Bencana</th>
                                                <th></th>
                                                <th style="width:10%;">Deskripsi Gambar</th>
                                                <th>Tanggal</th>
                                            </tr>
                                        </thead>
                                        <?php $i=1; foreach ($data as $temp) { ?>    
                                        <tbody>
                                            <tr>
                                                <td><img height="100" width="250" src="<?php echo base_url(); ?>/assets/img/bencana/<?php echo $temp['nama_gambar']; ?>" /></td>
                                                <td></td>
                                                <td><?php echo $temp['deskripsi_gambar']; ?></td>
                                                <td><?php echo $temp['tanggal_gambar']; ?></td>
                                                
                                                <td>
                                                <a class="btn btn-warning" href="">Edit</a>&nbsp;
                                                <a class="btn btn-danger" href="">Hapus</a>
                                                </td>  
                                            </tr>
                                        <?php $i++;  } ?>
                                            <tr>
                                                <td><img height="100" width="250" src="" /></td>
                                                <td></td>
                                                <td><input type="text" name="deskripsi_gambar"></td>
                                                <td></td>
                                                <td>
                                                    <input name="fileToUpload" style="width: 100%; padding: 0px; margin: 0px;" type="file">
                                                <input data-loading-text="Loading..." style="width: 100%; padding: 0px; margin: 0px;" type="submit" name="submit" class="btn btn-primary" value="Simpan"></td>   
                                            </tr>
                                        </tbody>                           
                                    </table>

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

      