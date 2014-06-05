@section('content')

<div class="panel panel-success ">
	<div class="panel-heading">
		<h3 class="panel-title"><i class="fa fa-user"></i> Edition d'un club</h3>
	</div>
	<div class="panel-body">
		{{ Form::model($club, array('url' => '/admin/clubs/edit/valid', 'method' => 'post', 'role' => "form")) }}
			@include('clubs.admin._form')
		{{ Form::close() }}
	</div>
</div>

@stop