/* Google Map
 ========================================================*/

function initialize() {

	var location = new google.maps.LatLng(51.540286, -0.056162);
	

	var mapProp = {

		center : location,
		zoom : 18,
		disableDefaultUI : true,
		panControl : true,
		zoomControl : true,
		mapTypeControl : true,
		scaleControl : true,
		streetViewControl : true,
		overviewMapControl : true,
		rotateControl : true,
		backgroundColor : 'black',
		mapTypedId : google.maps.MapTypeId.HYBRID,

	}; 
	
	zoomControlOptions: { style:
		google.maps.ZoomControlStyle.SMALL;
	} 
	
	mapTypeControlOptions: { 
		style:google.maps.MapTypeControlStyle.DROPDOWN_MENU;
		position:google.maps.ControlPosition.TOP_CENTER;
	}

	var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

	var marker = new google.maps.Marker({
		position : location,
		map : map,
		icon : 'images/gmap_marker_active.png',
		animation : google.maps.Animation.DROP

	});

	marker.setMap(map);

	google.maps.event.addListener(marker, 'click', function() {

		map.setZoom(22);
		map.setCenter(marker.getPosition());

	});

	google.maps.event.addListener(marker, 'click', function() {
		window.setTimeout(function() {
			map.setZoom(18);
			map.setCenter(marker.getPosition());
		}, 3000);

	});

	google.maps.event.addListener(map, 'center_changed', function() {

		window.setTimeout(function() {
			map.panTo(marker.getPosition());
		}, 3000);

	});

	var infowindow = new google.maps.InfoWindow({
		content : "Fast Mot Limited <br> 2-6 Lamb Lane <br> Hackney, E8 3PL"
	});

	google.maps.event.addListener(marker, 'mouseover', function() {
		infowindow.open(map, marker);

		google.maps.event.addListener(marker, 'mouseout', function() {
			infowindow.close(map, marker);
		});
	});

};

google.maps.event.addDomListener(window, 'load', initialize);

