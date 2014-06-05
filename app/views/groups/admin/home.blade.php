@section('content')

@if(Session::has('success'))
<div class="alert alert-dissmissable alert-success">{{ Session::get('success') }}</div>
@endif

<div class="panel panel-success">
	<div class="panel-heading">
	<h3 class="panel-title"><i class="fa fa-group"></i> Liste des Groupes 
	{{ isset($textSearched)?'('.count($groups).' groupes correspondent à la recherche)':'('.count($groups).' groupes)' }}
	</h3>
	</div>
	<div class="panel-body">
		{{ Form::open(array('url' => '/admin/groups/search/', 'method' => 'post', 'role' => "form")) }}
			<div class="form-group input-group col-lg-offset-8 col-lg-4">
					{{ Form::text('searchedText', isset($textSearched)?$textSearched:'', array('class' => 'form-control', 'placeholder' => "Recherchez un groupe...")); }}
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
						<th>Titre <i class="fa fa-sort"></i></th>
						<th>Description <i class="fa fa-sort"></i></th>
						<th>Date de création <i class="fa fa-sort"></i></th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($groups as $group)
					<tr>
						<td style="text-align: center;">{{ $group->id }}</td>
						<td>{{ $group->title }}</td>
						<td>{{ $group->description }}</td>
						<td>{{ $group->created_at }}</td>
						<td style="text-align: center;">
							<a href="{{ url('admin/groups/edit/'.$group->id) }}" class="btn btn-xs btn-warning"><i class="fa fa-pencil"> Editer</i></a>
							<a href="{{ url('admin/groups/delete/'.$group->id) }}" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"> Suppr.</i></a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>			
			<a href="{{ url('admin/groups/add') }}" title="Ajouter un groupe"><i class="fa fa-plus"></i> Ajouter un groupe</a>
		</div>
	</div>
</div>

@stop