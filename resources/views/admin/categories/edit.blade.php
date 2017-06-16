@extends('admin.template.main')


@section('sub-title', 'Editar Categoria ' . $category->name)

@section('content')

	{!! Form::open(array('route' => array('categories.update', $category->id), 'method' => 'PUT'))
	    
	!!}
        
		{!! Form::label('nombre', 'Nombre') !!}
		{!! Form::text('name', $category->name, ['class' => 'form-control']) !!}
		<br>
		{!! Form::submit('Guardar cambios', ['class' => 'btn btn-primary']) !!}

	{!! Form::close() !!}


		

@endsection