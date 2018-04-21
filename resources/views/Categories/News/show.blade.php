@extends('layouts.app')
@section ('content')

<main class="container">

   <div class="container-fluid">
       <div class="jumbotron">
        {{--  dutch  --}}
        @if(LaravelLocalization::getCurrentLocale()=='nl')
       <h1>{{$category->nameNl}}</h1><a href="{{action('NewsCategoryController@edit',[$category->id])}}">Edit</a> 
       <?php $link = $category->slug_fr; ?>
       @endif
         {{--  french  --}}
         @if(LaravelLocalization::getCurrentLocale()=='fr')
         <h1>{{$category->nameFr}}</h1><a href="{{action('NewsCategoryController@edit',[$category->id])}}">Edit</a>   
         @endif
           {{--  english  --}}
        @if(LaravelLocalization::getCurrentLocale()=='en')
        <h1>{{$category->nameEn}}</h1><a href="{{action('NewsCategoryController@edit',[$category->id])}}">Edit</a>   
        @endif 
    
    </div>

    <div class="col-sm-8 col-sm-offset-2">


        
        @foreach($category->news as $news ) 
     
           {{--  dutch  --}}
            @if(LaravelLocalization::getCurrentLocale()=='nl')
               
             <h2li>{{$news->titleNl}}</h2>
                <hr>
            
             @endif 
               

            {{--  french  --}}
             @if(LaravelLocalization::getCurrentLocale()=='fr')
               
             <h2>{{$news->titleFr}}</h2>
             <hr>

              
           @endif 

        {{--  English  --}}
           @if(LaravelLocalization::getCurrentLocale()=='en')
           <h2>{{$news->titleEn}}</h2>  
           <hr>
         @endif 
        @endforeach
        
        </div>

    
    </div>
</div>

</main>
@endsection 
