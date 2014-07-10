@section('link')
<!-- Place favicon.ico and apple-touch-icon(s) here  -->
<!--<link rel="shortcut icon" href="{{asset('assets/ink-css/img/favicon.ico')}}">
<link rel="apple-touch-icon-precomposed" href="{{asset('assets/ink-css/img/touch-icon.57.png')}}">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('assets/ink-css/img/touch-icon.72.png')}}">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('assets/ink-css/img/touch-icon.114.png')}}">
<link rel="apple-touch-startup-image" href="{{asset('assets/ink-css/img/splash.320x460.png')}}" media="screen and (min-device-width: 200px) and (max-device-width: 320px) and (orientation:portrait)">
<link rel="apple-touch-startup-image" href="{{asset('assets/ink-css/img/splash.768x1004.png')}}" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)">
<link rel="apple-touch-startup-image" href="{{asset('assets/ink-css/img/splash.1024x748.png')}}" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)">
-->
<!-- load inks css from the cdn -->
<link rel="stylesheet" type="text/css" href="{{asset('assets/ink-css/css/ink-flex.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/font-awesome/css/font-awesome.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/front/style.css')}}">
@stop

@section('meta')
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>AlizayRosayTT.fr</title>
<meta name="description" content="">
<meta name="author" content="">
<meta name="HandheldFriendly" content="True">
<meta name="MobileOptimized" content="320">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
@stop

@section('js')
<script type="text/javascript" src="{{asset('assets/ink-css/js/modernizr.js')}}"></script>
<script type="text/javascript">
	Modernizr.load({
		test: Modernizr.flexbox,
		nope : "{{asset('assets/ink-css/css/ink-legacy.min.css')}}"
	});
</script>

<!-- load inks javascript files from the cdn -->
<script type="text/javascript" src="{{asset('assets/ink-css/js/ink-all.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/ink-css/js/autoload.js')}}"></script>

@stop

@section('content')
<section class="pub hide-all show-large show-xlarge xlarge-push-right large-push-right">
	<div class="column-group gutters">
	<a href="#" class="all-100 mrec"><img src="http://fakeimg.pl/300x250/" /></a>
		<div class="all-50"><img src="http://fakeimg.pl/300x250/" /></div>
		<div class="all-50"><img src="http://fakeimg.pl/300x250/" /></div>
	</div>
	<p>
		"Red is not the right word," was the reply. "The plague was scarlet.  The whole face and body turned scarlet in an hour's time. Don't I  know? Didn't I see enough of it? And I am telling you it was scarlet  because&mdash;well, because it was scarlet. There is no other word for it."
	</p>
</section>

<section class="highlight">
	<div class="highlight-wrapper">
		<div class="column-group gutters">
			<div class="xlarge-60 large-60 medium-50 small-100 tiny-100">
				<div class="image">
					<a href="news.html">
						<img src="http://rsltt.fr/assets/img/news/resized/539d760cb2b11_coupes%20comite%202014%20002.JPG?1402828301" />
					</a>
				</div>
			</div>
			<div class="xlarge-40 large-40 medium-50 small-100 tiny-100">
				<a href="#">
					<h2>Le Neubourg était beaucoup plus fort</h2>
				</a>
				<p>Le vendredi 6 juin , notre équipe fanion se déplaçait au gymnase des Andelys pour y affronter l'équipe du Neubourg en finale de la coupe du comité "A"</p>
			</div>
		</div>
		<div class="column-group gutters">
			<div class="all-50 small-100 tiny-100">
				<figure class="cap-bot">
					<img src="http://rsltt.fr/assets/img/news/resized/5378be64ac800_mondiaux_de_tennis_de_table_zhang_jike_champion_du_monde.jpg?1400421989">
					<figcaption>
						<h4>Fake Title</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, delectus, iste, fugiat saepe quis possimus necessitatibus quaerat fugit deserunt odit hic maxime illum amet corporis natus facilis odio. Accusamus, veritatis!</p>
					</figcaption>
				</figure>
			</div>
			<div class="all-50 small-100 tiny-100">
				<figure class="cap-bot">
					<img src="http://rsltt.fr/assets/img/news/resized/53720abf9295f_DSC05415.JPG?1399982784">
					<figcaption>
						<h4>Fake Title</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, delectus, iste, fugiat saepe quis possimus necessitatibus quaerat fugit deserunt odit hic maxime illum amet corporis natus facilis odio. Accusamus, veritatis!</p>
					</figcaption>
				</figure>
			</div>
		</div>
		<div class="column-group gutters">
			<div class="all-33 small-100 tiny-100">
				<figure class="cap-bot">
					<a href="#"><img src="http://rsltt.fr/assets/img/news/resized/53720abf9295f_DSC05415.JPG?1399982784">
						<figcaption>
							<h4>Fake Title</h4>
						</a>
					</figcaption>
				</figure>
			</div>
			<div class="all-33 small-100 tiny-100">
				<figure class="cap-bot">
					<img src="http://rsltt.fr/assets/img/news/resized/53720abf9295f_DSC05415.JPG?1399982784">
					<figcaption>
						<h4>Fake Title</h4>
					</figcaption>
				</figure>
			</div>
			<div class="all-33 small-100 tiny-100">
				<figure class="cap-bot">
					<img src="http://rsltt.fr/assets/img/news/resized/53720abf9295f_DSC05415.JPG?1399982784">
					<figcaption>
						<h4>Fake Title</h4>
					</figcaption>
				</figure>
			</div>
		</div>
	</div>
</section>



@stop