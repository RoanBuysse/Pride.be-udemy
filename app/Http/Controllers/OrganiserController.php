<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Organiser;

use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
class OrganiserController extends Controller
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
        $organiser = Organiser::latest()->get();
        return view('organiser.index', compact('organiser'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('organiser.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $organiser = new Organiser;
        $organiser->name = $request->name;
        $organiser->slug = str_slug($request->name);
        $organiser->save();
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
    
       $organiser = Organiser::whereSlug($slug)->first();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $organiser = Organiser::findOrFail($id);
        return view('Organiser.edit', compact('organiser'));
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
        $organiser = Organiser::findOrFail($id);
        $organiser->update($request->all());
        return redirect('organisers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $organiser = Organiser::findOrFail($id);
        $organiser->delete();
        return redirect('organisers');
    }
}
