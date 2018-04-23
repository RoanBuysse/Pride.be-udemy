@extends('layouts.app')
@section ('content')

<main class="container">

   <div class="container-fluid">
       
       <h1>My program</h1>
       
    </div>

    <div class="col-sm-8 col-sm-offset-2">

                @if($events->count())
                @foreach($getEventsCollection as $getEventsCollection)
                  
                    <article>
                       
                            {{$getEventsCollection}}
                    
                    </article>
                    
                @endforeach

                
                
                @else
                No favourite items found :(
            @endif
        
        
        </div>

    
    </div>
</div>

</main>
@endsection 
