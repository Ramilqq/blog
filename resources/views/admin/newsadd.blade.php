@extends('layouts.admin')

@section('content')

	{!! Form::open(['url'=>route('adminnewsadd'), 'class'=>'form-horizontal', 'method'=>'post', 'enctype'=>'multipart/form-data']) !!}

		<div class="form-group">
			{!! Form::label('name', 'Название', ['class'=>'col-xs-2 control-label']) !!}
			<div class="col-xs-8">
				{!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Введите тест']) !!}
			</div>
		</div>
		<div class="form-group">
			{!! Form::label('title', 'Метка', ['class'=>'col-xs-2 control-label']) !!}
			<div class="col-xs-8">
				{!! Form::text('title', old('title'), ['class'=>'form-control', 'placeholder'=>'Введите тест']) !!}
			</div>
		</div>
		<div class="form-group">
			{!! Form::label('desc', 'Описание', ['class'=>'col-xs-2 control-label']) !!}
			<div class="col-xs-8">
				{!! Form::textarea('desc', old('desc'), ['class'=>'form-control', 'placeholder'=>'Введите тест']) !!}
			</div>
		</div>
		<div class="form-group">
			{!! Form::label('text', 'Статья', ['class'=>'col-xs-2 control-label']) !!}
			<div class="col-xs-8">
				{!! Form::textarea('text', old('text'), ['id'=>'editor', 'class'=>'form-control', 'placeholder'=>'Введите тест']) !!}
			</div>
		</div>
		<div class="form-group">
			{!! Form::label('image', 'Изображение 466*260', ['class'=>'col-xs-2 control-label']) !!}
			<div class="col-xs-8">
				{!! Form::file('image', ['class'=>'filestyle', 'data-buttonText'=>'Выбрать', 'data-buttonName'=>'btn-primary', 'data-paceholder'=>'Файла нет']) !!}
			</div>
		</div>
		<div class="form-group">
			<div class="col-xs-8">
				{!! Form::button('Сохранить', ['class'=>'btn btn-primary', 'type'=>'submit']) !!}
			</div>
		</div>

	{!! Form::close() !!}

    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>

@endsection