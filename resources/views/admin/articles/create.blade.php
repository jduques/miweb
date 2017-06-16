@extends('admin.template.main')

@section('title', 'Agregar Articulo')

@section('content')


	{!! Form::open(['route' => 'articles.store', 'method' => 'POST', 'files' => true]) !!}

		<div class="form-group">

			{!! Form::label('title', 'Titulo', ['class' => 'control-label']) !!}
		
			{!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Titulo del articulo', 'required', 'autofocus']) !!}
			<br>

			{!! Form::label('category_id', 'Categoria') !!}
			{!! Form::select('category_id', $categories, null,  ['class' => 'form-control select-category', 'required', 'placeholder' => '']) !!}
			<br><br>

			{!! Form::label('content', 'Contenido') !!}
			{!! Form::textarea('content', null, ['class' => 'form-control content-tag',' placeholder' => '']) !!}
			<br>
				
			{!! Form::label('tags', 'Tags') !!}
			{!! Form::select('tags[]', $tags, null,  ['class' => 'form-control select-tag', 'multiple', 'required']) !!}
			<br><br>

			<div class="form-group">
				
			{!! Form::label('image', 'Imagen') !!}
			{!! Form::file('image', ['name' => 'image[]', 'multiple', 'class' => 'file-loading']) !!}

			</div>

		    <div id="errorBlock" class="help-block"></div>

		</div>

		<br>
		{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}

	{!! Form::close() !!}

	
@endsection

@section('js')
	<script>
		$('.select-tag').chosen({
			max_selected_options: 3,
			placeholder_text_multiple: 'Seleccione un maximo de 3 tag',
			no_results_text: 'No se encontraron tags'

		});

		$('.select-category').chosen({
			placeholder_text_single: 'Seleccione una categoria',
			no_results_text: 'No se encontraron el tag: '		
		});

		$('.content-tag').trumbowyg({
    		autogrow: false,
    		disabled: false,
		});
		

        $("#image").fileinput({
            showPreview: true,
            allowedFileExtensions: ["jpg", "jpeg", "gif", "png"],
            elErrorContainer: "#errorBlock"
        });

    </script>

@endsection