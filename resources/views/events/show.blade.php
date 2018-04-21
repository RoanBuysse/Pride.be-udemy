@extends('layouts.app')
@section ('content')

<main class="container">

<div class="container-fluid">
    <article>

            <div class="col-sm-12 text-center">
                    @if ($events->photo)
                   
                        <img class="featured_image img-responsive" src="/images/{{$events->photo ? $events->photo->photo : ''}}" alt="{{str_limit($events->titleEn, 50)}}">
     
                    @endif
                 </div>  
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
        @foreach($events->category as $category)
        <p><a href="{{route('events_categories.show', $category->slug_nl)}}">{{$category->nameNl}}</p>
        @endforeach
    </div>
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
       @foreach($events->category as $category)
       <p><a href="{{route('events_categories.show', $category->slug_fr)}}">{{$category->nameFr}}</p>
       @endforeach
    </div>
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
        @foreach($events->category as $category)
        <p><a href="{{route('events_categories.show', $category->slug_en)}}">{{$category->nameEn}}</p>
        @endforeach
    </div>
    @endif

    </article>  
    
    </div>


</main>
@endsection 







