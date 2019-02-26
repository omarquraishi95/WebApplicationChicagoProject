function initMap() {
  var location = {lat:41.8781,lng:-87.6298 };
  var map = new google.maps.Map(document.getElementById('map'),{
    zoom: 10,
    center: location
  });
  var marker = new google.maps.Marker({
    position: location,
    map: map
  });
}
