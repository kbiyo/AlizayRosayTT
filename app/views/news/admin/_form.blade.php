{{ Form::hidden('id', null) }}
<div class="form-group">
	{{ Form::label('title', 'Titre') }}
	{{ 
		Form::text('title', null,
		array('class' => 'form-control', 'placeholder' => "Saisissez le titre de la news")); 
	}}
	<ul>
		@foreach($errors->get('title') as $error)
		<li class="label label-warning">{{ $error }}</li>
		@endforeach
	</ul>
</div>
<div class="form-group">
	{{ Form::label('published_at', 'Date de publication (Maintenant par defaut)') }}
	{{ 
		Form::input('datetime-local', 'published_at', null,
		array('class' => 'form-control', 'placeholder' => "Saisissez la date de publication de la news")); 
	}}
	<ul>
		@foreach($errors->get('published_at') as $error)
		<li class="label label-warning">{{ $error }}</li>
		@endforeach
	</ul>
</div>
<div class="form-group">
	{{ Form::label('shortContent', 'Description') }}
	{{ 
		Form::textarea('shortContent', null,
		array('class' => 'form-control', 'placeholder' => "Saisissez le contenu court de la news")); 
	}}
	<ul>
		@foreach($errors->get('shortContent') as $error)
		<li class="label label-warning">{{ $error }}</li>
		@endforeach
	</ul>
</div>
<div class="form-group">
	{{ Form::label('content', 'Contenu') }}
	{{ 
		Form::textarea('content', null,
		array('class' => 'form-control', 'placeholder' => "Saisissez le contenu de la news")); 
	}}
	<ul>
		@foreach($errors->get('content') as $error)
		<li class="label label-warning">{{ $error }}</li>
		@endforeach
	</ul>
</div>
{{ Form::submit('Valider', array('class' => 'btn btn-default btn-success')) }}