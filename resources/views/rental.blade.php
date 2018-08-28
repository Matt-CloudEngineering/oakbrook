@include('partials.head')

<link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NJF9N6D"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

@include('partials.nav')

<div class="container">
	<div class="col-lg-1">
	</div>
	<div class="col-lg-10">
		<p style="text-align: center;">No Application or Credit Processing Fees to Apply</p>
		<embed src="{{ URL::asset('img/Rental_Application.pdf') }}" width="100%" height="1000" type='application/pdf'>
	</div>
	<div class="col-lg-1">
	</div>
</div>

</body>
</html>

@include('partials.footer')
</body>
</html>

