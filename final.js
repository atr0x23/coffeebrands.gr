function initMap() {

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 5,
    center: {
      lat: -15.7942357,
      lng: -47.8821945
    }
  });
  var infoWin = new google.maps.InfoWindow();
  // Add some markers to the map.
  // Note: The code uses the JavaScript Array.prototype.map() method to
  // create an array of markers based on a given "locations" array.
  // The map() method here has nothing to do with the Google Maps API.
  var markers = locations.map(function(location, i) {
    var marker = new google.maps.Marker({
      position: location   
    });
    google.maps.event.addListener(marker, 'click', function(evt) {
      infoWin.setContent(location.info);
      infoWin.open(map, marker);
    })
    return marker;
  });

  // markerCluster.setMarkers(markers);
  // Add a marker clusterer to manage the markers.
//  var markerCluster = new MarkerClusterer(map, markers, {
//    imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'
//  });

    
  new MarkerClusterer(map, markers, {
    imagePath:
      "https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m",
  });    
    

}
var locations = [{
  lat: -19.9286,
  lng: -43.93888,
  info: '<h2 id="firstHeading" class="firstHeading">Γουνάρη 16</h2>' + "<p><b>Uluru</b>, also referred to as <b>Ayers Rock</b>, is a large</p> " + "<p>blah blah blah</p>"
}, {
  lat: -19.85758,
  lng: -43.9668,
  info: "marker 2"
}, {
  lat: -18.24587,
  lng: -43.59613,
  info: "marker 3"
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