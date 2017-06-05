@extends('admin.template.main');


@section('sub-title', 'Crear Usuario');

@section('content')

	{!! Form::open(['route' => 'users.store', 'method' => 'POST']) !!}

		{!! Form::label('nombre', 'Nombre') !!}
		{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' =>  'Nombre completo', 'required']) !!}
		<br>
		{!! Form::label('email', 'Correo') !!}
		{!! Form::text('email', null, ['class' => 'form-control', 'placeholder' =>  'example@gmail.com', 'required']) !!}
		<br>
		{!! Form::label('password', 'contraseña') !!}
		{!! Form::password('password', ['class' => 'form-control', 'placeholder' => '**********', 'required']) !!}
		<br>
		{!! Form::label('type', 'Tipo') !!}	
		{!! Form::select('type', ['member' => 'Miembro', 'admin' => 'Administrador'], null, ['class' => 'form-control']) !!}
		<br>
		{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}

	{!! Form::close() !!}


		

@endsection

