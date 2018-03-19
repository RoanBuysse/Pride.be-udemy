@extends('layouts.app')
@section ('content')

<main class="container">

   <div class="container-fluid">
       <div class="jumbotron">
        {{--  dutch  --}}
        @if(LaravelLocalization::getCurrentLocale()=='nl')
       <h1>{{$category->nameNl}}</h1>  
       @endif
         {{--  french  --}}
         @if(LaravelLocalization::getCurrentLocale()=='fr')
         <h1>{{$category->nameFr}}</h1>  
         @endif
           {{--  english  --}}
        @if(LaravelLocalization::getCurrentLocale()=='en')
        <h1>{{$category->nameEn}}</h1>  
        @endif 
    
    </div>

    <div class="col-sm-8 col-sm-offset-2">


        
        @foreach($category->news as $news ) 
     
           {{--  dutch  --}}
            @if(LaravelLocalization::getCurrentLocale()=='nl')
               
             <li>{{$news->titleNl}}</li>
            
             @endif 
               

            {{--  french  --}}
             @if(LaravelLocalization::getCurrentLocale()=='fr')
               
             <li>{{$news->titleFr}}</li>

              
           @endif 

        {{--  English  --}}
           @if(LaravelLocalization::getCurrentLocale()=='en')
           <li>{{$news->titleEn}}</li>  
         @endif 
        @endforeach
        
        </div>

    
    </div>
</div>

</main>
@endsection 
