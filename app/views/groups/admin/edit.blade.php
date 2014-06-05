@section('content')

<div class="panel panel-success ">
	<div class="panel-heading">
		<h3 class="panel-title"><i class="fa fa-user"></i> Edition d'un groupe</h3>
	</div>
	<div class="panel-body">
		{{ Form::model($group, array('url' => '/admin/groups/edit/valid', 'method' => 'post', 'role' => "form")) }}
			@include('groups.admin._form')
		{{ Form::close() }}
	</div>
</div>

@stop