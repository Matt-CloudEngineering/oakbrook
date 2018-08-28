@include('partials.head')

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NJF9N6D"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

@include('partials.nav')

<div class="carousel-inner" role="listbox" style="margin-top: 50px;">
  <div class="item active">
    <img src="./img/rec_pics/best13.jpg" alt="Apartment Photos" width="65%">
    <div class="carousel-caption">
    	<!-- Used to open the Modal -->
    	<a class="btn btn-default" data-toggle="modal" data-target="#myModal2"><span class="glyphicon glyphicon-modal-window"></span>&nbsp;Apartment Prices</a>
    	<a class="btn btn-default" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-modal-window"></span>&nbsp;Apartment Amenities</a>
    </div> 
  </div>
</div>

<!-- Modal, Contact Form -->
<div class="modal fade" id="myModal2" role="dialog">
	<div class="modal-dialog">
	    <!-- Modal content-->
	    <div class="modal-content amenities">
			<div class="modal-header" style="padding: 10px 12px">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4>Unit Prices</h4>
		    </div>
		    <div class="modal-body row">
		      <div class="col-md-6">
		        <!-- Your first column here -->
		      </div>
		      <div class="col-md-6">
		        <!-- Your second column here -->
		      </div>
		    </div>
	        <div class="modal-body">
        		@foreach ($prices as $price)
		        	<div class="panel panel-default">
		        		@php
		        			setlocale(LC_MONETARY, 'en_US');
		        			$sprice = money_format('%i', $price->price);
		        		@endphp		        	  
		        	  <div class="panel-body">
		        	    Layout - {{$price->descr}}:  <strong>${{$sprice}}</strong>
		        	  </div>
		        	</div>
	        	@endforeach
	        </div>
	    </div>     
	</div>
</div>

<!-- Modal, Contact Form -->
<div class="modal fade" id="myModal" role="dialog">
	<div class="modal-dialog">
	    <!-- Modal content-->
	    <div class="modal-content amenities">
			<div class="modal-header" style="padding: 10px 12px">
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

<div class="row middle" style="background-color:#2d2d30;padding:0;border:none">
	<div class="col-md-8 col-md-offset-2">
		<div style="margin: 2rem;">
			We invite you to come and experience the feeling of living in an apartment home that has been built with a distinctive eye for detail. Our open floor plans offer large furniture friendly living room with generous natural lighting, formal dining area for entertaining, large bedrooms and multi-use room, which can be an office, breakfast nook or a den! No need to choose between what you want to bring and what you need to bring, our apartment homes are big enough to accomodate it all! Enjoy living space square footage from 1150sg ft to 1400 sq ft. Each apartment home has been designed to provide ample storage space, enormous closets and our Deluxe models offer 400 sq ft of basement storage! Oak Brook Commons is conveniently located on Route 9, just south of the Farm to Market and Kinns Road.
		</div>
	</div>
</div>

</body>
</html>

@include('partials.footer')
</body>
</html>

