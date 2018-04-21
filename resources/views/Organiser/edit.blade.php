@extends('layouts.app')
@section ('content')

<main class="container">

   <div class="container-fluid">
       <div class="jumbotron">
       <h1>Edit Event Category</h1>
    
    </div>

    <div class="col-sm-8 col-sm-offset-2">
        {!! Form::model($organiser,['method' => 'PATCH', 'action' => ['OrganiserController@update', $organiser->id]]) !!}
    
        <div class="form-group">
            {!! Form::label("name", "Name:") !!}
            {!! Form::text("name", null, ['class' => 'form-control']) !!}
           
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
