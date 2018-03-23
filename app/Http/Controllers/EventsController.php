<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events;

use\App\EventsCategory;

class EventsController extends Controller
{

    public function __construct()
    {
        $this->middleware('isAdmin',['except' => ['index','show']]);
    
    }

    public function index()
    {
        $events = Events::all();
        return view('events.index' , compact('events'));
        // dd($news);
        // dd($newstranslation);
    }

    public function create()
    {
        if(LaravelLocalization::getCurrentLocale()=='nl'){ $category = EventsCategory::pluck('nameNl','id');}
        if(LaravelLocalization::getCurrentLocale()=='en'){ $category = EventsCategory::pluck('nameEn','id');}
        if(LaravelLocalization::getCurrentLocale()=='fr'){ $category = EventsCategory::pluck('nameFr','id');}
       
        
        return view('news.create', compact('category'));
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Events::create($input);
        return back();
    }

    public function show($id)
    {
        $events = Events::findOrFail($id);
        // var_dump($Events);
        return view('events.show', compact('events'));

    }

    
    public function edit($id)
    {
        $events = Events::findOrFail($id);
        return view('events.edit', compact('events'));
    }


    public function update(Request $request, $id)
    {
        $input = $request->all();
        $events = Events::findOrFail($id);
        $events->update($input);
        return back();
        
    }

    public function destroy(Request $request, $id)
    {
        $events = Events::findOrFail($id);
        $events->delete($request->all());
        return redirect('/events');
    }

}