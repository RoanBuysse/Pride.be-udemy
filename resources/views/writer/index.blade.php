@extends('layouts.app')
@section ('content')

<main class="container">
<div class="container-fluid">
        <div class="jumbotron">
        <h1>Writer Control Panel</h1>
     
     </div>
 
     <div class="col-sm-8 col-sm-offset-2">
         {{--  <button class="btn btn-primary "><a href={{url('/news/create')}}>Create News Item</a></button>
         <button class="btn btn-danger "><a href={{url('/news/bin')}}>Trash</a></button>  --}}
         <h2>News</h2>
         <a href="{{url('/news/create')}}" class="btn btn-primary" role="button">Add newsItem</a>
 
     </div>
 </div>
 
 </main>
 @endsection 
 
 