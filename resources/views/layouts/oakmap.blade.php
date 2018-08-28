
<title>@yield('title')</title>
<meta name='description' content="@yield('description')">
@include('partials.head')
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NJF9N6D"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) --><body>

@include('partials.nav')

<div class="container">
	@yield('content')
</div>


@include('partials.mfooter')
</body>
</html>

