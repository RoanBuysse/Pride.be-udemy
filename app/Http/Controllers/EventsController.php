<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events;

class EventsController extends Controller


{

    public function index()
    {
        $news = Events::all();
        return view('evetns.index' , compact('events'));
        // dd($news);
        // dd($newstranslation);
    }

    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Events::create($input);
        return back();
    }

    public function show($id)
    {
        $Events = Events::findOrFail($id);
        // var_dump($Events);
        return view('events.show', compact('events'));

    }
}
