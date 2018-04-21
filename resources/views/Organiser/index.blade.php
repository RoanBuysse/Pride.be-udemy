@extends('layouts.app')
@section ('content')

<main class="container">

   <div class="container-fluid">
       <div class="jumbotron">
       <h1>List of organisers</h1>
    
    </div>

    <div class="col-sm-8 col-sm-offset-2">


       
            @foreach($organisers as $organiser )
     

            
                
                @if($organiser->events->count() > 0)
                <a href="{{route('organiser.show', $organiser->slug)}}">{{$organiser->name}}</a>
               @endif 
         @endforeach
        
        </div>

    
    </div>
</div>

</main>
@endsection 
