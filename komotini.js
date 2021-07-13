function initMap() {

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 19,
    center: { lat: -18.24587, lng: -43.59613 },
    mapId: '182b7b93f25f9f97'  
  });
  var infoWin = new google.maps.InfoWindow();
  // Add some markers to the map.
  // Note: The code uses the JavaScript Array.prototype.map() method to
  // create an array of markers based on a given "locations" array.
  // The map() method here has nothing to do with the Google Maps API.
  var markers = locations.map(function(location, i) {
    var marker = new google.maps.Marker({
      position: location,
      icon: 'http://psofos.gr/coffeebrands/img/fav33.png'
    });
    google.maps.event.addListener(marker, 'click', function(evt) {
      infoWin.setContent(location.info);
      infoWin.open(map, marker);
    })
    return marker;
  });

  // markerCluster.setMarkers(markers);
  // Add a marker clusterer to manage the markers.
  var markerCluster = new MarkerClusterer(map, markers, {
    imagePath: 'img/m' /* https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m */
  });

}
var locations = [{
  lat: -18.24587,
  lng: -43.59613,
  info: '<h3 id="firstHeading" class="firstHeading">Γούναρη 16</h3>' + "<p><b>Ωράριο:</b> Δ-Σ <b>(07:00-21:00)</b>, Κυριακή (09:00 - 13:00)</p> " + "<p><a style='border: 1px solid #212949;color: #212949;background-color: #73A6E4; text-decoration:none;' href='https://coffeebrandsdelivery.com/gounari_16'>παράγειλε online</a></p>"
}];

google.maps.event.addDomListener(window, "load", initMap);