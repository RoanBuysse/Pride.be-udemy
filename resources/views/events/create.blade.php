@extends('layouts.app')
@section ('content')

<main class="container">

   <div class="container-fluid">
       <div class="jumbotron">
       <h1>Create event</h1>
    
    </div>

    <div class="col-sm-8 col-sm-offset-2">
        {!! Form::open(['method' => 'Post', 'action' => 'EventsController@store']) !!}
        <h3>Common info</h3>
        <div class="form-group">
            {!! Form::label("date", "Date:") !!}
            {!! Form::date("date", null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label("time", "Time:") !!}
            {!! Form::time("time", null, ['class' => 'form-control']) !!}
        </div>
        
        <div class="form-group">
            {!! Form::label("organisor", "Organiser:") !!}
            {!! Form::text("organisor", null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            
            {!! Form::label("events_category_id", "Category:")!!}
            
            {!! Form::select("events_category_id[]", $news_categories, null, ['id' => 'tag_list','class'=> 'form-control']) !!}
            

        </div>

        
        
        {{--  //nl  --}}
        <h3>Dutch</h3>
        <div class="form-group">
            {!! Form::label("titleNl", "Title:") !!}
            {!! Form::text("titleNl", null, ['class' => 'form-control']) !!}
           
        </div>

        <div class="form-group">
                {!! Form::label("bodyNl", "Content:") !!}
                {!! Form::textarea("bodyNl", null, ['class' => 'form-control']) !!}
        </div>

     
        
        {{--  //fr  --}}
        <h3>French</h3>
        <div class="form-group">
         {!! Form::label("titleFr", "Title:") !!}
         {!! Form::text("titleFr", null, ['class' => 'form-control']) !!}
            
        </div>

        <div class="form-group">
                {!! Form::label("bodyFr", "Content:") !!}
                {!! Form::textarea("bodyFr", null, ['class' => 'form-control']) !!}
        </div>
      

            
        
        
        {{--  //en  --}}
        <h3>English</h3>
        <div class="form-group">
        {!! Form::label("titleEn", "Title:") !!}
        {!! Form::text("titleEn", null, ['class' => 'form-control']) !!}
        
        </div>

        <div class="form-group">
            {!! Form::label("bodyEn", "Content:") !!}
            {!! Form::textarea("bodyEn", null, ['class' => 'form-control']) !!}
        </div>


        <div class="form-group">
                {!! Form::submit("Create a newsitem",['class' => 'btn btn-primary']) !!}
        </div>

      

      
            
        {!! Form::close() !!}
    
    </div>
</div>

</main>
@endsection 

