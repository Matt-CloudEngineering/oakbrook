@extends('layouts.oakmain')


@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-4">
      <img class="img-rounded office" src="/img/rental_office.jpg" alt="Rental Office Image">
      <h3>Oak Brook Commons LLC</h3>
      <p>Route 9, P.O. Box 781</br>
      Clifton Park, NY 12065</p>
      <p>P <a href="tel:518-371-0216">518-371-0216</a></br>
      F 518-371-8357</p>
      <div class="ohours">
        <p><span class="subhead">Office Hours:</span><br />
        Monday through Friday: 9 AM to 5 PM</br>
        Saturday: 11 AM to 4 PM</p>
        <p>Evening Hours by Appointment</p>
      </div>
      <a href="emailus.php">Contact Us</a>
    </div>
    <div class="col-lg-8">
    	<div id="map_canvas"></div>
    </div>
  </div>
</div>


<script>
  var geocoder;
  var map;
function initMap() {
  geocoder = new google.maps.Geocoder();
  var latlng = new google.maps.LatLng(42.881052,-73.771277);
  var mapOptions = {
    zoom: 16,
    center: latlng,
    mapTypeId: google.maps.MapTypeId.HYBRID
  }
  
  map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);
  marker = new google.maps.Marker({position: latlng, map: map});

  
}
</script>
  <!-- Add Google Maps -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSyN5ce-achXEKYFqCjPs2zPppxZoCnw8&callback=initMap"
type="text/javascript"></script>
@endsection
