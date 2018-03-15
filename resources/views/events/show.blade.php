@extends('layouts.app')
@section ('content')

<main class="container">

   <div class="container-fluid">
        <article>  
    <div class="jumbotron"><a style="float: right;" href={{action('EventsController@edit', [$events->id])}}>Edit</a>
   
       <h1  class='nl hidden'>{{$events->titleNl}}</h1>
       <h1  class='en hidden'>{{$events->titleEn}}</h1>
       <h1  class='fr hidden'>{{$events->titleFr}}</h1>
       <h3>{{$events->date}}</h3>
       <h3>{{$events->time}}</h3>

    
    </div>

    <div class="col-sm-8 col-sm-offset-2">
 
        <p  class='nl hidden'>{{$events->bodyNl}}</p>
        <p  class='en hidden'>{{$events->bodyEn}}</p>
        <p  class='fr hidden'>{{$events->bodyFr}}</p>
        <br>
        <p>{{$events->organisor}}</p>
    </article>  
    
    </div>
</div>

</main>
@endsection 










