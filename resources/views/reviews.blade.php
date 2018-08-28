@include('partials.head')

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NJF9N6D"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

@include('partials.nav')

<div class="container">
	<div class="row">
		<div class="col-md-8">
			<div class="gradeus-embed" data-url="https://grade.us/oakbrook/"></div><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.grade.us/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document, "script", "gradeus-wjs");</script>
		</div>
		
			<div class="col-md-4">
				<div style="margin-top: 90%;">
					<div>
						<h2>Resident Referrals</h2>
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