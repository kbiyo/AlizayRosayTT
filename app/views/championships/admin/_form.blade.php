{{ Form::hidden('id', null) }}
<div class="form-group">
	{{ Form::label('saison', 'Saison') }}
	{{ 
		Form::text('saison', null,
		array('class' => 'form-control', 'placeholder' => "Saisissez la saison du championnat")); 
	}}
	<ul>
		@foreach($errors->get('saison') as $error)
		<li class="label label-warning">{{ $error }}</li>
		@endforeach
	</ul>
</div>
<div class="form-group">
	{{ Form::label('niveau', 'Niveau') }}
	{{  Form::select('niveau', array('Départemental' => 'Départemental', 'Régional' => 'Régional', 'National' => 'National'), null, 
		array('class' => 'form-control')); 
	}}
	<ul>
		@foreach($errors->get('niveau') as $error)
		<li class="label label-warning">{{ $error }}</li>
		@endforeach
	</ul>
</div>
<div class="form-group">
	{{ Form::label('division', 'Division') }}
	{{ 
		Form::select('division', array(1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5'), null, 
		array('class' => 'form-control', 'placeholder' => "Saisissez la division du championnat")); 
	}}
	<ul>
		@foreach($errors->get('division') as $error)
		<li class="label label-warning">{{ $error }}</li>
		@endforeach
	</ul>
</div>
<div class="form-group">
	{{ Form::label('poule', 'Poule') }}
	{{ 
		Form::select('poule', array('A' => 'A', 'B' => 'B', 'C' => 'C', 'D' => 'D', 'E' => 'E', 'F' => 'F', 'G' => 'G', 'H' => 'H', 'I' => 'I', 'J' => 'J', 'K' => 'K', 'L' => 'L'), null, 
			array('class' => 'form-control', 'placeholder' => "Saisissez la poule du championnat")); 
	}}
	<ul>
		@foreach($errors->get('poule') as $error)
		<li class="label label-warning">{{ $error }}</li>
		@endforeach
	</ul>
</div>
<div class="form-group">
	{{ Form::label('nbEquipe', 'Nombre d\'équipes') }}
	{{ 
		Form::select('nbEquipe', array(4 => '4', 6 => '6', 8 => '8', 10 => '10', 12 => '12'), null,
		array('class' => 'form-control', 'placeholder' => "Saisissez le nombre d\'équipes du championnat")); 
	}}
	<ul>
		@foreach($errors->get('nbEquipe') as $error)
		<li class="label label-warning">{{ $error }}</li>
		@endforeach
	</ul>
</div>
<div class="form-group">
	{{ Form::label('nbPhase', 'Nombre de phase') }}
	{{ 
		Form::select('nbPhase', array(1 => '1', 2 => '2'), null, 
		array('class' => 'form-control', 'placeholder' => "Saisissez le nombre de phase du championnat")); 
	}}
	<ul>
		@foreach($errors->get('nbPhase') as $error)
		<li class="label label-warning">{{ $error }}</li>
		@endforeach
	</ul>
</div>
<div class="form-group">
	{{ Form::label('phaseStart', 'Phase de départ') }}
	{{ 
		Form::select('phaseStart', array(1 => '1', 2 => '2'), null, 
		array('class' => 'form-control', 'placeholder' => "Saisissez la phase de départ du championnat")); 
	}}
	<ul>
		@foreach($errors->get('phaseStart') as $error)
		<li class="label label-warning">{{ $error }}</li>
		@endforeach
	</ul>
</div>
{{ Form::submit('Valider', array('class' => 'btn btn-default btn-success')) }}