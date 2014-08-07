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

@foreach($listNews as $news)
<section class="column-group gutters article">
	<div class="all-30">
		<div class="image">
			<a href="{{url('news', array($news->id, Str::slug($news->title)))}}">
				<img style="width:100%;" src="{{$news->image}}" />
			</a>
		</div>
	</div>
	<div class="all-70">
		<a href="{{url('news', array($news->id, Str::slug($news->title)))}}">
			<h2>{{stripslashes($news->title)}}</h2>
		</a>
		<p>{{stripslashes($news->shortContent)}}</p>
		<p><small>Article posté le {{ $news->published_at }} par <a href="{{url('users', array($news->User->id, $news->User->surname))}}">{{$news->User->surname}}</a></small></p>
	</div>
</section>
@endforeach
{{$listNews->links()}}
@stop