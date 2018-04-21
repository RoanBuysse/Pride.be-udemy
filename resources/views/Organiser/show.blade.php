@extends('layouts.app')
@section ('content')

<main class="container">

   <div class="container-fluid">
       <div class="jumbotron">
       
     
       <h1>{{$organiser->name}}</h1><a href="{{action('OrganiserController@edit',[$organiser->id])}}">Edit</a>   

    
    </div>

    <div class="col-sm-8 col-sm-offset-2">


        
        @foreach($organiser->events as $events ) 
   
           
               
             <h2><a href="{{action('OrganiserController@show', [$events->id])}}">{{$events->titleNl}}</a></h2>
             <hr>
        
        
        </div>

    
    </div>
</div>

</main>
@endsection 
