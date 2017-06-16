@extends('admin.template.main')

@section('title', 'Lista de Articulos')

@section('content')
	<a href="{{ route('articles.create') }}" class="btn btn-primary">Registrar nuevo art&iacuteculo</a><hr>

	<!-- BUSCADOR DE TAGS -->

	{!! Form::open(['route' => 'articles.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
	
	<div class="input-group">
		{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Buscar articulo', 'aria-describedby' => 'search']) !!}
		<span class="input-group-btn">
			{!! Form::submit('Buscar', ['class' => 'btn btn-info']) !!}

		</span>
		
	 </div><!-- /input-group -->

	{!! Form::close() !!}

	<!-- FIN DE BUSCADOR -->


	<table class="table table-striped table-hover">
		<thead>
			<th>ID</th>
			<th>Titulo</th>
			<th>Categoria</th>
			<th>Usuario</th>
			<th><div align="right">Accion&emsp;&emsp;</div></th>
		</thead>
		<tbody>
			@foreach($articles as $article)
				<tr>
					<td> {{ $article->id }} </td>
					<td> {{ $article->title }} </td>
					<td> {{ $article->category->name }} </td>
					<td> {{ $article->user->name }} </td>
					<td align="right">
						<a href="{{ route('articles.edit', $article->id)}}" class="btn btn-warning glyphicon glyphicon-wrench"></a>|
						<a href="{{ route('articles.destroy', $article->id)}}" onclick="return confirm('¿Seguro que deseas eliminar?')" class="btn btn-danger glyphicon glyphicon-trash"></a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	<div class="text-center">	
		{!! $articles->render() !!}
	</div>
@endsection

@section('js')
	<script>
	
		$('.editor').trumbowyg('disable');

    </script>

@endsection