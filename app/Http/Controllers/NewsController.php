<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
   
    public function index()
    {
        $news = News::orderBy('id','desc')->paginate(5);
		return view('news.index', ['news' => $news]);
    }

	public function category($category)
    {
        $news = News::orderBy('id','desc')->where(['category_name'=>$category])->paginate(5);
		return view('news.index', ['news' => $news,'category_name'=>$category]);
    }
   
    
    public function show($id)
    {
       $news_item = News::findOrFail($id);
	   return view('news.show', ['news_item' => $news_item]);
    }

}
