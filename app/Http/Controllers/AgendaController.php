<?php

namespace App\Http\Controllers;
use App\Events;

use Illuminate\Http\Request;

class AgendaController extends Controller
{
    
public function store(Request $request, $id)
{
	$request->user()->favouriteEvents()->syncWithoutDetaching([$id]);
 
	return back();
}
}
