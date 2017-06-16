@extends('admin.template.main')

@section('title', 'Agregar Tags')

@section('content')


	{!! Form::open(['route' => 'tags.store', 'method' => 'POST']) !!}

		<div class="form-group">

			{!! Form::label('name', 'Nombre', ['class' => 'control-label']) !!}
		
			{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre del tag', 'autofocus'=>'autofocus','required']) !!}

		</div>

		{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}

	{!! Form::close() !!}

@endsection