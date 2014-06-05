@section('content')

@if(Session::has('success'))
<div class="alert alert-dissmissable alert-success">{{ Session::get('success') }}</div>
@endif

<div class="panel panel-success">
	<div class="panel-heading">
	<h3 class="panel-title"><i class="fa fa-file-text"></i> Liste des News 
	{{ isset($textSearched)?'('.count($news).' news correspondent à la recherche)':'('.count($news).' news)' }}
	</h3>
	</div>
	<div class="panel-body">
		{{ Form::open(array('url' => '/admin/news/search/', 'method' => 'post', 'role' => "form")) }}
			<div class="form-group input-group col-lg-offset-8 col-lg-4">
					{{ Form::text('searchedText', isset($textSearched)?$textSearched:'', array('class' => 'form-control', 'placeholder' => "Recherchez une news...")); }}
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
						<th>Auteur <i class="fa fa-sort"></i></th>
						<th>+1 / -1 <i class="fa fa-sort"></i></th>
						<th>Views <i class="fa fa-sort"></i></th>
						<th>Date Publication <i class="fa fa-sort"></i></th>
						<th>Date Création <i class="fa fa-sort"></i></th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($news as $new)
					<tr>
						<td style="text-align: center;">{{ $new->id }}</td>
						<td>{{ $new->title }}</td>
						<td>{{ $new->User->surname }}</td>
						<td>{{ $new->whereHas('votes', function($q) { $q->where('thumb_up', '=', true); })->count(); }} /
						{{ $new->whereHas('votes', function($q) { $q->where('thumb_up', '=', false); })->count(); }}</td>
						<td>{{ $new->views->count() }}</td>
						<td>{{ $new->published_at }}</td>
						<td>{{ $new->created_at }}</td>
						<td style="text-align: center;">
							<a href="{{ url('admin/news/edit/'.$new->id) }}" class="btn btn-xs btn-warning"><i class="fa fa-pencil"> Editer</i></a>
							<a href="{{ url('admin/news/delete/'.$new->id) }}" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"> Suppr.</i></a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>			
			<a href="{{ url('admin/news/add') }}" title="Ajouter une news"><i class="fa fa-plus"></i> Ajouter une news</a>
		</div>
	</div>
</div>

@stop