<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\NewsCategory;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class NewsCategoryController extends Controller


{

    public function __construct()
    {
        $this->middleware('isAdmin',['except' => ['show']]);
    
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = NewsCategory::latest()->get();
        return view('categories.news.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $categories = NewsCategory::latest()->get();
        return view('categories.news.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new NewsCategory;
        $category->nameNl = $request->nameNl;
        $category->slug_nl = str_slug($request->nameNl);
        $category->nameFr = $request->nameFr;
        $category->slug_fr = str_slug($request->nameFr);
        $category->nameEn = $request->nameEn;
        $category->slug_en = str_slug($request->nameEn);
        $category->save();
        return back();
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    
    public function show($slug)
    {
    if(LaravelLocalization::getCurrentLocale()=='nl')
       {$category = NewsCategory::whereSlugNl($slug)->first();}
    if(LaravelLocalization::getCurrentLocale()=='en')
    {$category = NewsCategory::whereSlugEn($slug)->first();}
    if(LaravelLocalization::getCurrentLocale()=='fr')
    {$category = NewsCategory::whereSlugFr($slug)->first();}
       return view('Categories.News.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = NewsCategory::findOrFail($id);
        return view('categories.news.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = NewsCategory::findOrFail($id);
        $category->update($request->all());
        return redirect('news_categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = NewsCategory::findOrFail($id);
        $category->delete();
        return redirect('news_categories');
    }
}
