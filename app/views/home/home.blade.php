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
		<a href="#" class="all-100 mrec"><img src="{{asset('assets/images/image.jpg')}}" /></a>
		<div class="all-50"><img src="{{asset('assets/images/image.jpg')}}" /></div>
		<div class="all-50"><img src="{{asset('assets/images/image.jpg')}}" /></div>
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
						<img style="width:100%;" src="{{$news[0]->image}}" />
					</a>
				</div>
			</div>
			<div class="xlarge-40 large-40 medium-50 small-100 tiny-100">
				<a href="#">
					<h2>{{stripslashes($news[0]->title)}}</h2>
				</a>
				<p>{{stripslashes($news[0]->shortContent)}}</p>
			</div>
		</div>
		<div class="column-group gutters">
			@for($i=1;$i<=2;$i++)
			<div class="all-50 small-100 tiny-100">
				<figure class="cap-bot">
					<img src="{{$news[$i]->image}}">
					<figcaption>
						<h4>{{stripslashes($news[$i]->title)}}</h4>
						<p>{{stripslashes($news[$i]->shortContent)}}</p>
					</figcaption>
				</figure>
			</div>
			@endfor
		</div>
		<div class="column-group gutters">
			@for($i=3;$i<=5;$i++)
			<div class="all-33 small-100 tiny-100">
				<figure class="cap-bot">
					<img src="{{$news[$i]->image}}">
					<figcaption>
						<h4>{{stripslashes($news[$i]->title)}}</h4>
						<p>{{stripslashes($news[$i]->shortContent)}}</p>
					</figcaption>
				</figure>
			</div>
			@endfor
		</div>
	</div>
</section>



@stop