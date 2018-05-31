@extends('layouts.app')
@section ('content')
<script type="text/javascript">
    var data = {!! $events->toJson() !!};
    console.log(data);
 
  </script>
<main class="container">

   <div class="container-fluid">
       <div class="jumbotron">
       <h1>Events</h1>
    </div>

    <div class="col-sm-8 col-sm-offset-2">
     @include('partials.flashMessage')

        
    @foreach($events as $events )

        @if(LaravelLocalization::getCurrentLocale()=='nl')
        <h2><a href="{{action('EventsController@show', [$events->id])}}">{{$events->titleNl}}</a></h2>
        <h3>{{$events->date}}</h3>
        <p>{{$events->bodyNl}}</p>
        @endif 

        @if(LaravelLocalization::getCurrentLocale()=='fr')
        <h2><a href="{{action('EventsController@show', [$events->id])}}">{{$events->titleFr}}</a></h2>
        <h3>{{$events->date}}</h3>
        <p>{{$events->bodyFr}}</p>
        @endif 

        @if(LaravelLocalization::getCurrentLocale()=='en')
        <h2><a href="{{action('EventsController@show', [$events->id])}}">{{$events->titleEn}}</a></h2>
        <h3>{{$events->date}}</h3>
        <p>{{$events->bodyEn}}</p>
        @endif 
            
            {{--  <h2 class='nl hidden'><a href="{{action('EventsController@show', [$events->id])}}">{{$events->titleNl}}</a></h2>
            <h3 class='nl hidden'>{{$events->date}}</h3>
            <p class='nl hidden'>{{$events->bodyNl}}</p>
            <h2 class='fr hidden'><a href="{{action('EventsController@show', [$events->id])}}">{{$events->titleFr}}</a></h2>
            <h3 class='fr hidden'>{{$events->date}}</h3>
            <p class='fr hidden'>{{$events->bodyFr}}</p>
            <h2 class='en hidden'><a href="{{action('EventsController@show', [$events->id])}}">{{$events->titleEn}}</a></h2>
            <h3 class='en hidden'>{{$events->date}}</h3>
            <p class='en hidden'>{{$events->bodyEn}}</p>  --}}
    @endforeach
    
    </div>
</div>

</main>
@endsection 

