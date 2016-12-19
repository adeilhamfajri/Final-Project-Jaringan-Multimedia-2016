<?php
$latitude = 0.0;
$longitude = 0.0;
$nama = "test";
?>

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
<body>


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
            
            <li><a href="<?php echo base_url()?>"><i class="fa-usd"></i>Back</a></li>
         <!--    <li><a href="login.html">Login</a></li> -->
        </ul>
    </div>
</div>

</nav>


			<div class="col-md-5" style="width:40%; margin-top: 120px;" id="map">
                <script async defer 
					src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB8wgmAbnuvLLjtEcBC6fIeFkfYbFhXi5Q&callback=initMap">
				</script>
                
            </div>
			<?php foreach($lokasi as $row) { ?>
			<div class="col-md-5" style="margin-top: 100px;">
                <div class="section-heading">
                    <h2 class="line left"><span class="bold"><?php echo $row->nama_lokasi; $nama =  $row->nama_lokasi;?></span></h2>
                    <p class="subtitle">Latitude: <?php echo $row->latitude; $latitude = $row->latitude; ?>, Longitude: <?php echo $row->longitude; $longitude = $row->longitude; ?></p>
                </div>

                <p><span class="bold"><?php echo $row->nama_lokasi; ?>. </span><?php echo $row->deskripsi; ?>.</p>
                
            </div>
			<?php } ?>
			
			<div class="col-md-7 screen-show">
                <table class="table table-condensed table-hover">
                <thead>
                  <tr>
                    <th>Tanggal Permintaan</th>
                    <th>Jenis Kebutuhan</th>
                    <th>Jumlah</th>
                  </tr>
                </thead>
                <tbody>
				<?php foreach($kebutuhan as $row) { ?>
                  <tr>
                    <td><?php echo date_format(date_create($row->tanggal_permintaan),"d F Y"); ?></td>
                    <td><?php echo $row->nama_barang; ?></td>
                    <td><?php echo $row->jumlah_kebutuhan; ?></td>
                  </tr>
				<?php } ?>
                </tbody>
              </table>
			</div>
</body>
</html>

<script>
    function initMap() {

    var location1 = {
        info: '<strong><?php echo $nama; ?></strong><br>\
                    <?php echo $latitude; ?>, \
                    <?php echo $longitude; ?>',
        lat: <?php echo $latitude; ?>,
        long: <?php echo $longitude; ?>
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
    /*<?php $i = 0;?>
	var locations = [
	<?php foreach($location as $row){ ?>
	["<?php echo $row['nama_lokasi']; ?><br><?php echo $row['deskripsi']; ?><br><a href=\"<?php echo base_url().'index.php/home/detail_kebutuhan/'.$row['id_lokasi'] ?>\">Cek detail</a>",
	<?php echo $row['latitude']; ?>,
	<?php echo $row['longitude']; ?>,
	<?php echo $i; $i++;?>],
	<?php }?>
      //[location2.info, location2.lat, location2.long, 1],
      //[location3.info, location3.lat, location3.long, 2],
    ];*/

    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 5,
         center: new google.maps.LatLng(-2.037170, 115.598145),
         mapTypeId: google.maps.MapTypeId.ROADMAP
     });
     var locations = [
       [location1.info, location1.lat, location1.long, 0],
     ];

    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 12,
        center: new google.maps.LatLng(location1.lat, location1.long),
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