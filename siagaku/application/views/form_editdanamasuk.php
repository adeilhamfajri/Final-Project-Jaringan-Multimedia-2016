<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard | Relawan</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/icons/favicon.ico">
    <link rel="apple-touch-icon" href="images/icons/favicon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/icons/favicon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/icons/favicon-114x114.png">
    <!--Loading bootstrap css-->
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700,300">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url().'assets/' ?>styles/jquery-ui-1.10.4.custom.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url().'assets/' ?>styles/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url().'assets/' ?>styles/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url().'assets/' ?>styles/animate.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url().'assets/' ?>styles/all.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url().'assets/' ?>styles/main.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url().'assets/' ?>styles/style-responsive.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url().'assets/' ?>styles/zabuto_calendar.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url().'assets/' ?>styles/pace.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url().'assets/' ?>styles/jquery.news-ticker.css">
</head>
<body>
    <div>
        <!--BEGIN THEME SETTING-->
   
        <!--END THEME SETTING-->
        <!--BEGIN BACK TO TOP-->
        <a id="totop" href="#"><i class="fa fa-angle-up"></i></a>
        <!--END BACK TO TOP-->
        <!--BEGIN TOPBAR-->
        <div id="header-topbar-option-demo" class="page-header-topbar">
            <nav id="topbar" role="navigation" style="margin-bottom: 0;" data-step="3" class="navbar navbar-default navbar-static-top">
            <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target=".sidebar-collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                <a id="logo" href="index.html" class="navbar-brand"><span class="fa fa-rocket"></span><span class="logo-text">Relawan</span><span style="display: none" class="logo-text-icon">µ</span></a></div>
            <div class="topbar-main"><a id="menu-toggle" href="#" class="hidden-xs"><i class="fa fa-bars"></i></a>
                
                <form id="topbar-search" action="" method="" class="hidden-sm hidden-xs">
                    <div class="input-icon right text-white"><a href="#"><i class="fa fa-search"></i></a><input type="text" placeholder="Search here..." class="form-control text-white"/></div>
                </form>
                <div class="news-update-box hidden-xs"><span class="text-uppercase mrm pull-left text-white">News:</span>
                    <ul id="news-update" class="ticker list-unstyled">
                        <li>Welcome to KAdmin - Responsive Multi-Style Admin Template</li>
                        <li>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque.</li>
                    </ul>
                </div>
                <ul class="nav navbar navbar-top-links navbar-right mbn">
                    <li class="dropdown"><a data-hover="dropdown" href="#" class="dropdown-toggle"><i class="fa fa-bell fa-fw"></i><span class="badge badge-green">3</span></a>
                        
                    </li>
                    <li class="dropdown"><a data-hover="dropdown" href="#" class="dropdown-toggle"><i class="fa fa-envelope fa-fw"></i><span class="badge badge-orange">7</span></a>
                        
                    </li>
                    <li class="dropdown"><a data-hover="dropdown" href="#" class="dropdown-toggle"><i class="fa fa-tasks fa-fw"></i><span class="badge badge-yellow">8</span></a>
                        
                    </li>
                    <li class="dropdown topbar-user"><a data-hover="dropdown" href="#" class="dropdown-toggle"><img src="images/avatar/48.jpg" alt="" class="img-responsive img-circle"/>&nbsp;<span class="hidden-xs">Ade Ilham Fajri</span>&nbsp;<span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-user pull-right">
                            <li><a href="#"><i class="fa fa-user"></i>My Profile</a></li>
                            <li><a href="#"><i class="fa fa-calendar"></i>My Calendar</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i>My Inbox<span class="badge badge-danger">3</span></a></li>
                            <li><a href="#"><i class="fa fa-tasks"></i>My Tasks<span class="badge badge-success">7</span></a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="fa fa-lock"></i>Lock Screen</a></li>
                            <li><a href="Login.html"><i class="fa fa-key"></i>Log Out</a></li>
                        </ul>
                    </li>
                    <li id="topbar-chat" class="hidden-xs"><a href="javascript:void(0)" data-step="4" data-intro="&lt;b&gt;Form chat&lt;/b&gt; keep you connecting with other coworker" data-position="left" class="btn-chat"><i class="fa fa-comments"></i><span class="badge badge-info">3</span></a></li>
                </ul>
            </div>
        </nav>
            <!--BEGIN MODAL CONFIG PORTLET-->
            <div id="modal-config" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" data-dismiss="modal" aria-hidden="true" class="close">
                                &times;</button>
                            <h4 class="modal-title">
                                Modal title</h4>
                        </div>
                        <div class="modal-body">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eleifend et nisl eget
                                porta. Curabitur elementum sem molestie nisl varius, eget tempus odio molestie.
                                Nunc vehicula sem arcu, eu pulvinar neque cursus ac. Aliquam ultricies lobortis
                                magna et aliquam. Vestibulum egestas eu urna sed ultricies. Nullam pulvinar dolor
                                vitae quam dictum condimentum. Integer a sodales elit, eu pulvinar leo. Nunc nec
                                aliquam nisi, a mollis neque. Ut vel felis quis tellus hendrerit placerat. Vivamus
                                vel nisl non magna feugiat dignissim sed ut nibh. Nulla elementum, est a pretium
                                hendrerit, arcu risus luctus augue, mattis aliquet orci ligula eget massa. Sed ut
                                ultricies felis.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-default">
                                Close</button>
                            <button type="button" class="btn btn-primary">
                                Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--END MODAL CONFIG PORTLET-->
        </div>
        <!--END TOPBAR-->
        <div id="wrapper">
<!--BEGIN SIDEBAR MENU-->
<nav id="sidebar" role="navigation" data-step="2" data-intro="Template has &lt;b&gt;many navigation styles&lt;/b&gt;"
                data-position="right" class="navbar-default navbar-static-side">
    <div class="sidebar-collapse menu-scroll">
        <ul id="side-menu" class="nav">
            <div class="clearfix"></div>
            <li> 
                <a href="<?php echo base_url().'index.php/relawan/lokasi_bencana'; ?>">
                    <i class="fa fa-send-o fa-fw"><div class="icon-bg bg-green"></div></i>
                    <span class="menu-title">Lokasi Bencana</span>
                </a>     
            </li>
            
            <li>
                <a href="<?php echo base_url().'index.php/relawan/kebutuhan_korban'; ?>">
                    <i class="fa fa-th-list fa-fw"><div class="icon-bg bg-blue"></div></i>
                    <span class="menu-title">Kebutuhan Korban</span>
                </a>      
            </li>

            <li>
                <a href="<?php echo base_url().'index.php/relawan/dana_masuk'; ?>">
                    <i class="fa fa-desktop fa-fw"><div class="icon-bg bg-blue"></div></i>
                    <span class="menu-title">Dana Masuk</span>
                </a>
            </li>

            <li>
                <a href="<?php echo base_url().'index.php/relawan/bantuan_materi'; ?>">
                    <i class="fa fa-edit fa-fw"><div class="icon-bg bg-red"></div></i>
                    <span class="menu-title">Bantuan Materi</span>
                </a>
            </li>

            <li>
                <a href="<?php echo base_url().'index.php/relawan/jenis_bantuan_materi'; ?>">
                    <i class="fa fa-edit fa-fw"><div class="icon-bg bg-yellow"></div></i>
                    <span class="menu-title">Jenis Bantuan Materi</span>
                </a>
            </li>

            <li>
                <a href="<?php echo base_url().'index.php/relawan/log'; ?>">
                    <i class="fa fa-edit fa-fw"><div class="icon-bg bg-yellow"></div></i>
                    <span class="menu-title">Log</span>
                </a>
            </li> 
        </ul>
    </div>
</nav>
<!--END SIDEBAR MENU-->
          
          
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
                            <div class="panel-heading" align="center">Kelola Donasi Dana</div>
                            <div class="panel-body">
                            <form method="POST" action="<?php echo base_url().'index.php/crud_danamasuk/do_update' ?>" enctype="multipart/form-data">
                                <table class="table table-hover table-striped">
                                    <thead>
                                    <tr>
                                        <th>ID Donasi</th>
                                        <th>Nominal</th>
                                        <th>Nama Donatur</th>
                                        <th>Tanggal Donasi</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <tr>
                                        <td><input type="hidden" name="nominal" value="<?php echo $id_dana; ?>" /></td>
                                        <td><input type="text" name="nominal" value="<?php echo $nominal; ?>" /></td>
                                        <td><input type="text" name="nama_donatur" value="<?php echo $nama_donatur; ?>" /></td>
										<td><input type="text" name="tanggal_donasi" value="<?php echo $tanggal_donasi; ?>" /></td>
                                        
										<td><button class="btn btn-success" type="submit">Update</button></td>   
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
