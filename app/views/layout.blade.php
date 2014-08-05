<!DOCTYPE html>
<html lang="en">
<head>

	@include('front.meta')

	<title>Blank Page - SB Admin</title>

	@include('front.link')
	@yield('css')
</head>

<body>
	<div class="ink-grid">
		@include('front.header')

		@yield('content')
	</div>

	<footer class="clearfix">
		<div class="ink-grid">
			<ul class="unstyled inline half-vertical-space">
				<li class="active"><a href="#">About</a></li>
				<li><a href="#">Sitemap</a></li>
				<li><a href="#">Contacts</a></li>
			</ul>
			<p class="note">Identification of the owner of the copyright, either by name, abbreviation, or other designation by which it is generally known.</p>
		</div>
	</footer>
	@include('front.js')
	@yield('js')

</body>
</html>