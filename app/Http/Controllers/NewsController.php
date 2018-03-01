<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\NewsTranslation;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        $newstranslation = NewsTranslation::all();
        return view('news.index' , compact('news','newstranslation'));
        // dd($news);
        // dd($newstranslation);
    }
}
