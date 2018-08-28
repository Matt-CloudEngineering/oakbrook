@include('partials.head')

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NJF9N6D"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

@include('partials.nav')

<div class="carousel-inner" role="listbox">
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
			<div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal2">&times;</button>
		        <h4>Unit Prices</h4>
		    </div>
	        <div class="modal-body">
	        	<table>
	        		<thead>
	        			<th width="85%">Layout</th>
	        			<th>Price</th>
	        		</thead>
	        		<tbody>
	        			<tr>
	        				<td>1 Bedroom & 1 Bath</td>
	        				<td> $1105</td>
	        			</tr>
	        			<tr>
	        				<td>2 Bedroom & 1 Bath</td>
	        				<td> $1250</td>
	        			</tr>
	        			<tr>
	        				<td>2 Bedroom & 2 Bath</td>
	        				<td> $1300</td>
	        			</tr>
	        			<tr>
	        				<td>2 Bedroom & 2 Bath with Storage</td>
	        				<td> $1565</td>
	        			</tr>
	        		</tbody>
	        	</table>
	        </div>
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
	        		<li>Gas High Efficiency Heat</li>
	        		<li>Central Air Conditioning</li>
	        		<li>Self-Cleaning Ovens</li>
	        		<li>Garbage Disposal</li>
	        		<li>Dishwasher</li>
	        		<li>Microwave Oven</li>
	        		<li>Side-by-Side Refrigerator/Freezer With Ice Maker</li>
	        		<li>Washer & Dryer Hook-ups</li>
	        		<li>Private Patio/Porch</li>
	        		<li>Plush Wall-to-Wall Carpeting</li>
	        		<li>Plenty Of Closets and Storage Space</li>
	        		<li>Bright and Cheerful Breakfast Areas</li>
	        		<li>Internet Wiring in all apartments</li>
	        		<li>24-Hour Maintenance Staff Availability</li>
	        		<li>Pet Free Community</li>
	        		<li>Smoke Free Apartments</li>			
	        		<li>Handicapped Accessible Apartments</li>
	        		<li>	We Offer Senior Citizens 65 and Older a Monthly Discount</li>
	        		<li>Garages Available</li>
	        		<li>Gas Fireplaces in Select apartments</li>
	        		<li>Vaulted Ceilings in Select apartments</li>
	        		<li>Basement Storage in Select apartments</li>
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

