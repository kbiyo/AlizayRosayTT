@section('css')
	<link rel="stylesheet" href="{{asset('assets/css/flipper.css')}}">
@stop

@section('content')

<section class="column-group gutters article">
<div class="all-25 small-100 tiny-100">
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
</section>

@stop