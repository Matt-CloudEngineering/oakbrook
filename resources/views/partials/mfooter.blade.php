<footer class="text-center">
	<div class="row">
		<div class="col-md-3">
			<p><a class="nav navbar-nav navbar-left" href="tel:518-371-0216"><span class="glyphicon glyphicon-earphone"></span>&nbsp;518-371-0216</a></p><br/>
			<p class="nav navbar-nav navbar-left">© Oak Brook Commons 2017</p>
		</div>
		<div class="col-md-6">	
		     <div itemscope itemtype="http://schema.org/LocalBusiness">
		     	<meta itemprop="description" content="Luxury Apartment Buildings and Leasing">
		        <span itemprop="name" style="display:block;"><strong>Oak Brook Commons</strong></span>
		        <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
					<span itemprop="streetAddress" style="display:block;">1810 US Route 9</span>
					<span itemprop="addressLocality">Clifton Park</span>,
					<span itemprop="addressRegion">&nbsp;NY</span>
					<span itemprop="postalCode">&nbsp;12065</span>
					</div>
			</div>
		</div>
		<div class="col-md-3">
			<div style="float:right">
				<a class="up-arrow" href="#myCarousel" data-toggle="tooltip" title="TO TOP">
			    	<span class="glyphicon glyphicon-chevron-up"></span>
			    </a>
			</div>
			<div class="rbox">
				<a href="http://wwww.facebook.com/oakbrookcommons" targe="_blank"><img src="./img/facebook-3-xxl.png" width="40px"></a>
				<a href="https://plus.google.com/107079844685710893928" targe="_blank"><img src="./img/google-plus-3-xxl.png" width="40px"></a>
				<a href="https://www.instagram.com/oakbrookcommons/" target="_blank"><img src="./img/instagram-3-xxl.png" width="40px"></a>
			</div>
		</div>
	</div>	
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- Additional Scripts Required for Google Maps -->
<!-- Add Google Maps -->

<script>
// Setup Google Maps Function
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
$(document).ready(function(){
    
    // Initialize Tooltip
    $('[data-toggle="tooltip"]').tooltip(); 

});
</script>
<!-- Load Google Maps and call function -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSyN5ce-achXEKYFqCjPs2zPppxZoCnw8&callback=initMap"
type="text/javascript"></script>