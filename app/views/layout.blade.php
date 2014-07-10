<!DOCTYPE html>
<html lang="en">
<head>

	@yield('meta')

	<title>Blank Page - SB Admin</title>

	@yield('link')
	@yield('css')
</head>

<body>
	<div class="ink-grid">
		<header class="vertical-space">
			<h1>AlizayRosayTT<small>BLAH BLAH</small></h1>
			<nav class="ink-navigation">
				<ul class="menu horizontal black">
					<li class="active"><a href="#"><i class="fa fa-home fa-lg" style="color:white;"></i>&nbsp;Accueil</a></li>
					<li><a href="#">item</a></li>
					<li><a href="#">item</a></li>
				</ul>
			</nav>
		</header>
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
	@yield('js')

</body>
</html>