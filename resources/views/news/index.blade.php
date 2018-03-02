@extends('layouts.app')
@section ('content')

<main class="container">

   <div class="container-fluid">
       <div class="jumbotron">
       <h1>News items</h1>
    
    </div>

    <div class="col-sm-8 col-sm-offset-2">
        
    @foreach($news as $news )
            <h2><a href="{{action('NewsController@show', [$news->id])}}">{{$news->titleNl}}</a></h2>
            <p>{{$news->bodyNl}}</p>
    @endforeach
    
    </div>
</div>

</main>
@endsection 

