<?php

namespace App\Http\Controllers;
use App\Photo;
use Illuminate\Support\Collection;
use App\Http\Resources\Photo as PhotoResource;

use Illuminate\Http\Request;
use Session;

class PhotoController extends Controller
{
    


    public function index(Request $request)
    {
        $photo = Photo::orderBy('created_at', 'desc')->paginate(5000);
        
        return PhotoResource::collection($photo);
   
        // dd($newstranslation);
    }
    
    
}