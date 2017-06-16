@extends('admin.template.main')


@section('sub-title', 'Editar Usuario: ' . $user->name)

@section('content')

	{!! Form::open(array('route' => array('users.update', $user->id), 'method' => 'PUT'))
	    //Form::open(['route' => 'users.update', 'method' => 'PUT']) 
	!!}
        
		{!! Form::label('nombre', 'Nombre') !!}
		{!! Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' =>  'Nombre completo', 'required']) !!}
		<br>
		{!! Form::label('email', 'Correo') !!}
		{!! Form::text('email', $user->email, ['class' => 'form-control', 'placeholder' =>  'example@gmail.com', 'required']) !!}
		<br>
		{!! Form::label('type', 'Tipo') !!}	
		{!! Form::select('type', ['member' => 'Miembro', 'admin' => 'Administrador'], $user->type, ['class' => 'form-control']) !!}
		<br>
		{!! Form::submit('Guardar cambios', ['class' => 'btn btn-primary']) !!}

	{!! Form::close() !!}


		

@endsection

