@extends('layouts.app')
@section ('content')

<main class="container">

   <div class="container-fluid">
       <article>
          <div class="col-sm-12 text-center">
               @if ($news->photo)
              
                   <img class="featured_image img-responsive" src="/images/news/{{$news->photo ? $news->photo->photo : ''}}" alt="{{str_limit($news->titleEn, 50)}}">

               @endif
            </div>  
       <div class="jumbotron"><a style="float: right;" href={{action('NewsController@edit', [$news->id])}}>Edit</a>

        {{--  dutch  --}}
        @if(LaravelLocalization::getCurrentLocale()=='nl')
        <div class="col-sm-8 col-sm-offset-2"> 
        <h1>{{$news->titleNl}}</h1>
            
            <p>{{$news->bodyNl}}</p>
            @foreach($news->category as $category)
           <p><a href="{{route('news_categories.show', $category->slug_nl)}}">{{$category->nameNl}}</p>
        @endforeach
            </div>

        @endif 
    
        {{--  french  --}}
        @if(LaravelLocalization::getCurrentLocale()=='fr')
        <div class="col-sm-8 col-sm-offset-2">
        <h1>{{$news->titleFr}}</h1>
        <p>{{$news->bodyFr}}</p>
        @foreach($news->category as $category)
        <p><a href="{{route('news_categories.show', $category->slug_fr)}}">{{$category->nameFr}}</p>
        @endforeach
        </div>
        @endif 
    
        {{--  english  --}}
        @if(LaravelLocalization::getCurrentLocale()=='en')
        <div class="col-sm-8 col-sm-offset-2">
        <h1>{{$news->titleEn}}</h1>
        <p>{{$news->bodyEn}}</p>
        @foreach($news->category as $category)
        <p><a href="{{route('news_categories.show', $category->slug_en)}}">{{$category->nameEn}}</p>
        @endforeach
        
        </div>
        @endif 
       
    </article>  
    
    
</div>
</div>

</main>
@endsection 










