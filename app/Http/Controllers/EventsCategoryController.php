<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\EventsCategory as EventsCategoryResource;
use App\EventsCategory;
use Session;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class EventsCategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('isAdmin',['only' => ['create','edit']]);
    
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
    

    public function indexApi()
    {
        $categories = EventsCategory::orderBy('created_at', 'desc')->paginate(5000);
        return EventsCategoryResource::collection($categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = EventsCategory::latest()->get();
        return view('categories.events.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $rules = [
            'nameNl' => ['required', 'max:200', 'unique:events_categories'],
            'nameFr' => ['required', 'max:200', 'unique:events_categories'],
            'nameEn' => ['required', 'max:200', 'unique:events_categories'],
           ];
            $this->validate($request, $rules);



        $category = new EventsCategory;
        $category->nameNl = $request->nameNl;
        $category->slug_nl = str_slug($request->nameNl);
        $category->nameFr = $request->nameFr;
        $category->slug_fr = str_slug($request->nameFr);
        $category->nameEn = $request->nameEn;
        $category->slug_en = str_slug($request->nameEn);
        $category->save();

        Session::flash('flash_message', 'Category succefully created');
        
        return redirect('events_categories');
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

        $rules = [
            'nameNl' => ['required', 'max:200'],
            'nameFr' => ['required', 'max:200'],
            'nameEn' => ['required', 'max:200'],
           ];
           
    
            $this->validate($request, $rules);


        $category = EventsCategory::findOrFail($id);
        $category->update($request->all());
        Session::flash('flash_message', 'Category succefully edited');
        return redirect('/events_categories');
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
        Session::flash('flash_message', 'Events category item succesfully deleted');
        return redirect('/events_categories');
    }
}
