<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WriterController extends Controller
{
    public function __construct()
    {
      $this->middleware('isWriter');
    }
  
      public function index()
      {
          return view('writer.index');
      }
    
}
