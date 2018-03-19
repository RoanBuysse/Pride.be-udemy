@extends('layouts.app')
@section ('content')

<main class="container">

   <div class="container-fluid">
       <article>  
       <div class="jumbotron"><a style="float: right;" href={{action('NewsController@edit', [$news->id])}}>Edit</a>

        {{--  dutch  --}}
        @if(LaravelLocalization::getCurrentLocale()=='nl')
        <div class="col-sm-8 col-sm-offset-2"> 
        <h1>{{$news->titleNl}}</h1>
            
            <p>{{$news->bodyNl}}</p>
            </div>

        @endif 
    
        {{--  french  --}}
        @if(LaravelLocalization::getCurrentLocale()=='fr')
        <div class="col-sm-8 col-sm-offset-2">
        <h1>{{$news->titleFr}}</h1>
        <p>{{$news->bodyFr}}</p>
        </div>
        @endif 
    
        {{--  english  --}}
        @if(LaravelLocalization::getCurrentLocale()=='en')
        <div class="col-sm-8 col-sm-offset-2">
        <h1>{{$news->titleEn}}</h1>
        <p>{{$news->bodyEn}}</p>
        </div>
        @endif 
       
    </article>  
    
    
</div>
</div>

</main>
@endsection 










