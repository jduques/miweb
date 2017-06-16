@extends('admin.template.main')

@section('title', 'Lista de usuarios')

@section('content')
	<a href="{{ route('users.create') }}" class="btn btn-primary">Registrar nuevo usuario</a><hr>
	<table class="table table-striped table-hover">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Tipo</th>
			<th>Accion</th>
		</thead>
		<tbody>
			@foreach($users as $user)
				<tr>
					<td> {{ $user->id }} </td>
					<td> {{ $user->name }} </td>
					<td> {{ $user->email }} </td>
					<td> 
						@if($user->type == "member")
							<span class="label label-primary">{{ $user->type }}</span>
						@else
							<span class="label label-danger">{{ $user->type }}</span>
						@endif
					</td>
					<td>
						<a href="{{ route('users.edit', $user->id)}}" class="btn btn-warning glyphicon glyphicon-wrench"></a>|
						<a href="{{ route('users.destroy', $user->id)}}" onclick="return confirm('¿Seguro que deseas eliminar?')" class="btn btn-danger glyphicon glyphicon-trash"></a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	{!! $users->render() !!}
@endsection
