@extends('layouts.app')
@section ('content')

<main class="container">

   <div class="container-fluid">
       <div class="jumbotron">
       <h1>List of news Categories</h1>
    
    </div>

    <div class="col-sm-8 col-sm-offset-2">


        
        @foreach($categories as $category )
     
           {{--  dutch  --}}
            @if(LaravelLocalization::getCurrentLocale()=='nl')
               
               @if($category->news->count() > 0)
               <a href="{{route('news_categories.show', $category->slug_nl)}}">{{$category->nameNl}}</a>
                @endif 
           

                
             @endif 
               

            {{--  french  --}}
             @if(LaravelLocalization::getCurrentLocale()=='fr')
               
             @if($category->news->count() > 0)
             <a href="{{route('news_categories.show', $category->slug_fr)}}">{{$category->nameFr}}</a>
              @endif 
         

              
           @endif 

        {{--  English  --}}
           @if(LaravelLocalization::getCurrentLocale()=='en')
               
           @if($category->news->count() > 0)
           <a href="{{route('news_categories.show', $category->slug_en)}}">{{$category->nameEn}}</a>
            @endif 
       

            
         @endif 
        @endforeach
        
        </div>

    
    </div>
</div>

</main>
@endsection 
