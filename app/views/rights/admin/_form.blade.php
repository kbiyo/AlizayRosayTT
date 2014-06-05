{{ Form::hidden('id', null) }}
<div class="form-group">
	{{ Form::label('category', 'Catégorie') }}
	{{ 
		Form::text('category', null,
		array('class' => 'form-control', 'placeholder' => "Saisissez le nom du droit")); 
	}}
	<ul>
		@foreach($errors->get('category') as $error)
		<li class="label label-warning">{{ $error }}</li>
		@endforeach
	</ul>
</div>
<div class="form-group">
	{{ Form::label('value', 'Valeur') }}
	{{ 
		Form::text('value', null,
		array('class' => 'form-control', 'placeholder' => "Saisissez la valeur du droit")); 
	}}
	<ul>
		@foreach($errors->get('value') as $error)
		<li class="label label-warning">{{ $error }}</li>
		@endforeach
	</ul>
</div>
<div class="form-group">
	{{ Form::label('label', 'Libellé') }}
	{{ 
		Form::text('label', null,
		array('class' => 'form-control', 'placeholder' => "Saisissez le libellé du droit")); 
	}}
	<ul>
		@foreach($errors->get('label') as $error)
		<li class="label label-warning">{{ $error }}</li>
		@endforeach
	</ul>
</div>
{{ Form::submit('Valider', array('class' => 'btn btn-default btn-success')) }}