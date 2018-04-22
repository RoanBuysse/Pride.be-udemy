@extends('layouts.app')
@section ('content')

<main class="container">

   <div class="container-fluid">
       <div class="jumbotron">
       <h1>Admin Control Panel</h1>
    
    </div>

    <div class="col-sm-8 col-sm-offset-2">
        <h2>News</h2>
        <a href="{{url('/news/create')}}" class="btn btn-warning mijnProg" role="button">Add newsItem</a>
        <br>
    </div>

    <div class="col-sm-12">
        <div class="tabel-responsive">
            <table class="table table-sthiped">
                    <thead>
                            <tr>
                                <th>Title news</th>
                                <th>Content news</th>
                                
                              
                            </tr>
                        </thead>
                   
                    <tbody>
                        
                            
                                    @foreach ($news as $news)
                                    <tr>
                                    @if(LaravelLocalization::getCurrentLocale()=='nl')
                                    <th>{{$news->titleNl}}</th>
                                    <th>{!!str_limit($news->bodyNl, 100)!!}</th>
                                  
                                    @endif 
                                    @if(LaravelLocalization::getCurrentLocale()=='en')
                                    <th>{{$news->titleEn}}</th>
                                    <th>{!!str_limit($news->bodyEn, 100)!!}</th>
                                    
                                    @endif 
                                    @if(LaravelLocalization::getCurrentLocale()=='fr')
                                    <th>{{$news->titleFr}}</th>
                                    <th>{!!str_limit($news->bodyFr, 100)!!}</th>
                                   
                                    @endif 
                                </tr>
                                @endforeach
                            
                    </tbody>
                </table>
        </div>
    </div>




<div class="col-sm-8 col-sm-offset-2">
        <h2>Events</h2>
        <a href="{{url('/events/create')}}" class="btn btn-warning mijnProg" role="button">Add Event</a>
        <br>
    </div>

    <div class="col-sm-12">
            <div class="tabel-responsive">
                <table class="table table-sthiped">
                    <thead>
                        <tr>
                                <th>Title events</th>
                                <th>Content events</th>
                        </tr>
                    </thead>
               
                <tbody>
                    
                                @foreach ($events as $events)
                                 <tr>
                                
                                @if(LaravelLocalization::getCurrentLocale()=='nl')
                                <th>{{$events->titleNl}}</th>
                                <th>{!!str_limit($events->bodyNl, 100)!!}</th>
                                
                                @endif 
                                @if(LaravelLocalization::getCurrentLocale()=='en')
                                <th>{{$events->titleEn}}</th>
                                <th>{!!str_limit($events->bodyEn, 100)!!}</th>
                              
                                @endif 
                                @if(LaravelLocalization::getCurrentLocale()=='fr')
                                <th>{{$events->titleFr}}</th>
                                <th>{!!str_limit($events->bodyFr, 100)!!}</th>
                               
                                @endif 
                                </tr>
                            @endforeach
                        
                </tbody>
            </table>
            </div>
        </div>
    
    
   
</div>

</main>
@endsection 

