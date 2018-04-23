<?php

namespace App\Http\Controllers;
use App\Events;
use App\favouriteables;


use Illuminate\Http\Request;

class AgendaController extends Controller
{
    
public function store(Request $request, $id)
{
	$request->user()->favouriteEvents()->syncWithoutDetaching([$id]);
 
	return back();
}

public function index(Request $request)
{
    $idSignedin = $request->user()->id;
    $getEventId = Events::latest()->get();
    
    $favouriteables = favouriteables::latest()->get()->where('user_id', $idSignedin);
    
    foreach($favouriteables as $favouriteable)
    {
    $favouriteables_events_id[] = $favouriteable->events_id;
    }
    
    foreach($favouriteables_events_id as $favouriteables_events)
    {
    $getEvents[] = Events::latest()->get()->whereIn('id', $favouriteables_events);
    }
    
    $getEventsCollection = collect($getEvents);
   
   
    
 
 

	return view('Agenda.index', compact('getEventsCollection'));
    // dd($getEventsCollection);
}
}
