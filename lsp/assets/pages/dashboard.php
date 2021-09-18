<!DOCTYPE html>
<html>
<head>
	<title>Lembaga Sertifikasi Profesi LSP</title>
	<h1><center>LOKASI PELATIHAN</center></h1>
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
   integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
   crossorigin=""/>

   <style type="text/css">
   	#mapid { height: 500px;}
   </style>
</head>
<body>
	<div id="mapid"></div>
</body>
	<!-- Make sure you put this AFTER Leaflet's CSS -->
	 <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
	   integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
	   crossorigin=""></script>

	 <script type="text/javascript">
	 	var mymap = L.map('mapid').setView([-5.399415, 119.822450], 10000);

	 	L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
	    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
	    maxZoom: 20,
	    id: 'mapbox/streets-v11',
	    tileSize: 512,
	    zoomOffset: -1,
	    accessToken: 'pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw'
		}).addTo(mymap);

		var iconRumah = L.icon({iconUrl:"logo.png", iconSize: [44, 44], iconAnchor: [22,44], tooltipAnchor : [22, -20]}); 

		var marker = L.marker([-3.3422031,114.6138476], {icon:iconRumah}).addTo(mymap).bindTooltip("Kalsel Telematika");
		var marker = L.marker([-0.8974721,100.3501677], {icon:iconRumah}).addTo(mymap).bindTooltip("Universitas Negeri Padang");
		var marker = L.marker([-7.786044,110.376187], {icon:iconRumah}).addTo(mymap).bindTooltip("Universitas Kristen Duta Wacana");
		var marker = L.marker([1.3143101,124.9151259], {icon:iconRumah}).addTo(mymap).bindTooltip("SMK N 1 Tondano");
		var marker = L.marker([-5.1695721,119.4808382], {icon:iconRumah}).addTo(mymap).bindTooltip("Lembaga Pendidikan EL MATRA");
		var marker = L.marker([-8.6807,115.2282756], {icon:iconRumah}).addTo(mymap).bindTooltip("Institut Desain & Bisnis Bali");
	 </script>
</html>