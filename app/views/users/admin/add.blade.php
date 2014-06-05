@section('content')

<div class="panel panel-success ">
	<div class="panel-heading">
		<h3 class="panel-title"><i class="fa fa-user"></i> Ajout d'un utilisateur</h3>
	</div>
	<div class="panel-body">
		{{ Form::open(array('url' => '/admin/users/add/valid', 'method' => 'post', 'role' => "form")) }}
			@include('users.admin._form')
		{{ Form::close() }}
	</div>
</div>

@stop