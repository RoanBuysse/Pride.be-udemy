<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Organisation;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
// use App\Http\Resources\Organisation as OrganisationResource;

class OrganisationController extends Controller
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
        $organisations = Organisation::latest()->get();
        return view('organisation.index', compact('organisations'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $organisations = Organisation::latest()->get();
        return view('organisation.create', compact('organisations'));
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
            'nameNl' => ['required', 'max:200', 'unique:organisations'],
            'nameFr' => ['required', 'max:200', 'unique:organisations'],
            'nameEn' => ['required', 'max:200', 'unique:organisations'],
           ];
            $this->validate($request, $rules);



        $organisation = new Organisation;
        $organisation->nameNl = $request->nameNl;
        $organisation->slug_nl = str_slug($request->nameNl);
        $organisation->nameFr = $request->nameFr;
        $organisation->slug_fr = str_slug($request->nameFr);
        $organisation->nameEn = $request->nameEn;
        $organisation->slug_en = str_slug($request->nameEn);
        $organisation->save();

        Session::flash('flash_message', 'Category succefully created');
        
        return redirect('organisations');
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
    {$organisation = Organisation::whereSlugNl($slug)->first();}
    if(LaravelLocalization::getCurrentLocale()=='en')
    {$organisation = Organisation::whereSlugEn($slug)->first();}
    if(LaravelLocalization::getCurrentLocale()=='fr')
    {$organisation = Organisation::whereSlugFr($slug)->first();}
       return view('organisation.show', compact('organisation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $organisation = Organisation::findOrFail($id);
        return view('organisation.edit', compact('organisation'));
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


        $organisation = Organisation::findOrFail($id);
        $organisation->update($request->all());
        Session::flash('flash_message', 'Organisation succefully edited');
        return redirect('/organisations');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $organisation = Organisation::findOrFail($id);
        $organisation->delete();
        Session::flash('flash_message', 'Events category item succesfully deleted');
        return redirect('/organisations');
    }
}
