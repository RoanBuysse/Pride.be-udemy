@extends('layouts.app')
@section ('content')

<main class="container">

   <div class="container-fluid">
       <div class="jumbotron">
       <h1>News items</h1>
    
    </div>

    <div class="col-sm-8 col-sm-offset-2">


        
    @foreach($news as $news )
            <h2 class='nl hidden'><a href="{{action('NewsController@show', [$news->id])}}">{{$news->titleNl}}</a></h2>
            <p class='nl hidden'>{{$news->bodyNl}}</p>
            <h2 class='fr hidden'><a href="{{action('NewsController@show', [$news->id])}}">{{$news->titleFr}}</a></h2>
            <p class='fr hidden'>{{$news->bodyFr}}</p>
            <h2 class='en hidden'><a href="{{action('NewsController@show', [$news->id])}}">{{$news->titleEn}}</a></h2>
            <p class='en hidden'>{{$news->bodyEn}}</p>
    @endforeach
    
    </div>
</div>

</main>
@endsection 

