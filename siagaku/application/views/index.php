<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge" /><![endif]-->
    <title>SiagaKu | Post-disaster response platform</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="icon" href="favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url().'assets/' ?>css0/bootstrap-slider.css">
    <link rel="stylesheet" href="<?php echo base_url().'assets/' ?>css0/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url().'assets/' ?>css0/flexslider.css">
    <link rel="stylesheet" href="<?php echo base_url().'assets/' ?>css0/font-awesome.css">
    <link rel="stylesheet" href="<?php echo base_url().'assets/' ?>css0/jquery.circliful.css">
    <link rel="stylesheet" href="<?php echo base_url().'assets/' ?>css0/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php echo base_url().'assets/' ?>style_maps.css" rel="stylesheet">

    <!-- Include here any theme you wish -->
    <!-- <link rel="stylesheet" href="css/themes/{theme}.css"> -->
</head>
<body data-spy="scroll" data-target=".navbar-collapse" data-offset="90">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- <div class="page-loader">
    <div class="overlay overlay-5 alpha-8">
        <div class="container">
            <div class="intro">
                <img class="logo" src="img/logo-siagaku-putih.png" alt="Next" />
            </div>
            <p>&copy; 2016 | All rights reserved. <span class="new-line bold"><a href="http://5studios.net">5studios.net</a></span></p>
        </div>
    </div>
</div> -->

<!-- < NAVIGATION WITH BACKGROUND COLOR NAVBAR >............................................ -->
<nav id="site-navigation" class="navbar navbar-left navbar-clear navbar-fixed-top navbar-top-xs main-navigation">
    <div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" >
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <a href="#main-header" class="navbar-brand">
            <img class="logo-light" src="<?php echo base_url().'assets/img/' ?>logo-siagaku.png" alt="Next" />
        </a>
    </div>

    <div id="navbar" class="navbar-collapse collapse">
        <a href="#main-header" class="sidebar-brand">
            <img class="logo" src="<?php echo base_url().'assets/img/' ?>logo-siagaku.png" alt="Next" />
        </a>

        <ul class="nav navbar-nav navbar-right">
            <!-- about = map -->
            <li><a href="#map"><i class="fa-asterisk"></i>Map</a></li>
            <!-- feature = Donasi Dana -->
            <li><a href="#donasidana"><i class="fa-cogs"></i>Donasi Dana</a></li>
            <!-- screenshots = Donasi Barang -->
            <li><a href="#donasibarang"><i class="fa-mobile"></i>Donasi Barang</a></li>
            <!-- pricing = Kebutuhan -->
            <li><a href="#kebutuhan"><i class="fa-usd"></i>Kebutuhan</a></li>
            <li><a href="#kondisiterkini"><i class="fa-usd"></i>Kondisi Terkini</a></li>
         <!--    <li><a href="login.html">Login</a></li> -->
        </ul>
    </div>
</div>

</nav>

<div id="skrollr-body">
    <!-- < MAIN CONTENT > ........................................... -->
    <div class="page-wrapper">

    <header id="header-site" class="header-site header-splash">
    
    
    <div class="container light-bg">
        <div class="intro text-center">
            <h1>Bantu Kami <span class="bold">Sekarang Juga</span></h1>
            <p class="subtitle">Telah terjadi bencana di lokasi berikut</p>

<!--             <div class="mockup-wrapper">
                <figure class="mockup mockup-tablet">
                    <img src="img/header/3.png" alt="" />
                </figure>
                <figure class="mockup mockup-absolute">
                    <img src="img/header/4.png" alt="">
                </figure>
            </div>

            <div class="row">
                
            </div> -->
        </div>
    </div>
    </header>


    <!-- ABOUT SECTION -->
<!-- <section id="" class="about"> -->
    <div class="container" style="width:100%;" id="map">
<!--         <div class="row">
            <div class="section-heading">
                <h2 class="line left"><span class="bold">Bantu Kami</span></h2>
                <p class="subtitle">Telah terjadi bencana di lokasi berikut</p>
            </div>
        </div> -->
    </div>
    <script async defer 
          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB8wgmAbnuvLLjtEcBC6fIeFkfYbFhXi5Q&callback=initMap">
    </script>
<!-- </section> -->

    <!-- FEATURES SECTION -->
<section id="donasidana" class="">
    <div class="container">
        <div class="row"><br><br></div>
        <div class="row">
            <div class="col-md-5">
                <div class="section-heading">
                    <h2 class="line left"><span class="bold">Dana Terkumpul</span></h2>
                    <p class="subtitle">Lihat donasi dana yang masuk.</p>
                </div>

                <p><span class="bold">Kami</span> merancang siagaku sebagai platform penanggulangan bencana yang transparan. Anda dapat kapan saja melihat seluruh donasi yang masuk.</p>
                
            </div>

            <div class="col-md-7 screen-show">
                <table class="table table-condensed table-hover">
                <thead>
                  <tr>
                    <th>Tanggal Donasi</th>
                    <th>Nama Donatur</th>
                    <th>Nominal Donasi</th>
                  </tr>
                </thead>
                <tbody>
				<?php foreach($dana as $row) { ?>
                  <tr>
                    <td><?php echo date_format(date_create($row->tanggal),"d F Y") ?></td>
                    <td><?php echo $row->nama_donatur ?></td>
                    <td><?php echo $row->nominal ?></td>
                  </tr>
				<?php } ?>
                </tbody>
              </table>
            </div>
        </div>
    </div>
</section>

    <section id="donasibarang" class="screenshots slider">
    <div class="container">
        <div class="row"><br><br></div>
        <div class="row">
            <div class="col-md-5">
                <div class="section-heading">
                    <h2 class="line left"><span class="bold">Donasi Barang</span></h2>
                    <p class="subtitle">Lihat donasi barang yang masuk.</p>
                </div>

                <p><span class="bold">Kami</span> merancang siagaku sebagai platform penanggulangan bencana yang transparan. Anda dapat kapan saja melihat seluruh donasi yang masuk.</p>
                
            </div>

            <div class="col-md-7 screen-show">
                <table class="table table-condensed table-hover">
                <thead>
                  <tr>
                    <th>Tanggal Donasi</th>
                    <th>Nama Donatur</th>
                    <th>Bentuk Donasi</th>
                    <th>Jumlah</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>20 Desember 2026</td>
                    <td>John</td>
                    <td>Mie Instant</td>
                    <td>1500</td>
                  </tr>
                  <tr>
                    <td>13 Januari 2016</td>
                    <td>Doe</td>
                    <td>Selimut</td>
                    <td>25</td>
                  </tr>
                  <tr>
                    <td>15 Agustus 2016</td>
                    <td>Smith</td>
                    <td>Pakaian</td>
                    <td>15</td>
                  </tr>
                  <tr>
                    <td>20 Desember 2026</td>
                    <td>John</td>
                    <td>Mie Instant</td>
                    <td>1500</td>
                  </tr>
                  <tr>
                    <td>13 Januari 2016</td>
                    <td>Doe</td>
                    <td>Selimut</td>
                    <td>25</td>
                  </tr>
                  <tr>
                    <td>15 Agustus 2016</td>
                    <td>Smith</td>
                    <td>Pakaian</td>
                    <td>15</td>
                  </tr>
                  <tr>
                    <td>20 Desember 2026</td>
                    <td>John</td>
                    <td>Mie Instant</td>
                    <td>1500</td>
                  </tr>
                  <tr>
                    <td>13 Januari 2016</td>
                    <td>Doe</td>
                    <td>Selimut</td>
                    <td>25</td>
                  </tr>
                  <tr>
                    <td>15 Agustus 2016</td>
                    <td>Smith</td>
                    <td>Pakaian</td>
                    <td>15</td>
                  </tr>
                  <tr>
                    <td>20 Desember 2026</td>
                    <td>John</td>
                    <td>Mie Instant</td>
                    <td>1500</td>
                  </tr>
                  <tr>
                    <td>13 Januari 2016</td>
                    <td>Doe</td>
                    <td>Selimut</td>
                    <td>25</td>
                  </tr>
                  <tr>
                    <td>15 Agustus 2016</td>
                    <td>Smith</td>
                    <td>Pakaian</td>
                    <td>15</td>
                  </tr>
                </tbody>
              </table>
            </div>
        </div>
    </div>
</section>


    <section id="kebutuhan" class="">
    <div class="container">
        <div class="row"><br><br></div>
        <div class="row">
            <div class="col-md-5">
                <div class="section-heading">
                    <h2 class="line left"><span class="bold">Daftar Kebutuhan</span></h2>
                    <p class="subtitle">Lihat daftar kebutuhan korban bencana.</p>
                </div>

                <p><span class="bold">Kami</span> memiliki relawan terpercaya yang selalu memberikan informasi kebutuhan korban bencara secara actual.</p>
                
            </div>

            <div class="col-md-7 screen-show">
                <table class="table table-condensed table-hover">
                <thead>
                  <tr>
                    <th>Tanggal Permintaan</th>
                    <th>Jenis Kebutuhan</th>
                    <th>Jumlah</th>
                    <th>Lokasi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>20 Desember 2026</td>
                    <td>Selimut</td>
                    <td>75</td>
                    <td>Lokasi A</td>
                  </tr>
                  <tr>
                    <td>13 Januari 2016</td>
                    <td>Perban</td>
                    <td>1000</td>
                    <td>Lokasi B</td>
                  </tr>
                  <tr>
                    <td>15 Agustus 2016</td>
                    <td>Pakaian</td>
                    <td>100</td>
                    <td>Lokasi C</td>
                  </tr>
                  <tr>
                    <td>20 Desember 2026</td>
                    <td>Selimut</td>
                    <td>75</td>
                    <td>Lokasi A</td>
                  </tr>
                  <tr>
                    <td>13 Januari 2016</td>
                    <td>Perban</td>
                    <td>1000</td>
                    <td>Lokasi B</td>
                  </tr>
                  <tr>
                    <td>15 Agustus 2016</td>
                    <td>Pakaian</td>
                    <td>100</td>
                    <td>Lokasi C</td>
                  </tr>
                  <tr>
                    <td>20 Desember 2026</td>
                    <td>Selimut</td>
                    <td>75</td>
                    <td>Lokasi A</td>
                  </tr>
                  <tr>
                    <td>13 Januari 2016</td>
                    <td>Perban</td>
                    <td>1000</td>
                    <td>Lokasi B</td>
                  </tr>
                  <tr>
                    <td>15 Agustus 2016</td>
                    <td>Pakaian</td>
                    <td>100</td>
                    <td>Lokasi C</td>
                  </tr>
                  <tr>
                    <td>20 Desember 2026</td>
                    <td>Selimut</td>
                    <td>75</td>
                    <td>Lokasi A</td>
                  </tr>
                  <tr>
                    <td>13 Januari 2016</td>
                    <td>Perban</td>
                    <td>1000</td>
                    <td>Lokasi B</td>
                  </tr>
                  <tr>
                    <td>15 Agustus 2016</td>
                    <td>Pakaian</td>
                    <td>100</td>
                    <td>Lokasi C</td>
                  </tr>
                 
                </tbody>
              </table>
            </div>
        </div>
    </div>
</section>
<section id="kondisiterkini" class="">
    <div class="container">
        <div class="row">
            <br>
            <div class="intro text-center">
              <h1>Kondisi <span class="bold">Terkini</span></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
              <div class="thumbnail">
                <a href="<?php echo base_url().'assets/' ?>img/disaster-pict-1.jpg" target="_blank">
                  <img src="<?php echo base_url().'assets/' ?>img/disaster-pict-1.jpg" alt="Disaster Picture" style="width:100%">
                  <div class="caption">
                    <p><span class="bold">India</span>, Tue 01-01-2009 06:00:25<br>Kondisi terkini evakuasi korban banjir bandang.</p>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-6">
              <div class="thumbnail">
                <a href="<?php echo base_url().'assets/' ?>img/disaster-pict-2.jpg" target="_blank">
                  <img src="<?php echo base_url().'assets/' ?>img/disaster-pict-2.jpg" alt="Disaster Picture" style="width:100%">
                  <div class="caption">
                    <p><span class="bold">Filipina</span>, Mon 18-02-2007 08:02:34<br>Kondisi terkini setelah gempa bumi berakhir.</p>
                  </div>
                </a>
              </div>
            </div>

        </div>
    </div>
</section>

    <!-- CONTACT US -->
<!-- <section id="contact-us" class="contact-us half-bg half-bg-sm left">
    <div class="overlay overlay-5 alpha-8">
        <div class="container">
            <div class="row">
                <div class="col col-sm-5">
                    <div class="section-heading text-center">
                        <h2 class="line">Need a <span class="bold">Special Requirement?</span></h2>
                        <p><span class="bold">Or have any question</span>, or just want to say hello. No matter your need, we are here to help you.</p>
                    </div>
                </div>

                <div class="col col-sm-5 col-sm-offset-2">
                    <form id="form-contact" action="srv/contact.php" method="post" class="form form-contact" name="form-contact" data-msg="section">
    <div class="row">
        <div class="col-md-6">
            <input type="text" name="ContactForm[fullName]" id="contact_fullname" class="form-control" placeholder="Full Name" required>
        </div>

        <div class="col-md-6">
            <input type="email" name="ContactForm[email]" id="contact_email" class="form-control" placeholder="Valid Email" required>
        </div>

        <div class="col-md-12">
            <input type="text" name="ContactForm[subject]" id="contact_subject" class="form-control" placeholder="Subject" required>
        </div>

        <div class="col-md-12">
            <textarea name="ContactForm[message]" id="contact_message" class="form-control" placeholder="Your Message" rows="8" required></textarea>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <button id="contact-submit" data-loading-text="Sending..." name="submit" type="submit" class="btn btn-primary">Send Message</button>
        </div>
    </div>
</form>

                </div>
            </div>
        </div>
    </div>
</section>
 -->


        <!-- FOOTER -->
<footer class="footer-main">
    <div class="footer-social">
        <div class="container text-center">
            <ul class="list list-inline">
                <li><a href="#"><i class="fa fa-facebook-official"></i><span>/Facebook</span></a></li>
                <li><a href="#"><i class="fa fa-twitter-square"></i><span>/Twitter</span></a></li>
                <li><a href="#"><i class="fa fa-linkedin-square"></i><span>/LinkedIn</span></a></li>
                <li><a href="#"><i class="fa fa-google-plus-square"></i><span>/Google +</span></a></li>
            </ul>
        </div>
    </div>

    <div class="footer-site">
        <div class="container">
            <div class="row">
                <div class="col col-sm-4">
                    <figure class="mockup logo">                   
                        <img src="<?php echo base_url().'assets/' ?>img/logo-siagaku-putih.png" alt="">
                    </figure>

                    <ul class="list list-inline bold links region">
                        <li><a href="#about" class="scrollto"><span>About us</span></a></li>
                        <li><a href="#Donasi Dana" class="scrollto"><span>Donasi Dana</span></a></li>
                        <li><a href="#contact" class="scrollto"><span>Donasi Kebutuhan</span></a></li>
                    </ul>

                    <ul class="list list-inline small copyright">
                        <li><a href="5studios.net">5studios.net</a></li>
                        <li>Copyright &copy; 2016</li>
                        <li>All rights reserved</li>
                    </ul>
                </div>
                <div class="col col-sm-4">
                    <h4 class="bold">Your Office</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur elit. Blanditiis commodi expedita, odit officiis quae qui quo?</p>
                    <ul class="list-unstyled list-icon list-icon-md">
                        <li>
                            <i class="fa-map-marker"></i>
                            <span>123 Street St, Your City, YC Your Country</span>
                        </li>
                        <li>
                            <i class="fa-phone"></i>
                            <span>(123) 456-7890</span>
                        </li>
                        <li>
                            <i class="fa-envelope-o"></i>
                            <span><a href="mailto:yourmail@domain.com">yourmail@domain.com</a></span>
                        </li>
                    </ul>
                </div>

                <div class="col col-sm-4">
                    <h4 class="bold">Subscribe to our newsletter</h4>
                    <p>By registering with us, you will receive right in your inbox all new features and updates. <span class="bold">Subscribe now!</span></p>

                    <form action="srv/subscribe.php" class="form form-subscribe" method="post" data-msg="this">
                        <div class="input-group">
                            <input class="form-control" type="email" name="SubscribeForm[email]" placeholder="Enter your email">
                            <span class="input-group-btn">
                                <button type="submit" data-loading-text="Sending..." class="btn btn-default"><i class="fa fa-envelope-o"></i></button>
                            </span>
                        </div>
                    </form>

                    <p><span class="counter">854673</span>  <span class="bold">Subscribers</span>.  <span class="light">Join Us!</span></p>
                </div>
            </div>
            <hr class="divider">
            <ul class="list list-inline small bold policy">
                <li><a href="#">Privacy policy</a></li>
                <li><a href="#">Terms</a></li>
            </ul>
        </div>
    </div>
</footer>

    </div>
</div>

<!-- MODAL -->
<div class="modal fade" id="trial-request" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-aside">

                <img src="<?php echo base_url().'assets/' ?>img/modal.jpg" alt="">
            </div>

            <div class="modal-container">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Request a Demo</h4>
                </div>
                <div class="modal-body">
                    <form id="form-trial" action="srv/trial.php" method="post" class="form form-trial" name="form-trial" data-msg=".modal-container">
                        <div class="row">
                            <div class="col-sm-12">
                                <input type="email" name="TrialForm[email]" id="trial_email" class="form-control" placeholder="Valid Email" required>
                            </div>

                            <div class="col-sm-12">
                                <input type="text" name="TrialForm[fullName]" id="trial_full_name" class="form-control" placeholder="Full Name" required>
                            </div>

                            <div class="col-sm-6">
                                <input type="text" name="TrialForm[company]" id="trial_company" class="form-control" placeholder="Company Name" required>
                            </div>

                            <div class="col-sm-6">
                                <input type="text" name="TrialForm[phone]" id="trial_phone" class="form-control" placeholder="Phone Number" required>
                            </div>
                        </div>

                        <p><i class="fa-info-circle"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquid iure magnam, minima placeat possimus provident quaerat repellat.</p>
                        <button type="submit" class="btn btn-primary modal-submit" data-loading-text="Sending...">Request Demo</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo base_url().'assets/' ?>js0/jquery.min.js"></script>
<script src="<?php echo base_url().'assets/' ?>js0/bootstrap.min.js"></script>
<script src="<?php echo base_url().'assets/' ?>js0/bootstrap-slider.min.js"></script>
<script src="<?php echo base_url().'assets/' ?>js0/jquery.circliful.min.js"></script>
<script src="<?php echo base_url().'assets/' ?>js0/jquery.counterup.min.js"></script>
<script src="<?php echo base_url().'assets/' ?>js0/jquery.easing.min.js"></script>
<script src="<?php echo base_url().'assets/' ?>js0/jquery.flexslider.min.js"></script>
<script src="<?php echo base_url().'assets/' ?>js0/jquery.mixitup.min.js"></script>
<script src="<?php echo base_url().'assets/' ?>jquery.validate.min.js"></script>
<script src="<?php echo base_url().'assets/' ?>js0/jquery.vide.min.js"></script>
<script src="<?php echo base_url().'assets/' ?>js0/jquery.waypoints.min.js"></script>
<script src="<?php echo base_url().'assets/' ?>js0/pace.min.js"></script>
<script src="<?php echo base_url().'assets/' ?>js0/skrollr.min.js"></script>
<script src="<?php echo base_url().'assets/' ?>js0/plugins/jquery.animatebar.min.js"></script>
<script src="<?php echo base_url().'assets/' ?>js0/plugins/jquery.videoplayer.min.js"></script>
<script src="<?php echo base_url().'assets/' ?>js0/vendor/modernizr-2.8.3.min.js"></script>
<script src="<?php echo base_url().'assets/' ?>js0/main.js"></script>
</body>
</html>



<script>
    function initMap() {

    var location1 = {
        info: '<strong>Aceh</strong><br>\
                    Gempa Bumi<br>\
                    <a href="https://goo.gl/fTcRpy">Check Details</a>',
        lat: 4.724616,
        long: 96.525879
    };

    var location2 = {
        info: '<strong>Bondowoso</strong><br>\
                    Banjir Bandang<br>\
                    <a href="https://goo.gl/UORHWv">Check Details</a>',
        lat: -7.925229,
        long: 113.837585
    };

    var location3 = {
        info: '<strong>Sukabumi</strong><br>\r\
                    Tanah Longosr<br>\
                    <a href="https://goo.gl/7kx16n">Check Details</a>',
        lat: -6.933880,
        long: 106.932678
    };
    var locations = [
      [location1.info, location1.lat, location1.long, 0],
      [location2.info, location2.lat, location2.long, 1],
      [location3.info, location3.lat, location3.long, 2],
    ];

    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 5,
        center: new google.maps.LatLng(-2.037170, 115.598145),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    });
    var locations = [
      [location1.info, location1.lat, location1.long, 0],
      [location2.info, location2.lat, location2.long, 1],
      [location3.info, location3.lat, location3.long, 2],
    ];

    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 5,
        center: new google.maps.LatLng(-2.037170, 115.598145),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow({});

    var marker, i;

    for (i = 0; i < locations.length; i++) {
        marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
            map: map
        });

        google.maps.event.addListener(marker, 'click', (function (marker, i) {
            return function () {
                infowindow.setContent(locations[i][0]);
                infowindow.open(map, marker);
            }
        })(marker, i));
    }
}
</script>