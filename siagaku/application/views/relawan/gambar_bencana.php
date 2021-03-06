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
                                        <tbody>
                                            <tr>
                                                <td><input name="fileToUpload" style="width: 100%; padding: 0px; margin: 0px;" type="file"></td>
                                                <td></td>
                                                <td><textarea name="deskripsi_gambar"></textarea></td>
                                                <td><?php echo date('Y-m-d H:i:s'); ?></td>
                                                <td>
                                                <input data-loading-text="Loading..." type="submit" name="submit" class="btn btn-success" value="Tambah"></td>   
                                            </tr>
                                        <?php $i=1; foreach ($data as $temp) { ?>    
                                            <tr>
                                                <td><img height="100" width="250" src="<?php echo base_url(); ?>/assets/img/bencana/<?php echo $temp['nama_gambar']; ?>" /></td>
                                                <td></td>
                                                <td><?php echo $temp['deskripsi_gambar']; ?></td>
                                                <td><?php echo $temp['tanggal_gambar']; ?></td>
                                                
                                                <td>
                                                <a class="btn btn-warning" href="<?php echo base_url()."index.php/crud_gambar/do_editImage/".$temp['id_gambar']; ?>">Edit</a>&nbsp;
                                               
                                                </td>  
                                            </tr>
                                        <?php $i++;  } ?>
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

      