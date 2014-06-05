@section('content')
<ul>
	<li>{{ $data['count']['users'] . ' ' . Str::plural('Utilisateur', $data['count']['users']) }}</li>
	<li>{{ $data['count']['groups'] . ' ' . Str::plural('Groupe', $data['count']['groups']) }}</li>
	<li>{{ $data['count']['rights'] . ' ' . Str::plural('Droit', $data['count']['rights']) }}</li>
	<li>{{ $data['count']['news'] . ' ' . Str::plural('News', $data['count']['news']) }}</li>
	<li>{{ $data['count']['comments'] . ' ' . Str::plural('Commentaire', $data['count']['comments']) }}</li>
	<li>{{ $data['count']['clubs'] . ' ' . Str::plural('Club', $data['count']['clubs']) }}</li>
	<li>{{ $data['count']['equipes'] . ' ' . Str::plural('Equipe', $data['count']['equipes']) }}</li>
	<li>{{ $data['count']['championnats'] . ' ' . Str::plural('Championnat', $data['count']['championnats']) }}</li>
	<li>{{ $data['count']['menus'] . ' ' . Str::plural('Menu', $data['count']['menus']) }}</li>
</ul>

<div class="col-md-4 col-xs-12">
	<div class="flip-container " ontouchstart="this.classList.toggle('hover');">
		<div class="flipper">
			<div class="front">
				<aside>
					<img src="http://fakeimg.pl/450x320/">
				</aside>   
			</div>
			<div class="back"> 
				<aside>
					<img src="http://fakeimg.pl/450x320/">
				</aside>   
				<article>
					<h3>Fake Title</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, delectus, iste, fugiat saepe quis possimus necessitatibus quaerat fugit deserunt odit hic maxime illum amet corporis natus facilis odio. Accusamus, veritatis!</p>
				</article>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>

@stop
