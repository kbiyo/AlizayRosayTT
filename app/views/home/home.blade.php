@section('content')
<section class="pub hide-all show-large show-xlarge xlarge-push-right large-push-right">
	<div class="column-group gutters">
		<a href="{{route('Perma', array('yv7uxthd9c'))}}" class="all-100 mrec" title="Accéder à l'article"><img src="{{asset('assets/images/affichePromo.jpg')}}" /></a>
		<div class="all-50"><img src="{{asset('assets/images/logoRosay.png')}}" /></div>
		<div class="all-50"><img src="{{asset('assets/images/alizay.png')}}" /></div>
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
					<a href="{{route('ReadNews', array($news[0]->id, Str::slug($news[0]->title)))}}" title="Accéder à l'article">
						<img style="width:100%;" src="{{asset($news[0]->image)}}" />
					</a>
				</div>
			</div>
			<div class="xlarge-40 large-40 medium-50 small-100 tiny-100">
				<a href="{{route('ReadNews', array($news[0]->id, Str::slug($news[0]->title)))}}" title="Accéder à l'article">
					<h2>{{stripslashes($news[0]->title)}}</h2>
				</a>
				<p>{{stripslashes($news[0]->shortContent)}}</p>
			</div>
		</div>
		<div class="column-group gutters">
			@for($i=1;$i<=2;$i++)
			<div class="all-50 small-100 tiny-100">
				<figure class="cap-bot">
					<a href="{{route('ReadNews', array($news[$i]->id, Str::slug($news[$i]->title)))}}" title="Accéder à l'article">
						<img src="{{$news[$i]->image}}">
					</a>
					<figcaption>
						<a href="{{route('ReadNews', array($news[$i]->id, Str::slug($news[$i]->title)))}}" title="Accéder à l'article">
							<h4>{{stripslashes($news[$i]->title)}}</h4>
						</a>
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
					<a href="{{route('ReadNews', array($news[$i]->id, Str::slug($news[$i]->title)))}}" title="Accéder à l'article">
						<img src="{{$news[$i]->image}}">
					</a>
					<figcaption>
						<a href="{{route('ReadNews', array($news[$i]->id, Str::slug($news[$i]->title)))}}" title="Accéder à l'article">
							<h4>{{stripslashes($news[$i]->title)}}</h4>
						</a>
						<p>{{stripslashes($news[$i]->shortContent)}}</p>
					</figcaption>
				</figure>
			</div>
			@endfor
		</div>
	</div>
</section>

@stop