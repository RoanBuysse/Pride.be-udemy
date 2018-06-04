<?php

namespace App\Http\Controllers;
use App\Events;
use App\favouriteables;
use Illuminate\Support\Collection;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\Agenda as AgendaResource;

class AgendaController extends Controller
{
    
public function store(Request $request, $id)
{
	$request->user()->favouriteEvents()->syncWithoutDetaching([$id]);
    Session::flash('flash_message', 'added to agenda');
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
    $idSignedin = Auth::id();
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
}

public function indexApi(Request $request)
{
    $agenda = favouriteables::orderBy('created_at', 'desc')->paginate(10);
    return AgendaResource::collection($agenda);
}
}