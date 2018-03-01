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
    }
}
