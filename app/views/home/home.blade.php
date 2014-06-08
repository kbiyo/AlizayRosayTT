@section('content')

@foreach ($news as $item)
<div class="col-md-4 col-xs-12">
	<div class="flip-container " ontouchstart="this.classList.toggle('hover');">
		<div class="flipper">
			<div class="front">
				<aside>
					<img src="{{$item->image}}">
				</aside>   
			</div>
			<div class="back"> 
				<aside>
					<img src="{{$item->image}}">
				</aside>   
				<article>
					<h3>{{$item->title}}</h3>
					{{$item->shortContent}}
				</article>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
@endforeach

@stop