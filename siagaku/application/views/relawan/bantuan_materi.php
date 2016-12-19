
<!--END SIDEBAR MENU-->
          

            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">
                            Forms</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="dashboard.html">Home</a>&nbsp;&nbsp;<i
                            class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="hidden"><a href="#">Forms</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Bantuan Materi</li>
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
                            <br/><br/><br/>
                            <span><div align="center" class="col-lg-12"></span>
                                <div align="center" class="row">
                                    <div align="center" class="col-lg-12">
                                        <div align="center" class="panel panel-orange">
                                            <div class="panel-heading" align="center">Data Donasi Barang</div>
                                            <div class="panel-body">
                                                <table class="table table-hover table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th>Barang</th>
                                                        <th>Jumlah</th>
                                                        <th>Donatur</th>
                                                        <th>Tanggal</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <form method="post" action="<?php echo base_url(); ?>index.php/crud_donasibarang/tambah_donasi">
                                                            <td>
                                                                <select class="form-control" name="id_barang">
                                                                <?php
                                                                    foreach ($barang as $key) {
                                                                ?>
                                                                        <option value="<?php echo $key->id_barang; ?>">
                                                                            <?php echo $key->nama_barang; ?>
                                                                        </option>
                                                                <?php } ?>
                                                                </select>
                                                            </td>
                                                            <td><input type="text" name="jumlah_donasi" /></td>
                                                            <td><input type="text" name="nama_donatur" /></td>
                                                            <td>
                                                                <input type="text" name="tanggal_donasi" value="<?php echo date('Y-m-d'); ?>" readonly/>
                                                            </td>
                                                            <td><input type="submit" class="btn btn-success" value="Tambah"></td>   
                                                        </form>
                                                        
                                                    </tr>
                                                    <?php
                                                        foreach($donasi as $baris){
                                                            if (isset($cek) && $cek == $baris->id_donasi) {
                                                    ?>
                                                                <form method="post" action="<?php echo base_url(); ?>index.php/crud_donasibarang/edit_donasi/<?php echo $cek; ?>">
                                                                    <td>
                                                                        <select class="form-control" name="id_barang">
                                                                        <?php
                                                                            foreach ($barang as $key) {
                                                                        ?>
                                                                                <option value="<?php echo $key->id_barang; ?>" <?php if ($baris->id_barang == $key->id_barang) echo "selected"; ?>>
                                                                                    <?php echo $key->nama_barang; ?>
                                                                                </option>
                                                                        <?php } ?>
                                                                        </select>
                                                                    </td>
                                                                    <td><input type="text" name="jumlah_donasi" value="<?php echo $baris->jumlah_donasi; ?>"/></td>
                                                                    <td><input type="text" name="nama_donatur" value="<?php echo $baris->nama_donatur; ?>"/></td>
                                                                    <td>
                                                                        <input type="text" name="tanggal_donasi" value="<?php echo $baris->tanggal_donasi; ?>" readonly/>
                                                                    </td>
                                                                    <td><input type="submit" class="btn btn-success" value="Update"></td>   
                                                                </form>
                                                    <?php
                                                            }else {
                                                    ?>
                                                        <tr>
                                                            <td>
                                                                <?php
                                                                foreach ($barang as $key) {
                                                                    if ($key->id_barang == $baris->id_barang) {
                                                                        echo $key->nama_barang;
                                                                    }
                                                                }
                                                                ?>
                                                            </td>
                                                            <td><?php echo $baris->jumlah_donasi; ?></td>
                                                            <td><?php echo $baris->nama_donatur; ?></td>
                                                            <td><?php echo $baris->tanggal_donasi; ?></td>
                                                            <td>
                                                            <a class="btn btn-warning" href="<?php echo base_url(); ?>index.php/crud_donasibarang/show_editdonasi/<?php echo $baris->id_donasi; ?>">Edit</a>&nbsp;
                                                            <a class="btn btn-danger" href="<?php echo base_url(); ?>index.php/crud_donasibarang/hapus_donasi/<?php echo $baris->id_donasi; ?>">Hapus</a>
                                                            </td>
                                                        </tr>
                                                    <?php
                                                        }
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