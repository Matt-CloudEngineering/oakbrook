@extends('layouts.oakmain')

@section('title','Oak Brook Commons Apartments Location')
@section('description', "This is a map of our location")

@section('content')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAR_q_slEJnNQ7K6dPgRR3VO4a8Sre8ilU"></script>

<script>
var directionsDisplay;
var directionsService = new google.maps.DirectionsService();
var map;
var geocoder;
var oakbrook = new google.maps.LatLng(42.881052,-73.771277);

function initialize() {
	directionsDisplay = new google.maps.DirectionsRenderer();
	var mapOptions = {
	  zoom: 12,
	  center: oakbrook,
	  panControl: false,
	  zoomControl: true,
	  mapTypeId: google.maps.MapTypeId.ROADMAP

	}
	map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);
	marker = new google.maps.Marker({position: oakbrook, map: map});
	directionsDisplay.setMap(map);
	directionsDisplay.setPanel(document.getElementById('directions_panel'));
}

function calcRoute() {
  var start = document.getElementById('start').value;
  var oakbrook = new google.maps.LatLng(42.881052,-73.771277);
  var request = {
    origin: start,
    destination: oakbrook,
    travelMode: google.maps.TravelMode.DRIVING
  };
  directionsService.route(request, function(result, status) {
	 if (status == google.maps.DirectionsStatus.OK) {
	   directionsDisplay.setDirections(result);
    }
  });
}

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

function aPrint()	{
	var oFBDiv=document.getElementById('headtext');
	var oPrint=document.createElement('img');
		
	oPrint.setAttribute("src","./images/print_grn.png");
	oPrint.setAttribute("width","54px");
	oPrint.setAttribute("height","34px");
	oPrint.setAttribute("onclick","javascript:nPrint()");
	oPrint.setAttribute("title","Click to Print Map");
	oPrint.style.cursor="pointer";	
	oFBDiv.appendChild(oPrint);
}

function nPrint() {
	var start = document.getElementById('start').value;
	var divLength= document.getElementById('directions_panel').height;
	window.open('/print_dir?start='+start+"&"+"length="+divLength);
}

function disableEnterKey(e) {
     var key;      
     if(window.event)
          key = window.event.keyCode; //IE
     else
          key = e.which; //firefox      

     return (key != 13);
}

</script>
<style type="text/css">
  #map_canvas {
  		float: left;
  		height: 600px;
  		width: 600px;
  		border:yellow thin dashed;
  			}
  	#directions_panel	{
  		max-height: 600px;
  		width: 380px;
  		overflow-y: auto;
		overflow-x: hidden;
		font-size: smaller;
  		}
</style>

	<!-- Main Page Area -->
	<div class="row">
		<div class="col-md-12">
			<h4>Directions to Oak Brook Commons from Your Location</h4>			
		</div>
	</div>
	<div class="row">
		<div id="map_canvas" class="col-md-6 img-responsive"></div>
		<div class="col-md-5">
				<form name="form1" method="post" onsubmit="submit_handler()">
					<div class="form-group">
						<label for=your_loc>Enter Your Address</label><br />
						<input id='start' class="form-control" name='your_loc' placeholder='anystreet, anytown, anystate' size=60 onKeyPress="return disableEnterKey(event)"/>
					</div>
					<button type='button' class="btn btn-default" onclick="javascript:calcRoute()">submit</button>
					<a class="btn btn-default" onclick="nPrint()"><span class="glyphicon glyphicon-print"></span></a>
				</form>
			</div>			
		</div>		
	</div>

	<script>initialize()</script>
@endsection
