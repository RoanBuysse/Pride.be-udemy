@extends('layouts.app')
@section ('content')

<main class="container">

   <div class="container-fluid">
       <div class="jumbotron">
       <h1>Admin Control Panel</h1>
       <a href="{{url('/users')}}" class="btn btn-warning mijnProg" role="button">See all users</a>
       <a href="{{url('/events_categories')}}" class="btn btn-warning mijnProg" role="button">Categories for events</a>
       <a href="{{url('/news_categories')}}" class="btn btn-warning mijnProg" role="button">Categories for news</a>

    </div>

    <div class="col-sm-8 col-sm-offset-2 admin-buttons">
        
            @include('partials.flashMessage')
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
                                    <td>{{$news->titleNl}}</td>
                                    <td>{!!str_limit($news->bodyNl, 100)!!}</td>
                                  
                                    @endif 
                                    @if(LaravelLocalization::getCurrentLocale()=='en')
                                    <td>{{$news->titleEn}}</td>
                                    <td>{!!str_limit($news->bodyEn, 100)!!}</td>
                                    
                                    @endif 
                                    @if(LaravelLocalization::getCurrentLocale()=='fr')
                                    <td>{{$news->titleFr}}</td>
                                    <td>{!!str_limit($news->bodyFr, 100)!!}</td>
                                   
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
                                <td>{{$events->titleNl}}</td>
                                <td>{!!str_limit($events->bodyNl, 100)!!}</td>
                                
                                @endif 
                                @if(LaravelLocalization::getCurrentLocale()=='en')
                                <td>{{$events->titleEn}}</td>
                                <td>{!!str_limit($events->bodyEn, 100)!!}</td>
                              
                                @endif 
                                @if(LaravelLocalization::getCurrentLocale()=='fr')
                                <td>{{$events->titleFr}}</td>
                                <td>{!!str_limit($events->bodyFr, 100)!!}</td>
                               
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

