@extends('layouts.app')
@section ('content')

<main class="container">

   <div class="container-fluid">
       <div class="jumbotron">
       <h1>Edit Event Category</h1>
    
    </div>

    <div class="col-sm-8 col-sm-offset-2">
        {!! Form::model($category,['method' => 'PATCH', 'action' => ['EventsCategoryController@update', $category->id]]) !!}
        
        {{--  //nl  --}}
        <h3>Dutch</h3>
        <div class="form-group">
            {!! Form::label("nameNl", "Name:") !!}
            {!! Form::text("nameNl", null, ['class' => 'form-control']) !!}
           
        </div>


        {{--  //fr  --}}
        <h3>French</h3>
        <div class="form-group">
            {!! Form::label("nameFr", "Name:") !!}
            {!! Form::text("nameFr", null, ['class' => 'form-control']) !!}
           
        </div>

       
        {{--  //en  --}}
        <h3>English</h3>
        <div class="form-group">
            {!! Form::label("nameEn", "Name:") !!}
            {!! Form::text("nameEn", null, ['class' => 'form-control']) !!}
           
        </div>

      
        
        <div class="form-group">
                {!! Form::submit("Edit a Category",['class' => 'btn btn-primary']) !!}
        </div>
      
            
        {!! Form::close() !!}
        
        {!! Form::open(['method' => 'Delete','action'=> ['EventsCategoryController@destroy', $category->id]]) !!}
        
        {!! Form::submit("Delete category",['class'=> 'btn btn-danger'] ) !!}
        
        
        {!! Form::close() !!}
    
    </div>
</div>

</main>
@endsection 
