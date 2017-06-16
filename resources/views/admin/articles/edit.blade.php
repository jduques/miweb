@extends('admin.template.main')


@section('sub-title', 'Editar Articulo ')

@section('content')


	{!! Form::open(array('route' => array('articles.update', $article->id), 'method' => 'PUT'))
	    
	!!}
        
		{!! Form::label('titulo', 'Titulo') !!}
		{!! Form::text('titulo', $article->title, ['class' => 'form-control']) !!}
		<br>
		{!! Form::label('contenido', 'Contenido') !!}
		{!! Form::text('contenido', $article->category->name, ['class' => 'form-control']) !!}
		<br>
		{!! Form::submit('Guardar cambios', ['class' => 'btn btn-primary']) !!}

	{!! Form::close() !!}
		

@endsection