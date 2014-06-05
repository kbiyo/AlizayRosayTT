@section('content')

<div class="panel panel-success ">
	<div class="panel-heading">
		<h3 class="panel-title"><i class="fa fa-user"></i> Edition d'un utilisateur</h3>
	</div>
	<div class="panel-body">
		{{ Form::model($user, array('url' => '/admin/users/edit/valid', 'method' => 'post', 'role' => "form")) }}
			@include('users.admin._form')
		{{ Form::close() }}
	</div>
</div>

@stop