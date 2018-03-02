@extends('layouts.app')
@section ('content')

<main class="container">

   <div class="container-fluid">
        <article>  
       <div class="jumbotron"><a style="float: right;" href={{action('NewsController@edit', [$news->id])}}>Edit</a>
   
       <h1>{{$news->titleNl}}</h1>
    
    </div>

    <div class="col-sm-8 col-sm-offset-2">
 
        <p>{{$news->bodyNl}}</p>
    </article>  
    
    </div>
</div>

</main>
@endsection 










