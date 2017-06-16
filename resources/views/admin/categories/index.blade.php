@extends('admin.template.main')

@section('title', 'Lista de Categorias')

@section('content')
	<a href="{{ route('categories.create') }}" class="btn btn-primary">Registrar nueva Categoria</a><hr>
	<table class="table table-striped table-hover">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th><div align="right">Accion&emsp;&emsp;</div></th>
		</thead>
		<tbody>
			@foreach($categories as $category)
				<tr>
					<td> {{ $category->id }} </td>
					<td> {{ $category->name }} </td>
					<td align="right">
						<a href="{{ route('categories.edit', $category->id)}}" class="btn btn-warning glyphicon glyphicon-wrench"></a>|
						<a href="{{ route('categories.destroy', $category->id)}}" onclick="return confirm('¿Seguro que deseas eliminar?')" class="btn btn-danger glyphicon glyphicon-trash"></a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	<div class="text-center">	
		{!! $categories->render() !!}
	</div>
@endsection
