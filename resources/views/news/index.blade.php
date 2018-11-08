@extends('layouts.app')
@section('content')
<div class="container">
	@if (isset($category_name))
		<h1>{{$category_name}} <a class="btn btn-primary" href="/">На главную</a></h1>
	@else
		<h1>Новости</h1>
	@endif
    @foreach ($news as $news_item)
	<div class="card">
		  <div class="card-body">
			<h5 class="card-title"> {{ $news_item->title }}</h5>
			<div class="row">
				<div class="col text-left">
					<p class="font-weight-light">{{$news_item->created_at->format('d.m.Y H:i')}}</p>
				</div>
				@if ($news_item->category_name)
				<div class="col text-right">
					<p class="font-weight-light">Категория: 
						<a href="{{route('news.category',$news_item->category_name)}}">{{$news_item->category_name}}</a>
					</p>
				</div>
				@endif
			</div>
			<a href="{{route('news.show',$news_item->id)}}" class="btn btn-primary">Читать</a>
		  </div>
	</div>     
    @endforeach
	<div class="pt-3">
	{{ $news->links() }}
	</div>
</div>


@endsection