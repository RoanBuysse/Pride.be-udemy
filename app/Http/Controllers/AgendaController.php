<?php

namespace App\Http\Controllers;
use App\Events;
use App\favouriteables;
use Illuminate\Support\Collection;

use Illuminate\Http\Request;

class AgendaController extends Controller
{
    
public function store(Request $request, $id)
{
	$request->user()->favouriteEvents()->syncWithoutDetaching([$id]);
 
	return back();
}

// public function index(Request $request)
// {
//     $idSignedin = $request->user()->id;
//     $getEventId = Events::all();
    
//     $favouriteables = favouriteables::all()->where('user_id', $idSignedin);
    
//     foreach($favouriteables as $favouriteable)
//     {
//     $newCollection = new Collection(
//     [$favouriteables_events_ids = $favouriteable->events_id]
    
//     );}
    
//     // foreach($favouriteables_events_ids as $favouriteables_events_id)
//     // {
//     // $getEvents = Events::all()->whereIn('id', $favouriteables_events_id);
//     // }
    
//     // $getEventsCollection = collect($getEvents);
   
   
    
 
 

// 	// return view('Agenda.index', compact('getEvents'));
//     dd($newCollection);
// }


public function index(Request $request)
{
    $newCollection = new Collection;
    $idSignedin = $request->user()->id;
    $getEvents = Events::all();

    $likes= favouriteables::where('user_id', '=', $idSignedin)->get();

    foreach ($likes as $like)
    {
        // var_dump($like->events_id);


        $getEvents = Events::where('id', '=' , $like->events_id )->get();
    
        foreach ($getEvents as $getEvent)
        {
            // var_dump($getEvent->titleNl);
            $newCollection->push($getEvent); 
        }
    }
 
    return view('Agenda.index', compact('newCollection'));
    // dd($newCollection);
   
    
    
    
    
    
    
    // $favouriteables = favouriteables::get()->where('user_id', $idSignedin);
    // foreach($favouriteables as $favouriteable)
    // {
    // $favouriteables_events_ids [] = $favouriteable->events_id;
    // }
   
    // $likes = $getEvents->filter(function ($value, $key) {
    //     return $value->id == $key;
    // });


    
    
  
    // $getEvents = Events::get();
    // // $getEvents->push($getEvents);
    
    
    // // foreach($favouriteables_events_id as $favouriteables_events)
    // // {
    // // $getEvents = Events::latest()->get()->where('id', $favouriteables_events);
    // // $newCollection->push($getEvents);
    // // }
    
   
   
    
 
 

	// return view('Agenda.index', compact('favouriteables' , 'getEvents'));
    // dd($likes);
}
}
