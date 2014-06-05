{{ Form::hidden('id', null) }}
<div class="form-group">
	{{ Form::label('abreviation', 'Abreviation') }}
	{{ 
		Form::text('abreviation', null,
		array('class' => 'form-control', 'placeholder' => "Saisissez l'abreviation du club")); 
	}}
	<ul>
		@foreach($errors->get('abreviation') as $error)
		<li class="label label-warning">{{ $error }}</li>
		@endforeach
	</ul>
</div>
<div class="form-group">
	{{ Form::label('nom', 'Nom') }}
	{{ 
		Form::text('nom', null,
		array('class' => 'form-control', 'placeholder' => "Saisissez le nom du club")); 
	}}
	<ul>
		@foreach($errors->get('nom') as $error)
		<li class="label label-warning">{{ $error }}</li>
		@endforeach
	</ul>
</div>
<div class="form-group">
	{{ Form::label('numero_affiliation', 'Numero d\'Affiliation') }}
	{{ 
		Form::input('number', 'numero_affiliation', null,
		array('class' => 'form-control', 'placeholder' => "Saisissez le numero d'affiliation du club")); 
	}}
	<ul>
		@foreach($errors->get('numero_affiliation') as $error)
		<li class="label label-warning">{{ $error }}</li>
		@endforeach
	</ul>
</div>
{{ Form::submit('Valider', array('class' => 'btn btn-default btn-success')) }}