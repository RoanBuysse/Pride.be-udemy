@extends('layouts.app')
@section ('content')

<main class="container">

   <div class="container-fluid">
       <div class="jumbotron">
       <h1>Edit news</h1>
    
    </div>

    <div class="col-sm-8 col-sm-offset-2">
        {!! Form::model($news, ['method' => 'PATCH', 'action' => ['NewsController@update', $news->id], 'files' =>true]) !!}

        <div class="form-group">
            
            {!! Form::label("news_category_id", "Category:")!!}
            
            {!! Form::select("news_category_id[]", $news_categories, null, ['id' => 'tag_list','class'=> 'form-control']) !!}
            

        </div>

        <div class="form-group">
            {!! Form::label("photo_id", "Featured Image:") !!}
            {!! Form::file("photo_id",['class' => 'form-control']) !!}
           
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
                {!! Form::submit("Edit newsitem",['class' => 'btn btn-primary']) !!}
        </div>
      
            
        {!! Form::close() !!}
       
        {!! Form::open(['method' => 'DELETE', 'action' => ['NewsController@destroy', $news->id]]) !!}
       

        <div class="form-group"></div>
         
         {!! Form::submit("Delete news item", ['class' => 'btn btn-danger']) !!}
        
    
    </div>
</div>

</main>
@endsection 

