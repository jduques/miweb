@extends('admin.template.main')

@section('title', 'Agregar Categoria')

@section('content')


	{!! Form::open(['route' => 'categories.store', 'method' => 'POST']) !!}

		<div class="form-group">

			{!! Form::label('name', 'Nombre', ['class' => 'control-label']) !!}
		
			{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre de la categoria', 'required']) !!}

		</div>

		{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}

	{!! Form::close() !!}

@endsection

