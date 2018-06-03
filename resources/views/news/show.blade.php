@extends('layouts.app')
@section ('content')


<div class="jumbotron .jumbotron-fluid prideBlue scene_element scene_element--fadein ">
        <div class="container">
            <div class="container-fluid">
              <h1 class='text-center'>{{$news->titleNl}}</h1>
            </div>    
            </div>    
</div>

<main class="container scene_element scene_element--fadeinup">

    <div class="container-fluid">
            <div class="col-sm col-sm-offset-2">
                <div class="card mb-3">
                    <img class="card-img-top" src="/images/news/{{$news->photo ? $news->photo->photo : ''}}" alt="">
                    <div class="card-body">


                    {{--  dutch  --}}
                    @if(LaravelLocalization::getCurrentLocale()=='nl')
                      <h3 class="card-title">{{$news->titleNl}}</h3>
                      <p class="card-text">{{$news->bodyNl}}</p>
                      @foreach($news->category as $category)
                      <p class="card-text float-right mt-2"><small class="text-muted">{{$category->nameNl}}</small></p>
                      @endforeach
                      <p class="card-text float-left mt-2"><small class="text-muted">{{date('d-m-Y', strtotime($news->created_at))}}</p>
                      @endif 
                    


                  
                    {{--  dutch  --}}
                    @if(LaravelLocalization::getCurrentLocale()=='en')
                      <h3 class="card-title">{{$news->titleEn}}</h3>
                      <p class="card-text">{{$news->bodyEn}}</p>
                      @foreach($news->category as $category)
                      <p class="card-text float-right mt-2"><small class="text-muted">{{$category->nameEn}}</small></p>
                      @endforeach
                      <p class="card-text float-left mt-2"><small class="text-muted">{{date('d-m-Y', strtotime($news->created_at))}}</p>
                      @endif 
                    



                  
                    {{--  dutch  --}}
                    @if(LaravelLocalization::getCurrentLocale()=='fr')
                      <h3 class="card-title">{{$news->titleFr}}</h3>
                      <p class="card-text">{{$news->bodyFr}}</p>
                      @foreach($news->category as $category)
                      <p class="card-text float-right mt-2"><small class="text-muted">{{$category->nameFr}}</small></p>
                      @endforeach
                      <p class="card-text float-left mt-2"><small class="text-muted">{{date('d-m-Y', strtotime($news->created_at))}}</p>
                      @endif 
                    </div>
                  </div>
                      
                    
                       
                    
          
                  
                  </div>
        
        
    </div>
   

</main>
@endsection 










