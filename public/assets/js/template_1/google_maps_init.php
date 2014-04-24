
<?php ?>
function initialize() {
	var myLatlng = new google.maps.LatLng( 28.595393, -81.308452);

	var mapCanvas = document.getElementById('map_canvas');

	var map_options = {
	center: new google.maps.LatLng(28.595393, -81.308452),
	zoom: 15,
	mapTypeId: google.maps.MapTypeId.ROADMAP
	}
	var map = new google.maps.Map(map_canvas, map_options);

	var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'Hello World!'
  	});
}

google.maps.event.addDomListener(window, 'load', initialize);


