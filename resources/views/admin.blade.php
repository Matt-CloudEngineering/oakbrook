@include('partials.head')

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NJF9N6D"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

@include('partials.nav')

<div class="container">
	<div class="row">
		<div class="col-lg-3 panel">
			<h4>Apartments:</h4>
			<p>Count: {{$aptcnt}}</p>
		</div>
		<div class="col-lg-3 panel">
			<h4>Prices:</h4>
			<table>
				<tr>
					<th>Layout</th>
					<th>Price</th>
				</tr>
				@foreach($prices as $price)
					<tr>
						<td> {{$price->layout_vlu}}	</td> 
						<td> {{$price-> price}} </td>
					</tr>
				@endforeach
			</table>
		</div>
		<div class="col-lg-3 panel">
			<h4>Referrals:</h4>
			<p>Referral Count: {{$refcnt}}</p>
		</div>
	</div>	
</div>

@include('partials.footer')
</body>
</html>





