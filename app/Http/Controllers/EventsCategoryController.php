<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\EventsCategory;

use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class EventsCategoryController extends Controller
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
        $categories = EventsCategory::latest()->get();
        return view('categories.events.index', compact('categories'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new EventsCategory;
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
       {$category = EventsCategory::whereSlugNl($slug)->first();}
    if(LaravelLocalization::getCurrentLocale()=='en')
    {$category = EventsCategory::whereSlugEn($slug)->first();}
    if(LaravelLocalization::getCurrentLocale()=='fr')
    {$category = EventsCategory::whereSlugFr($slug)->first();}
       return view('Categories.Events.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = EventsCategory::findOrFail($id);
        return view('Categories.events.edit', compact('category'));
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
        $category = EventsCategory::findOrFail($id);
        $category->update($request->all());
        return redirect('events_categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = EventsCategory::findOrFail($id);
        $category->delete();
        return redirect('events_categories');
    }
}
