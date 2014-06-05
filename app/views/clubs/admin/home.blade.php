@section('content')

@if(Session::has('success'))
<div class="alert alert-dissmissable alert-success">{{ Session::get('success') }}</div>
@endif

<div class="panel panel-success">
	<div class="panel-heading">
	<h3 class="panel-title"><i class="fa fa-user"></i> Liste des Clubs 
	{{ isset($textSearched)?'('.count($clubs).' clubs correspondent à la recherche)':'('.count($clubs).' clubs)' }}
	</h3>
	</div>
	<div class="panel-body">
		{{ Form::open(array('url' => '/admin/clubs/search/', 'method' => 'post', 'role' => "form")) }}
			<div class="form-group input-group col-lg-offset-8 col-lg-4">
					{{ Form::text('searchedText', isset($textSearched)?$textSearched:'', array('class' => 'form-control', 'placeholder' => "Recherchez un club...")); }}
	                <span class="input-group-btn">
	                	<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
	                </span>
            </div>
		{{ Form::close() }}
		<div class="table-responsive">
			<table class="table table-bordered table-hover table-striped tablesorter">
				<thead>
					<tr>
						<th># <i class="fa fa-sort"></i></th>
						<th>Abrev. <i class="fa fa-sort"></i></th>
						<th>Nom <i class="fa fa-sort"></i></th>
						<th>Numéro Affiliation <i class="fa fa-sort"></i></th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($clubs as $club)
					<tr>
						<td style="text-align: center;">{{ $club->id }}</td>
						<td>{{ $club->abreviation }}</td>
						<td>{{ $club->nom }}</td>
						<td>{{ $club->numero_affiliation }}</td>
						<td style="text-align: center;">
							<a href="{{ url('admin/clubs/edit/'.$club->id) }}" class="btn btn-xs btn-warning"><i class="fa fa-pencil"> Editer</i></a>
							<a href="{{ url('admin/clubs/delete/'.$club->id) }}" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"> Suppr.</i></a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>			
			<a href="{{ url('admin/clubs/add') }}" title="Ajouter un club"><i class="fa fa-plus"></i> Ajouter un club</a>
		</div>
	</div>
</div>

@stop