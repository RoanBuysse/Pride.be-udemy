<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\NewsCategory;


class NewsController extends Controller
{

    public function __construct()
    {
      $this->middleware('isWriter',['only' => ['create','edit']]);
    }

    public function index()
    {
        $news = News::all();
        return view('news.index' , compact('news'));
        // dd($news);
        // dd($newstranslation);
    }

    public function create()
    {
        if(LaravelLocalization::getCurrentLocale()=='nl'){ $category = NewsCategory::pluck('nameNl','id');}
        if(LaravelLocalization::getCurrentLocale()=='en'){ $category = NewsCategory::pluck('nameEn','id');}
        if(LaravelLocalization::getCurrentLocale()=='fr'){ $category = NewsCategory::pluck('nameFr','id');}
        return view('news.create', compact('news_categories'));
    }

    public function store(Request $request)
    {
       $input = $request->all();
       $news = News::create($input);
       
       if ($categoryIds = $request->news_category_id){
           $news->category()->sync($categoryIds);
       }
        return back();
    }

    public function show($id)
    {
        $news = News::findOrFail($id);
        // var_dump($news);
        return view('news.show', compact('news'));

    }

    public function edit($id)
    {
        $news = News::findOrFail($id);
        return view('news.edit', compact('news'));
    }


    public function update(Request $request, $id)
    {
        $input = $request->all();
        $news = News::findOrFail($id);
        $news->update($input);
        return back();
        
    }

    public function destroy(Request $request, $id)
    {
        $news = News::findOrFail($id);
        $news->delete($request->all());
        return redirect('/news');
    }

}
