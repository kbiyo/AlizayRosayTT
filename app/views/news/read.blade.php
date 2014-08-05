@section('css')
<style type="text/css">

	body {
		background: #ededed;
	}

	header h1 small:before  {
		content: "|";
		margin: 0 0.5em;
		font-size: 1.6em;
	}

	article header{
		padding: 0;
		overflow: hidden;
	}

	article footer {
		background: none;
	}

	article {
		border-bottom: 1px solid #ccc;
	}

	.date {
		float: right;
	}

	summary {
		font-weight: 700;
		line-height: 1.5;
	}

	footer {
		background: #ccc;
	}
</style>
@stop

@section('content')
<section class="column-group gutters article">
	<div class="xlarge-70 large-70 medium-100 small-100 tiny-100">
		<article>
			<header>
				<h1 class="push-left">{{$news->title}}</h1>
				<p class="push-right"><time pubdate="pubdate">le {{ $news->published_at }}</time></p>
			</header>
			<summary>{{$news->shortContent}}</summary>
			<figure class="ink-image vertical-space">
				<img src="{{$news->image}}" alt="{{$news->title}}">
				<figcaption class="dark over-bottom">
					{{$news->shortContent}}
				</figcaption>
			</figure>
			{{$news->content}}
			<footer>
				<p><small><em>Article ajouté par : <a href="{{url('users', array($news->User->id, $news->User->surname))}}">{{$news->User->surname}}</a></em></small></p>
			</footer>
		</article>
		<section id="editor">
			<div id='edit' style="margin-top: 30px;">
			</div>
			<br/>
			<button class="pull-right">Envoyer</button>
			<br/>
			<br/>
		</section>
		@foreach($news->Comments as $comment)
		<article class="all-100">
			<b><a href="{{url('users', array($news->User->id, $news->User->surname))}}">{{$news->User->surname}}</a> :</b> 
			<em class="pull-right">
				il y a 1 mois  
			</em>
			{{$comment->message}}
		</article>
		@endforeach
	</div>
	<section class="xlarge-30 large-30 medium-100 small-100 tiny-100">
		<h2>Related</h2>
		<ul class="unstyled">
			<li class="column-group half-gutters">
				<div class="all-40 small-50 tiny-50"><img src="holder.js/640x380/auto/ink" alt=""></div>
				<div class="all-60 small-50 tiny-50"><p>"Where's them crabs, Hoo-Hoo?" Edwin demanded. "Granser's set upon  having a snack."</p></div>
			</li>
			<li class="column-group half-gutters">
				<div class="all-40 small-50 tiny-50"><img src="holder.js/640x380/auto/ink" alt=""></div>
				<div class="all-60 small-50 tiny-50"><p>"Where's them crabs, Hoo-Hoo?" Edwin demanded. "Granser's set upon  having a snack."</p></div>
			</li>
			<li class="column-group half-gutters">
				<div class="all-40 small-50 tiny-50"><img src="holder.js/640x380/auto/ink" alt=""></div>
				<div class="all-60 small-50 tiny-50"><p>"Where's them crabs, Hoo-Hoo?" Edwin demanded. "Granser's set upon  having a snack."</p></div>
			</li>
			<li class="column-group half-gutters">
				<div class="all-40 small-50 tiny-50"><img src="holder.js/640x380/auto/ink" alt=""></div>
				<div class="all-60 small-50 tiny-50"><p>"Where's them crabs, Hoo-Hoo?" Edwin demanded. "Granser's set upon  having a snack."</p></div>
			</li>
			<li class="column-group half-gutters">
				<div class="all-40 small-50 tiny-50"><img src="holder.js/640x380/auto/ink" alt=""></div>
				<div class="all-60 small-50 tiny-50"><p>"Where's them crabs, Hoo-Hoo?" Edwin demanded. "Granser's set upon  having a snack."</p></div>
			</li>
		</ul>
	</section>
</section>
@stop
