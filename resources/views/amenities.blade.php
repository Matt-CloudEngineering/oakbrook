@include('partials.head')

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NJF9N6D"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

@include('partials.nav')

<div class="carousel-inner" role="listbox">
  <div class="item active">
    <img src="./img/rec_pics/best7.jpg" alt="Apartment Photos" width="65%">
    <div class="carousel-caption">
    	<!-- Used to open the Modal -->
    	<a class="btn btn-default" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-modal-window"></span>&nbsp;Apartment Amentieis</a>
    </div> 
  </div>
</div>

<!-- Modal, Contact Form -->
<div class="modal fade" id="myModal" role="dialog">
	<div class="modal-dialog">

	    <!-- Modal content-->
	    <div class="modal-content amenities">
			<div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4>Apartment Amenities</h4>
		    </div>
	        <div class="modal-body">
	        	<ul>
	        		<li>High Efficiency Gas Heat</li>
	        		<li>Central Air Conditioning</li>
	        		<li>Self-Cleaning Ovens</li>
	        		<li>Garbage Disposal</li>
	        		<li>Dishwasher</li>
	        		<li>Microwave Oven</li>
	        		<li>Side-by-Side Refrigerator/Freezer With Ice Maker & Water Dispenser</li>
	        		<li>Ceramic Tile Flooring</li>
	        		<li>Pantry</li>
	        		<li>Walk-In Closets</li>
	        		<li>Plush Carpet</li>
	        		<li>Ceiling Lights in Bedrooms</li>
	        		<li>Washer & Dryer Hook-ups</li>
	        		<li>Private Patio/Balcony</li>
	        		<li>Comfort Level Toilets</li>
	        		<li>Oak & Maple Cabinets</li>
	        		<li>24-Hour Maintenance Staff</li>
	        		<li>Smoke Free Apartments</li>			
	        		<li>Handicapped Accessible Apartments</li>
	        		<li>Monthly Discounts Offered to Seniors over 65</li>
	        		<li>Gas Fireplaces in Select apartments</li>
	        		<li>Vaulted Ceilings in Select apartments</li>
	        		<li>Basement Storage in Select apartments</li>
	        		<li>No Pets Permitted</li>
	        	</ul>
	        </div>
	    </div>     
	</div>
</div>



</body>
</html>

@include('partials.footer')
</body>
</html>

