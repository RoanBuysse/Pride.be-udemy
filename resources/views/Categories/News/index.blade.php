@extends('layouts.app')
@section ('content')

<main class="container">

   <div class="container-fluid">
       <div class="jumbotron">
       <h1>List of news Categories</h1>
       <a href="{{url('/news_categories/create')}}" class="btn btn-warning mijnProg" role="button">Add Categorie</a>
    
    </div>

    <div class="col-sm-8 col-sm-offset-2">


        
        @foreach($categories as $category )
     <ul class="list-group">
           {{--  dutch  --}}
            @if(LaravelLocalization::getCurrentLocale()=='nl')
               
               @if($category->news->count() > 0)
               <li class="list-group-item"><a href="{{route('news_categories.show', $category->slug_nl)}}">{{$category->nameNl}}</a></li>
                @endif 
           

                
             @endif 
               

            {{--  french  --}}
             @if(LaravelLocalization::getCurrentLocale()=='fr')
               
             @if($category->news->count() > 0)
             <li class="list-group-item"><a href="{{route('news_categories.show', $category->slug_fr)}}">{{$category->nameFr}}</a></li>
              @endif 
         

              
           @endif 

        {{--  English  --}}
           @if(LaravelLocalization::getCurrentLocale()=='en')
               
           @if($category->news->count() > 0)
           <li class="list-group-item"><a href="{{route('news_categories.show', $category->slug_en)}}">{{$category->nameEn}}</a></li>
            @endif 
       

            
         @endif 
        </ul>
        @endforeach
        
        </div>

    
    </div>
</div>

</main>
@endsection 
