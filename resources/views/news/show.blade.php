@extends('layouts.app')
@section('content')
<div class="container">
	<h1>{{$news_item->title}}</h1>
	<div class="card">
		  <div class="card-body">
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
			{{$news_item->text}}
		  </div>
	</div>    
</div>
@endsection