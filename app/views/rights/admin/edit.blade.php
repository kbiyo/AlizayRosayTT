@section('content')

<div class="panel panel-success ">
	<div class="panel-heading">
		<h3 class="panel-title"><i class="fa fa-user"></i> Edition d'un droit</h3>
	</div>
	<div class="panel-body">
		{{ Form::model($right, array('url' => '/admin/rights/edit/valid', 'method' => 'post', 'role' => "form")) }}
			@include('rights.admin._form')
		{{ Form::close() }}
	</div>
</div>

@stop