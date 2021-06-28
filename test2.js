function initMap() {

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 5,
    center: { lat: -15.7942357, lng: -47.8821945 },
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
  lat: -19.9286,
  lng: -43.93888,
  info: "marker 1"
}, {
  lat: -19.85758,
  lng: -43.9668,
  info: "marker 2"
}, {
  lat: -18.24587,
  lng: -43.59613,
  info: '<h3 id="firstHeading" class="firstHeading">Γούναρη 16</h3>' + "<p><b>Ωράριο:</b>, Δ-Σ <b>(07:00-21:00)</b>, Κυριακή (09:00 - 13:00)</p> " + "<p><a href='https:coffeebrandsdelivery.com'>παράγειλε online</a></p>"
}, {
  lat: -20.46427,
  lng: -45.42629,
  info: "marker 4"
}, {
  lat: -20.37817,
  lng: -43.41641,
  info: "marker 5"
}, {
  lat: -20.09749,
  lng: -43.48831,
  info: "marker 6"
}, {
  lat: -21.13594,
  lng: -44.26132,
  info: "marker 7"
}, ];

google.maps.event.addDomListener(window, "load", initMap);