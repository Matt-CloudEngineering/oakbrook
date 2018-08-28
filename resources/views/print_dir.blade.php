
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAR_q_slEJnNQ7K6dPgRR3VO4a8Sre8ilU&region=USA"></script>
<script>
var directionsDisplay;
var directionsService = new google.maps.DirectionsService();
var map;
var geocoder;
var oakbrook = new google.maps.LatLng(42.881052,-73.771277);
/*work out splitting the URL up properly*/
var sHost = "http://" + window.location.hostname+ "/print_dir?";
var xlength = sHost.length 
var sGet = window.location.href.substr(xlength);

var sData=sGet.split('&');
sData[0]=unescape(sData[0]);
sData[1]=unescape(sData[1]);
var sStart=sData[0].split('=');
var start=sStart[1];
var sLength=sData[1].split('=');
var slength=sLength[1];
/* Variables for loading directions page */
console.log(window.location.href +" "+ xlength +" "+sGet+" "+sStart+" "+ start+" "+slength);

function initialize() {
	/* controlling height of directions panel and thereby defining map_canvas */
  slength=String(slength+"px");	
  console.log ("\n" + slength);
	document.getElementById('directions_panel').setAttribute("style","height:"+slength);
	var sMlength=900-parseInt(slength);
	sMlength=String(sMlength+"px");
  console.log ("\n" + sMlength);
	document.getElementById('map_canvas').setAttribute("style","height:"+ sMlength);	

	Mapit();
	}	
function Mapit() {
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

	calcRoute();
}

function calcRoute() {
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
  setTimeout(Print,3000);
}

function Print() {
	window.print();
}
</script>
<style type="text/css">
	* {
  margin: 0px;
  padding: 0px;
}
body	{
	margin-top: 8px;
	}
	#map_canvas {
 		width: 670px;
 		height:  300px;
 		border:yellow thin dashed;
}
 	#directions_panel	{
 		width: 670px;
 		overflow-y: auto;
		overflow-x: hidden;
		padding-left: 8px;
}
</style>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h3>Directions to Oak Brook Commons</h3>
      <p>P.O. Box 781 | Clifton Park NY 12065 | 518-371-0216 
      	<span style="font-size:x-small;font-style:italic;">This document has been designed to print one page</span></p>
      <div id="directions_panel"></div>
      <div id="map_canvas"></div>
    </div>
  </div>
</div>      
<script>initialize()</script>
