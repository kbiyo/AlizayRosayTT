@section('content')

<div class="panel panel-success ">
	<div class="panel-heading">
		<h3 class="panel-title"><i class="fa fa-group"></i> Ajout d'un groupe</h3>
	</div>
	<div class="panel-body">
		{{ Form::open(array('url' => '/admin/groups/add/valid', 'method' => 'post', 'role' => "form")) }}
			@include('groups.admin._form')
		{{ Form::close() }}
	</div>
</div>

@stop