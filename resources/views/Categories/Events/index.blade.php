@extends('layouts.app')
@section ('content')

<main class="container">

   <div class="container-fluid">
       <div class="jumbotron">
       <h1>List of event Categories</h1>
    
    </div>

    <div class="col-sm-8 col-sm-offset-2">


       
            @foreach($categories as $category )
     
            {{--  dutch  --}}
             @if(LaravelLocalization::getCurrentLocale()=='nl')
                
                @if($category->events->count() > 0)
                <a href="#">{{$category->nameNl}}</a>
                 @endif 
            
 
                 
              @endif 
                
 
             {{--  french  --}}
              @if(LaravelLocalization::getCurrentLocale()=='fr')
                
              @if($category->events->count() > 0)
              <a href="#">{{$category->nameFr}}</a>
               @endif 
          
 
               
            @endif 
 
         {{--  English  --}}
            @if(LaravelLocalization::getCurrentLocale()=='en')
                
            @if($category->events->count() > 0)
            <a href="#">{{$category->nameEn}}</a>
             @endif 
        
 
             
          @endif 
         @endforeach
        
        </div>

    
    </div>
</div>

</main>
@endsection 
