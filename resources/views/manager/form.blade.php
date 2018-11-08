@extends('layouts.app')
@section('content')
<div class="container">
	@if ($is_editing)
	<h1>Редактировать новость</h1>
	@else
	<h1>Создать новость</h1>
	@endif
	<div class="card">
		<form method="POST">
			@csrf
			<div class="card-body">
				<div class="form-group">
					<label>Заголовок</label>
					<input value="{{$is_editing ? $news_item->title : old('title')}}" name="title" class="form-control @if ($errors->has('title')) is-invalid @endif">
					@foreach ($errors->get('title') as $error)
						 <div class="invalid-feedback">{{$error}}</div>
					@endforeach
				</div>
				<div class="form-group">
					<label>Текст новости</label>
					<textarea name="text" class="form-control @if ($errors->has('text')) is-invalid @endif">{{$is_editing ? $news_item->text : old('text')}}</textarea>
					@foreach ($errors->get('text') as $error)
						 <div class="invalid-feedback">{{$error}}</div>
					@endforeach
				</div>
				<div class="form-group">
					<label>Категория</label>
					<input value="{{$is_editing ? $news_item->category_name : old('category_name')}}" name="category_name" class="form-control @if ($errors->has('category')) is-invalid @endif">
					@foreach ($errors->get('category_name') as $error)
						 <div class="invalid-feedback">{{$error}}</div>
					@endforeach
				</div>
				<div class="card-footer text-muted">
					<button class="btn btn-primary" type="submit">Сохранить</button>
				</div>
			</div>
	</div>     
</div>
@endsection