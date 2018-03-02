@extends('layouts.app')
@section ('content')

<main class="container">

   <div class="container-fluid">
        <article>  
       <div class="jumbotron"><a style="float: right;" href={{action('NewsController@edit', [$news->id])}}>Edit</a>
   
       <h1  class='nl hidden'>{{$news->titleNl}}</h1>
       <h1  class='en hidden'>{{$news->titleEn}}</h1>
       <h1  class='fr hidden'>{{$news->titleFr}}</h1>
    
    </div>

    <div class="col-sm-8 col-sm-offset-2">
 
        <p  class='nl hidden'>{{$news->bodyNl}}</p>
        <p  class='en hidden'>{{$news->bodyEn}}</p>
        <p  class='fr hidden'>{{$news->bodyFr}}</p>
    </article>  
    
    </div>
</div>

</main>
@endsection 










