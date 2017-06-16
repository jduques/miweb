@extends('admin.template.main')

@section('title', 'Lista de Tags')

@section('content')
	<a href="{{ route('tags.create') }}" class="btn btn-primary">Crear nuevo Tags</a><hr>

	<!-- BUSCADOR DE TAGS -->

	{!! Form::open(['route' => 'tags.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
	
	<div class="input-group">
		{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Buscar tag', 'aria-describedby' => 'search']) !!}
		<span class="input-group-btn">
			{!! Form::submit('Buscar', ['class' => 'btn btn-info']) !!}
		</span>
		
	 </div><!-- /input-group -->

	{!! Form::close() !!}

	<!-- FIN DE BUSCADOR -->

	<table class="table table-striped table-hover">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th><div align="right">Accion&emsp;&emsp;</div></th>
		</thead>
		<tbody>
			@foreach($tags as $tag)
				<tr>
					<td> {{ $tag->id }} </td>
					<td> {{ $tag->name }} </td>
					<td align="right">
						<a href="{{ route('tags.edit', $tag->id)}}" class="btn btn-warning glyphicon glyphicon-wrench"></a>|
						<a href="{{ route('tags.destroy', $tag->id)}}" onclick="return confirm('¿Seguro que deseas eliminar?')" class="btn btn-danger glyphicon glyphicon-trash"></a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	<div class="text-center">	
		{!! $tags->render() !!}
	</div>
@endsection
