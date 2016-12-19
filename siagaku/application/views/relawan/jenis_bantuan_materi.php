
<!--END SIDEBAR MENU-->
          
          
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">
                            </div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="http://localhost/siagaku/siagaku/index.php/relawan">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="hidden"><a href="#">Tables</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Jenis Bantuan Materi</li>
                    </ol>
                    <div class="clearfix">
                    </div>
                </div>
                <!--END TITLE & BREADCRUMB PAGE-->
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
                            <div class="panel-heading" align="center">Kelola Jenis Materi</div>
                            <div class="panel-body">
                                <table class="table table-hover table-striped">
                                    <thead>
                                    <tr>
                                        <th>Nama Materi</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <form method="post" action="<?php echo base_url(); ?>index.php/crud_jenisbarang/tambah_barang">
                                            <td><input type="text" name="nama_barang" /></td>
                                            <td><input type="submit" class="btn btn-success" value="Tambah"></td>   
                                        </form>
                                        
                                    </tr>
                                    <?php
                                        foreach($barang as $baris){
                                    ?>
                                        <tr>
                                            <td><?php echo $baris->nama_barang; ?></td>
                                            <td>
                                            <a class="btn btn-danger" href="<?php echo base_url(); ?>index.php/crud_jenisbarang/hapus_barang/<?php echo $baris->id_barang; ?>">Hapus Data</a>
                                            </td>
                                        </tr>
                                    <?php
                                        }
                                    ?>
                                    </tbody>

                                </table>
                            </div>
                              
                        </div>

                       
                  
                       
                    </div>
                </div>
                            
                            
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!--END CONTENT-->
                <!--BEGIN FOOTER-->
                <div id="footer">
                    <div class="copyright">
                    <a href="#">2016 © SiagaKu</a></div>
                </div>
                <!--END FOOTER-->
            </div>
            <!--END PAGE WRAPPER-->
        </div>
    </div>
    <script src="<?php echo base_url().'assets/' ?>script/jquery-1.10.2.min.js"></script>
    <script src="<?php echo base_url().'assets/' ?>script/jquery-migrate-1.2.1.min.js"></script>
    <script src="<?php echo base_url().'assets/' ?>script/jquery-ui.js"></script>
    <script src="<?php echo base_url().'assets/' ?>script/bootstrap.min.js"></script>
    <script src="<?php echo base_url().'assets/' ?>script/bootstrap-hover-dropdown.js"></script>
    <script src="<?php echo base_url().'assets/' ?>script/html5shiv.js"></script>
    <script src="<?php echo base_url().'assets/' ?>script/respond.min.js"></script>
    <script src="<?php echo base_url().'assets/' ?>script/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url().'assets/' ?>script/jquery.slimscroll.js"></script>
    <script src="<?php echo base_url().'assets/' ?>script/jquery.cookie.js"></script>
    <script src="<?php echo base_url().'assets/' ?>script/icheck.min.js"></script>
    <script src="<?php echo base_url().'assets/' ?>script/custom.min.js"></script>
    <script src="<?php echo base_url().'assets/' ?>script/jquery.news-ticker.js"></script>
    <script src="<?php echo base_url().'assets/' ?>script/jquery.menu.js"></script>
    <script src="<?php echo base_url().'assets/' ?>script/pace.min.js"></script>
    <script src="<?php echo base_url().'assets/' ?>script/holder.js"></script>
    <script src="<?php echo base_url().'assets/' ?>script/responsive-tabs.js"></script>
    <script src="<?php echo base_url().'assets/' ?>script/jquery.flot.js"></script>
    <script src="<?php echo base_url().'assets/' ?>script/jquery.flot.categories.js"></script>
    <script src="<?php echo base_url().'assets/' ?>script/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url().'assets/' ?>script/jquery.flot.tooltip.js"></script>
    <script src="<?php echo base_url().'assets/' ?>script/jquery.flot.resize.js"></script>
    <script src="<?php echo base_url().'assets/' ?>script/jquery.flot.fillbetween.js"></script>
    <script src="<?php echo base_url().'assets/' ?>script/jquery.flot.stack.js"></script>
    <script src="<?php echo base_url().'assets/' ?>script/jquery.flot.spline.js"></script>
    <script src="<?php echo base_url().'assets/' ?>script/zabuto_calendar.min.js"></script>
    <script src="<?php echo base_url().'assets/' ?>script/index.js"></script>
    <!--LOADING SCRIPTS FOR CHARTS--> 
    <script src="<?php echo base_url().'assets/' ?>script/highcharts.js"></script>
    <script src="<?php echo base_url().'assets/' ?>script/data.js"></script>
    <script src="<?php echo base_url().'assets/' ?>script/drilldown.js"></script>
    <script src="<?php echo base_url().'assets/' ?>script/exporting.js"></script>
    <script src="<?php echo base_url().'assets/' ?>script/highcharts-more.js"></script>
    <script src="<?php echo base_url().'assets/' ?>script/charts-highchart-pie.js"></script>
    <script src="<?php echo base_url().'assets/' ?>script/charts-highchart-more.js"></script>
    <!--CORE JAVASCRIPT-->
    <script src="<?php echo base_url().'assets/' ?>script/main.js"></script>
    <script>        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-145464-12', 'auto');
        ga('send', 'pageview');


</script>
</body>
</html>
