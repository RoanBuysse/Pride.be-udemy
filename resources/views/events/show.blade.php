@extends('layouts.app')
@section ('content')

<main class="container">

   <div class="container-fluid">
    <article> 
    {{--  //dutch   --}}
    @if(LaravelLocalization::getCurrentLocale()=='nl')
      <div class="jumbotron"><a style="float: right;" href={{action('EventsController@edit', [$events->id])}}>Edit</a>
   
       <h1>{{$events->titleNl}}</h1>
       <h3>{{$events->date}}</h3>
       <h3>{{$events->time}}</h3>

    
    </div>

    <div class="col-sm-8 col-sm-offset-2">
 
        <p>{{$events->bodyNl}}</p>
        <br>
        <p>{{$events->organisor}}</p>
    
    @endif


     {{--  //french   --}}
     @if(LaravelLocalization::getCurrentLocale()=='fr')
     <div class="jumbotron"><a style="float: right;" href={{action('EventsController@edit', [$events->id])}}>Edit</a>
  
      <h1>{{$events->titleFr}}</h1>
      <h3>{{$events->date}}</h3>
      <h3>{{$events->time}}</h3>

   
   </div>

   <div class="col-sm-8 col-sm-offset-2">

       <p>{{$events->bodyFr}}</p>
       <br>
       <p>{{$events->organisor}}</p>
   
   @endif


    {{--  //english   --}}
    @if(LaravelLocalization::getCurrentLocale()=='en')
      <div class="jumbotron"><a style="float: right;" href={{action('EventsController@edit', [$events->id])}}>Edit</a>
   
       <h1>{{$events->titleEn}}</h1>
       <h3>{{$events->date}}</h3>
       <h3>{{$events->time}}</h3>

    
    </div>

    <div class="col-sm-8 col-sm-offset-2">
 
        <p>{{$events->bodyEn}}</p>
        <br>
        <p>{{$events->organisor}}</p>
    
    @endif
    </article>  
    
    </div>
</div>

</main>
@endsection 







