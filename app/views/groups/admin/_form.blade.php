{{ Form::hidden('id', null) }}
<div class="form-group">
	{{ Form::label('title', 'Titre') }}
	{{ 
		Form::text('title', null,
		array('class' => 'form-control', 'placeholder' => "Saisissez le titre du groupe")); 
	}}
	<ul>
		@foreach($errors->get('title') as $error)
		<li class="label label-warning">{{ $error }}</li>
		@endforeach
	</ul>
</div>
<div class="form-group">
	{{ Form::label('description', 'Description') }}
	{{ 
		Form::text('description', null,
		array('class' => 'form-control', 'placeholder' => "Saisissez la description du groupe")); 
	}}
	<ul>
		@foreach($errors->get('description') as $error)
		<li class="label label-warning">{{ $error }}</li>
		@endforeach
	</ul>
</div>
<div class="form-group">
	{{ Form::label('rights', 'Droits') }}
	{{ 
		Form::select('rights[]', 
		Right::all()->lists('label','id'), 
		isset($group)?$group->Rights()->lists('id_right'):null, 
		array('multiple' => true, 'class' => 'form-control')) 
	}}
</div>
<div class="form-group">
	{{ Form::label('users', 'Utilisateurs') }}
	{{ 
		Form::select('users[]', 
		User::all()->lists('lastname','id'), 
		isset($group)?$group->Users()->lists('id_user'):null, 
		array('multiple' => true, 'class' => 'form-control')) 
	}}
</div>
{{ Form::submit('Valider', array('class' => 'btn btn-default btn-success')) }}