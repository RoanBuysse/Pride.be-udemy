@extends('layouts.app')
@section ('content')

<main class="container">

   <div class="container-fluid">
       <div class="jumbotron">
       <h1>List of Organisations</h1>
       <a href="{{url('/organisations/create')}}" class="btn btn-warning mijnProg" role="button">Add Organisation</a>
    </div>

    <div class="col-sm-8 col-sm-offset-2">
            @include('partials.flashMessage')
 

       
            @foreach($organisations as $organisation )
            <ul class="list-group">
     
            {{--  dutch  --}}
             @if(LaravelLocalization::getCurrentLocale()=='nl')
                
                @if($organisation->events->count() > 0)
                <li class="list-group-item"><a href="{{route('organisations.show', $organisation->slug_nl)}}">{{$organisation->nameNl}}</a></li>
                 @endif 
            
 
                 
              @endif 
                
 
             {{--  french  --}}
              @if(LaravelLocalization::getCurrentLocale()=='fr')
                
              @if($organisation->events->count() > 0)
              <li class="list-group-item"><a href="{{route('organisations.show', $organisation->slug_fr)}}">{{$organisation->nameFr}}</a></li>
               @endif 
          
 
               
            @endif 
 
         {{--  English  --}}
            @if(LaravelLocalization::getCurrentLocale()=='en')
                
            @if($organisation->events->count() > 0)
            <li class="list-group-item"><a href="{{route('organisations.show', $organisation->slug_en)}}">{{$organisation->nameEn}}</a></li>
             @endif 
        
 
             
          @endif 
            </ul>
         @endforeach
        
        </div>

    
    </div>
</div>

</main>
@endsection 
