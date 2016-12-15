<?php
 $lat = -6.418662;
 $long = 106.940918;
 
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "relawan_bencana";
// Create connection
 $conn = mysqli_connect($servername, $username, $password, $dbname);
 
 $query = "SELECT * FROM lokasi;";
 
 $result = mysqli_query($conn, $query);
 
 $location = array();
?>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Google Maps APIs</title>

	<link href="style.css" rel="stylesheet">
</head>

<body>

	<div style="width:50%;" id="map"></div>

	<!--<script src="script.js"></script>-->
	<script async defer 
			src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB8wgmAbnuvLLjtEcBC6fIeFkfYbFhXi5Q&callback=initMap">
	</script>
</body>

</html>

<script>
	function initMap() {

	var location1 = {
		info: '<strong>Chipotle on Broadway</strong><br>\
					5224 N Broadway St<br> Chicago, IL 60640<br>\
					<a href="https://goo.gl/maps/jKNEDz4SyyH2">Get Directions</a>',
		lat: -8.019365,
		long: 113.655281
	};

	var location2 = {
		info: '<strong>Chipotle on Belmont</strong><br>\
					1025 W Belmont Ave<br> Chicago, IL 60657<br>\
					<a href="https://goo.gl/maps/PHfsWTvgKa92">Get Directions</a>',
		lat: -7.907161,
		long: 114.063148
	};

	var location3 = {
		info: '<strong>Chipotle on Sheridan</strong><br>\r\
					6600 N Sheridan Rd<br> Chicago, IL 60626<br>\
					<a href="https://goo.gl/maps/QGUrqZPsYp92">Get Directions</a>',
		lat: -8.019365,
		long: 113.809776
	};
	<?php $i = 0;?>
	var locations = [
	<?php while($row = mysqli_fetch_array($result)){ ?>
	["<?php echo $row['nama_lokasi']; ?><br><?php echo $row['deskripsi']; ?><br><a href=\"#\">Cek detail</a>",
	"<?php echo $row['latitude']; ?>",
	"<?php echo $row['longitude']; ?>",
	<?php echo $i; $i++;?>],
	<?php }?>
      //[location1.info, <?php echo $lat;?>, <?php echo $long;?>, 0],
      //[location2.info, location2.lat, location2.long, 1],
      //[location3.info, location3.lat, location3.long, 2],
    ];

	var map = new google.maps.Map(document.getElementById('map'), {
		zoom: 4,
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
