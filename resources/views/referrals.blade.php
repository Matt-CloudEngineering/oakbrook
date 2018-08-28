@include('partials.head')

<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NJF9N6D"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

@include('partials.nav')

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div style="">
				<div>
					<h4>Resident Testimonials</h4>
				</div>

			@foreach ($referrals as $referral)


				<div style="border:solid medium darkgray;border-radius:35px;padding:2em;width:80%">

					<span>{{$referral->referrer}}</span><br/>
					<span>{{$referral->use_date}}</span><br/>
						<p>{!!$referral->quote!!}</p>
				</div>
			@endforeach
			</div>
		</div>
	</div>
</div>

@include('partials.footer')
</body>
</html>