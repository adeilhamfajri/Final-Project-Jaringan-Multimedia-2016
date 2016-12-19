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
                            <div class="panel-heading" align="center">Kelola Donasi Dana</div>
                                <div class="panel-body">
                                    <form method="POST" action="<?php echo base_url().'index.php/crud_danamasuk/do_insert' ?>" enctype="multipart/form-data">

                                    <table class="table table-hover">
                                        <thead>  
                                            <tr>
                                                <th style="width:10%;">Gambar Bencana</th>
                                                <th></th>
                                                <th style="width:10%;">Deskripsi Gambar</th>


                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td><img height="100" width="250" src="" /></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                
                                                <td>
                                                <a class="btn btn-warning" href="">Edit</a>&nbsp;
                                                <a class="btn btn-danger" href="">Hapus</a>
                                                </td>  
                                            </tr>

                                            <tr>
                                                <td><img height="100" width="250" src="" /></td>
                                                <td><input type="hidden" name="img_name" value=""></td>
                                                <td><input type="text" name=""></td>
                                                <td></td>
                                                <td>
                                                    <input style="width: 100%; padding: 0px; margin: 0px;" type="file" value="" name="userfile" id="userfile" onChange="readURL(this);">
                                                <button data-loading-text="Loading..." style="width: 100%; padding: 0px; margin: 0px;" type="submit" name="submit" class="btn btn-primary">Submit</button></td>   
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

      