@extends('layouts.app')
@section('content')
<div class="container">
	<h1>Управление новостями <a href="{{route('manager.create')}}" class="btn btn-primary">добавить</a></h1>
	@foreach ($news as $news_item)
	<div class="card">
		<div class="card-body">
			<div class="row align-items-center">
				<div class="col">
					<span> {{ $news_item->title }}</span>				
				</div>
				<div class="col-auto">
					<a href="{{route('manager.edit',$news_item->id)}}" class="btn btn-primary">Редактировать</a>
					<a href="{{route('manager.destroy',$news_item->id)}}" class="btn btn-danger">Удалить</a>
				</div>
			</div>
		</div>
	</div>      
    @endforeach
	<div class="pt-3">
	{{ $news->links() }}
	</div>
</div>
@endsection
