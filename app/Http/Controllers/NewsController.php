<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;


class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('news.index' , compact('news'));
        // dd($news);
        // dd($newstranslation);
    }

    public function create()
    {
        return view('news.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
       News::create($input);
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

}
