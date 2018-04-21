<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events;

use App\EventsCategory;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Photo;
use Carbon\Carbon;
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
        if(LaravelLocalization::getCurrentLocale()=='nl')
        { $events_categories  = EventsCategory::pluck('nameNl','id');
         return view('events.create', compact('events_categories'));
        }
        if(LaravelLocalization::getCurrentLocale()=='fr')
        { $events_categories  = EventsCategory::pluck('nameFr','id');
         return view('events.create', compact('events_categories'));
        }
        if(LaravelLocalization::getCurrentLocale()=='en')
        { $events_categories  = EventsCategory::pluck('nameEn','id');
         return view('events.create', compact('events_categories'));
        }
        
        }

    public function store(Request $request)
    {
        $input = $request->all();
        
        //photo
        if ($file = $request->file('photo_id')) {
            $name = $file->getClientOriginalName();
            $file->move('images/events', $name);
            $photo = Photo::create(['photo' => $name, 'title' => $name]);
            $input['photo_id'] = $photo->id;
        }
        //organiser
        

        $events = Events::create($input);
        
        if ($categoryIds = $request->events_category_id){
            $events->category()->sync($categoryIds);
        }
        return redirect('/events');
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
        if(LaravelLocalization::getCurrentLocale()=='nl')
        { $events_categories  = EventsCategory::pluck('nameNl','id');
         
        }
        if(LaravelLocalization::getCurrentLocale()=='fr')
        { $events_categories  = EventsCategory::pluck('nameFr','id');
     
        }
        if(LaravelLocalization::getCurrentLocale()=='en')
        { $events_categories  = EventsCategory::pluck('nameEn','id');
    
        }
        return view('events.edit', compact('events', 'events_categories'));
    }


    public function update(Request $request, $id)
    {
        $input = $request->all();
        $events = Events::findOrFail($id);

        if ($file = $request->file('photo_id')) {

            if($events->photo){
                unlink('images/events/'.$events->photo->photo);
                $events->photo()->delete('photo');
            }
            $name = $file->getClientOriginalName();
            $file->move('images/events', $name);
            $photo = Photo::create(['photo' => $name, 'title' => $name]);
            $input['photo_id'] = $photo->id;
        }

        $events->update($input);
        if ($categoryIds = $request->events_category_id){
            $events->category()->sync($categoryIds);
        }
        return redirect('/events');
        
    }

    public function destroy(Request $request, $id)
    {
        $events = Events::findOrFail($id);
        $events->delete($request->all());
        $categoryIds = $request->events_category_id;
        $events->category()->detach($categoryIds);
        if($events->photo){
            unlink('images/events/'.$events->photo->photo);
            $events->photo()->delete('photo');
        }
        return back();
    }

}