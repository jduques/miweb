@extends('admin.template.main')


@section('sub-title', 'Editar Tag ' . $tag->name)

@section('content')

	{!! Form::open(array('route' => array('tags.update', $tag->id), 'method' => 'PUT'))
	    
	!!}
        
		{!! Form::label('nombre', 'Nombre') !!}
		{!! Form::text('name', $tag->name, ['class' => 'form-control', 'autofocus' => 'autofocus']) !!}
		<br>
		{!! Form::submit('Guardar cambios', ['class' => 'btn btn-primary']) !!}

	{!! Form::close() !!}

@endsection