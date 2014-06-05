@section('content')

@if(Session::has('success'))
<div class="alert alert-dissmissable alert-success">{{ Session::get('success') }}</div>
@endif

<div class="panel panel-success">
	<div class="panel-heading">
	<h3 class="panel-title"><i class="fa fa-key"></i> Liste des Droits 
	{{ isset($textSearched)?'('.count($rights).' utilisateurs correspondent à la recherche)':'('.count($rights).' droits)' }}
	</h3>
	</div>
	<div class="panel-body">
		{{ Form::open(array('url' => '/admin/rights/search/', 'method' => 'post', 'role' => "form")) }}
			<div class="form-group input-group col-lg-offset-8 col-lg-4">
					{{ Form::text('searchedText', isset($textSearched)?$textSearched:'', array('class' => 'form-control', 'placeholder' => "Recherchez un droit...")); }}
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
						<th>Categorie <i class="fa fa-sort"></i></th>
						<th>Valeur <i class="fa fa-sort"></i></th>
						<th>Libellé <i class="fa fa-sort"></i></th>
						<th>Date Création <i class="fa fa-sort"></i></th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($rights as $right)
					<tr>
						<td style="text-align: center;">{{ $right->id }}</td>
						<td>{{ $right->category }}</td>
						<td>{{ $right->value }}</td>
						<td>{{ $right->label }}</td>
						<td>{{ $right->created_at }}</td>
						<td style="text-align: center;">
							<a href="{{ url('admin/rights/edit/'.$right->id) }}" class="btn btn-xs btn-warning"><i class="fa fa-pencil"> Editer</i></a>
							<a href="{{ url('admin/rights/delete/'.$right->id) }}" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"> Suppr.</i></a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>			
			<a href="{{ url('admin/rights/add') }}" title="Ajouter un droit"><i class="fa fa-plus"></i> Ajouter un droit</a>
		</div>
	</div>
</div>

@stop