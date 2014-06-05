@section('css')
<link href="{{asset('assets/css/froala_editor.min.css')}}" rel="stylesheet">
@stop

@section('js')
<script src="{{asset('assets/js/froala_editor.min.js')}}"></script>
<script src="{{asset('assets/js/editable-froala-custom.js')}}"></script>
@stop

@section('content')

<div class="panel panel-success ">
	<div class="panel-heading">
		<h3 class="panel-title"><i class="fa fa-user"></i> Ajout d'une news</h3>
	</div>
	<div class="panel-body">
		{{ Form::open(array('url' => '/admin/news/add/valid', 'method' => 'post', 'role' => "form")) }}
			@include('news.admin._form')
		{{ Form::close() }}
	</div>
</div>

@stop