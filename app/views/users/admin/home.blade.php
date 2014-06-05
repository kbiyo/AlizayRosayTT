@section('content')

@if(Session::has('success'))
<div class="alert alert-dissmissable alert-success">{{ Session::get('success') }}</div>
@endif

<div class="panel panel-success">
	<div class="panel-heading">
	<h3 class="panel-title"><i class="fa fa-user"></i> Liste des Utilisateurs 
	{{ isset($textSearched)?'('.count($users).' utilisateurs correspondent à la recherche)':'('.count($users).' utilisateurs)' }}
	</h3>
	</div>
	<div class="panel-body">
		{{ Form::open(array('url' => '/admin/users/search/', 'method' => 'post', 'role' => "form")) }}
			<div class="form-group input-group col-lg-offset-8 col-lg-4">
					{{ Form::text('searchedText', isset($textSearched)?$textSearched:'', array('class' => 'form-control', 'placeholder' => "Recherchez un utilisateur...")); }}
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
						<th>NOM <i class="fa fa-sort"></i></th>
						<th>Prénom <i class="fa fa-sort"></i></th>
						<th>Surnom <i class="fa fa-sort"></i></th>
						<th>Email <i class="fa fa-sort"></i></th>
						<th>Dernière Connexion <i class="fa fa-sort"></i></th>
						<th>Date Création <i class="fa fa-sort"></i></th>
						<th><i class="fa fa-comment"></i> <i class="fa fa-sort"></i></th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($users as $user)
					<tr>
						<td style="text-align: center;">{{ $user->id }}</td>
						<td>{{ strtoupper($user->lastname) }}</td>
						<td>{{ $user->firstname }}</td>
						<td>{{ $user->surname }}</td>
						<td>{{ $user->email }}</td>
						<td>{{ $user->last_connection }}</td>
						<td>{{ $user->created_at }}</td>
						<td>{{ $user->Comments()->count() }}</td>
						<td style="text-align: center;">
							<a href="{{ url('user/mailNewPassword/'.$user->id) }}" class="btn btn-xs btn-info" onclick="return confirm('Êtes-vous sûr de vouloir envoyer un mail de demande de password à cet utilisateur ?')" title="Envoyer mail pour génération du password."><i class="fa @if($user->password == '') fa-unlock @else fa-lock @endif"> </i></a>
							<a href="{{ url('admin/users/edit/'.$user->id) }}" class="btn btn-xs btn-warning"><i class="fa fa-pencil"> Editer</i></a>
							<a href="{{ url('admin/users/delete/'.$user->id) }}" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"> Suppr.</i></a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>			
			<a href="{{ url('admin/users/add') }}" title="Ajouter un utilisateur"><i class="fa fa-plus"></i> Ajouter un utilisateur</a>
		</div>
	</div>
</div>

@stop