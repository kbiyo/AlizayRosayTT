@section('content')

<div class="panel panel-success ">
	<div class="panel-heading">
		<h3 class="panel-title"><i class="fa fa-user"></i> Edition d'un championnat</h3>
	</div>
	<div class="panel-body">
		{{ Form::model($championship, array('url' => '/admin/championships/edit/valid', 'method' => 'post', 'role' => "form")) }}
			@include('championships.admin._form')
		{{ Form::close() }}
	</div>
</div>

@stop