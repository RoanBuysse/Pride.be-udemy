@extends('layouts.app')
@section ('content')

<main class="container">

   <div class="container-fluid">
       <div class="jumbotron">
        {{--  dutch  --}}
        @if(LaravelLocalization::getCurrentLocale()=='nl')
       <h1>{{$organisation->nameNl}}</h1><a href="{{action('OrganisationController@edit',[$organisation->id])}}">Edit</a>   
       @endif
         {{--  french  --}}
         @if(LaravelLocalization::getCurrentLocale()=='fr')
         <h1>{{$organisation->nameFr}}</h1><a href="{{action('OrganisationController@edit',[$organisation->id])}}">Edit</a>   
         @endif
           {{--  english  --}}
        @if(LaravelLocalization::getCurrentLocale()=='en')
        <h1>{{$organisation->nameEn}}</h1><a href="{{action('OrganisationController@edit',[$organisation->id])}}">Edit</a>   
        @endif 
    
    </div>

    <div class="col-sm-8 col-sm-offset-2">


        
        @foreach($organisation->events as $events ) 
     
           {{--  dutch  --}}
            @if(LaravelLocalization::getCurrentLocale()=='nl')
               
             <h2><a href="{{action('EventsController@show', [$events->id])}}">{{$events->titleNl}}</a></h2>
             <hr>
            
             @endif 
               

            {{--  french  --}}
             @if(LaravelLocalization::getCurrentLocale()=='fr')
               
             <h2><a href="{{action('EventsController@show', [$events->id])}}">{{$events->titleFr}}</a></h2>
             <hr>

              
           @endif 

        {{--  English  --}}
           @if(LaravelLocalization::getCurrentLocale()=='en')
           <h2><a href="{{action('EventsController@show', [$events->id])}}">{{$events->titleEn}}</a></h2>  
           <hr>
         @endif 
        @endforeach
        
        </div>

    
    </div>
</div>

</main>
@endsection 
