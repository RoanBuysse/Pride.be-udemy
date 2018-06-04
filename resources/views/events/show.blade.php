@extends('layouts.app')
@section ('content')


<div class="jumbotron .jumbotron-fluid prideBlue scene_element scene_element--fadein ">
        <div class="container">
            <div class="container-fluid">
                    @if(LaravelLocalization::getCurrentLocale()=='nl')
                    <h1 class='text-center'>{{$events->titleNl}}</h1>
                    @endif 

                    @if(LaravelLocalization::getCurrentLocale()=='en')
                    <h1 class='text-center'>{{$events->titleEn}}</h1>
                    @endif 

                    @if(LaravelLocalization::getCurrentLocale()=='fr')
                    <h1 class='text-center'>{{$events->titleFr}}</h1>
                    @endif 
              
            </div>    
            </div>    
</div>

<main class="container scene_element scene_element--fadeinup">

    <div class="container-fluid">
        <div class="row result">
            <div class=" col-sm-offset-2 col-8">
                    @include('partials.flashMessage')
                <div class="card mb-3" >
                    <img class="card-img-top" src="/images/events/{{$events->photo ? $events->photo->photo : ''}}" alt="">
                    <div class="card-body ">


                    {{--  dutch  --}}
                    @if(LaravelLocalization::getCurrentLocale()=='nl')
                      <h3 class="card-title">{{$events->titleNl}}</h3>
                      <p class="card-text">{{$events->bodyNl}}</p>
                    
                      @endif 
                    


                  
                    {{--  dutch  --}}
                    @if(LaravelLocalization::getCurrentLocale()=='en')
                      <h3 class="card-title">{{$events->titleEn}}</h3>
                      <p class="card-text">{{$events->bodyEn}}</p>
                    
                      @endif 
                    



                  
                    {{--  dutch  --}}
                    @if(LaravelLocalization::getCurrentLocale()=='fr')
                      <h3 class="card-title">{{$events->titleFr}}</h3>
                      <p class="card-text">{{$events->bodyFr}}</p>
                      
                      @endif 
                    </div>
                  </div>

                </div>

                <div class="col-sm col-sm-offset-2 mt-20">
                  <div class="card mb-3 ">
                        <div class="card-body">
                             <h4 class="card-title mb-5">{{_('Details:')}}</h4>
                            
                            <div class="row">
                                
                                <div class="col-sm col-sm-offset">
                                <p class="card-text"><strong>{{_('Date:')}}</strong></p>
                                <p class="card-text"><strong>{{_('Time:')}}</strong></p>
                                <p class="card-text"><strong>{{_('Location:')}}</strong></p>
                                <p class="card-text"><strong>{{_('Organisation:')}}</strong></p>
                                <p class="card-text"><strong>{{_('Category:')}}</strong></p>
                                </div>

                                <div class="col-sm col-sm-offset-2">
                                        @if(LaravelLocalization::getCurrentLocale()=='nl')
                                            <p class="card-text">{{date('d-m-Y', strtotime($events->created_at))}}</p>
                                            <p class="card-text">{{$events->time}}</p>
                                            <p class="card-text">{{$events->location}}</p>
                                            @foreach($events->organisation as $organisation)
                                            <p class="card-text">{{$organisation->nameNl}}</p>
                                            @endforeach
                                            @foreach($events->category as $category)
                                            <p class="card-text">{{$category->nameNl}}</p>
                                            @endforeach
                                        @endif 
                    
                                        @if(LaravelLocalization::getCurrentLocale()=='en')
                                            <p class="card-text">{{date('d-m-Y', strtotime($events->created_at))}}</p>
                                            <p class="card-text">{{$events->time}}</p>
                                            <p class="card-text">{{$events->location}}</p>
                                            @foreach($events->organisation as $organisation)
                                            <p class="card-text">{{$organisation->nameEn}}</p>
                                            @endforeach
                                            @foreach($events->category as $category)
                                            <p class="card-text">{{$category->nameEn}}</p>
                                            @endforeach
                                        @endif 
                    
                                        @if(LaravelLocalization::getCurrentLocale()=='fr')
                                            <p class="card-text">{{date('d-m-Y', strtotime($events->created_at))}}</p>
                                            <p class="card-text">{{$events->time}}</p>
                                            <p class="card-text">{{$events->location}}</p>
                                            @foreach($events->organisation as $organisation)
                                            <p class="card-text">{{$organisation->nameFr}}</p>
                                            @endforeach
                                            @foreach($events->category as $category)
                                            <p class="card-text">{{$category->nameFr}}</p>
                                            @endforeach
                                        @endif 

                                    
                                
                                
                                </div>

                            </div>
                        </div>
                    @guest
                    <a class="btn card-footer  prideOrange" href="{{ route('login') }}">{{_('Login to add to agenda')}}</a></li>
                    @else
                          
                
                       <a class="btn card-footer  prideOrange" href="#" onclick="event.preventDefault(); 
                            document.getElementById('agenda-fav-form')
                            .submit();">{{_('Add to my agenda')}}</a>

                            <form id="agenda-fav-form" class="hidden" 
                            action="{{ route('agenda.fav.store', $events) }}" method="POST">
                            {{ csrf_field() }}
                            </form>
                        @endguest
                        
                      </div>
                    </div>
                  
                      
                    
                       
                    
          
                  
                  
        
            </div>
    </div>
   

</main>
@endsection 










