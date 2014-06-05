@section('content')

@if(Session::has('success'))
<div class="alert alert-dissmissable alert-success">{{ Session::get('success') }}</div>
@endif

<div class="panel panel-success">
	<div class="panel-heading">
	<h3 class="panel-title"><i class="fa fa-trophy"></i> Liste des Championnats 
	{{ isset($textSearched)?'('.count($championships).' championnats correspondent à la recherche)':'('.count($championships).' championnats)' }}
	</h3>
	</div>
	<div class="panel-body">
		<div class="table-responsive">
			<table class="table table-bordered table-hover table-striped tablesorter">
				<thead>
					<tr>
						<th># <i class="fa fa-sort"></i></th>
						<th>nbEquipe <i class="fa fa-sort"></i></th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($championships as $championship)
					<tr>
						<td style="text-align: center;">{{ $championship->id }}</td>
						<td style="text-align: center;">{{ $championship->nbEquipe }}</td>
						<td style="text-align: center;">
							<a href="{{ url('admin/championships/teams/'.$championship->id) }}" class="btn btn-xs btn-info"><i class=""> Equipes</i></a>
							<a href="{{ url('admin/championships/edit/'.$championship->id) }}" class="btn btn-xs btn-warning"><i class="fa fa-pencil"> Editer</i></a>
							<a href="{{ url('admin/championships/delete/'.$championship->id) }}" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"> Suppr.</i></a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>			
			<a href="{{ url('admin/championships/add') }}" title="Ajouter un championnat"><i class="fa fa-plus"></i> Ajouter un championnat</a>
		</div>
	</div>
</div>

@stop