{{ Form::hidden('id', null) }}
<div class="form-group">
	{{ Form::label('lastname', 'Nom') }}
	{{ 
		Form::text('lastname', null,
		array('class' => 'form-control', 'placeholder' => "Saisissez le nom de l'utilisateur")); 
	}}
	<ul>
		@foreach($errors->get('lastname') as $error)
		<li class="label label-warning">{{ $error }}</li>
		@endforeach
	</ul>
</div>
<div class="form-group">
	{{ Form::label('firstname', 'Prénom') }}
	{{ 
		Form::text('firstname', null,
		array('class' => 'form-control', 'placeholder' => "Saisissez le prénom de l'utilisateur")); 
	}}
	<ul>
		@foreach($errors->get('firstname') as $error)
		<li class="label label-warning">{{ $error }}</li>
		@endforeach
	</ul>
</div>
<div class="form-group">
	{{ Form::label('surname', 'Surnom') }}
	{{ 
		Form::text('surname', null,
		array('class' => 'form-control', 'placeholder' => "Saisissez le surnom de l'utilisateur")); 
	}}
	<ul>
		@foreach($errors->get('surname') as $error)
		<li class="label label-warning">{{ $error }}</li>
		@endforeach
	</ul>
</div>
<div class="form-group">
	{{ Form::label('email', 'Email') }}
	{{ 
		Form::text('email', null,
		array('class' => 'form-control', 'placeholder' => "Saisissez l'email de l'utilisateur")); 
	}}
	<ul>
		@foreach($errors->get('email') as $error)
		<li class="label label-warning">{{ $error }}</li>
		@endforeach
	</ul>
</div>
<div class="form-group">
	{{ Form::label('groups', 'Groupes') }}
	{{ 
		Form::select('groups[]', 
		Group::all()->lists('title','id'), 
		isset($user)?$user->Groups()->lists('id_group'):null, 
		array('multiple' => true, 'class' => 'form-control')) 
	}}
</div>
{{ Form::submit('Valider', array('class' => 'btn btn-default btn-success')) }}