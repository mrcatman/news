<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class ManagerController extends Controller
{
	public $validate_rules = [
		'title'=>'required|max:255',
		'text'=>'required',
		'category_name'=>'present'
	];
    public function index()
    {
        $news = News::orderBy('id','desc')->paginate(10);
		return view('manager.index', ['news' => $news]);
    }
	
	public function create() {
		return view('manager.form', ['is_editing' => false]);
	}
	
    public function store(Request $request)
    {
        $data = $request->validate($this->validate_rules);
		$news_item = new News($data);
		$news_item->save();
		$request->session()->flash('success', 'Добавлено');
		return redirect()->route('manager.index');
    }

    public function edit($id)
    {
		$news_item = News::findOrFail($id);
		return view('manager.form', ['is_editing' => true,'news_item'=>$news_item]);
    }

   
    public function update(Request $request, $id)
    {
        $data = $request->validate($this->validate_rules);
		News::find($id)->update($data);
		$request->session()->flash('success', 'Сохранено');
		return back()->withInput();
    }

    
    public function destroy(Request $request, $id)
    {
       News::destroy($id);
	   $request->session()->flash('success', 'Удалено');
	   return redirect()->route('manager.index');
    }
}
