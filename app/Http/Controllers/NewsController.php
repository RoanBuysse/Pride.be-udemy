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
    }
}
