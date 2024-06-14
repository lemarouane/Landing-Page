function initialize() {
	var swallStyles = [
      {
        "stylers": [
          { "hue": "#0055b7" }
        ]
      }
    ];
	
	if($(window).width()<601) var isDraggable = false;
	else var isDraggable = true;
	var mapOptions = {
		center: { lat: 34.067372, lng: -118.385983},
		zoom: 15,
		disableDefaultUI: true,
		scrollwheel: false,
		draggable: isDraggable,
        mapTypeControlOptions: {
            mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'swall']
        },
        mapTypeId: 'swall'
	};
	var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

	var image = new google.maps.MarkerImage('/wp-content/themes/swall/img/map-marker.png', null, null, null, new google.maps.Size(120,92));	
	var myLatLng = new google.maps.LatLng(34.067372, -118.385983);
	var swall = new google.maps.Marker({
		position: myLatLng,
		map: map,
        animation: google.maps.Animation.DROP,
		icon: image
	});
    var styledMapOptions = {
        name: 'Swall Sugery Center'
    };
    var customMapType = new google.maps.StyledMapType(swallStyles, styledMapOptions);

    map.mapTypes.set('swall', customMapType);
    map.setMapTypeId('swall');

	google.maps.event.addDomListener(document.getElementById('zoom-out'), 'click', function() {
	var currentZoomLevel = map.getZoom();
		if(currentZoomLevel != 0){
			map.setZoom(currentZoomLevel - 1);
		}     
	});
	google.maps.event.addDomListener(document.getElementById('zoom-in'), 'click', function() {
	var currentZoomLevel = map.getZoom();
		if(currentZoomLevel != 21){
			map.setZoom(currentZoomLevel + 1);
		}
	});
	google.maps.event.addDomListener(window, 'resize', function() {
		map.setCenter(myLatLng);
	});
}
google.maps.event.addDomListener(window, 'load', initialize);
