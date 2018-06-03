@extends('layouts.app')
@section ('content')



<div class="jumbotron .jumbotron-fluid prideBlue scene_element scene_element--fadein">
        <div class="container">
            <div class="container-fluid">
              <h1 class='text-center'>{{__("NewsItems")}}</h1>
            </div>    
            </div>    
      </div>

<main class="container m-page scene_element scene_element--fadeinup">

   <div class="container-fluid">

    <div class="col-sm col-sm-offset-2 scene_element scene_element--fadeinup">


        {!! Form::open(['method' => 'Post', 'action' => 'NewsController@store', 'files'=>true]) !!}
        
        @include('partials.errorMessage')
        
        <div class="form-group">
            
            {!! Form::label("news_category_id", __("Category:"))!!}
            
            {!! Form::select("news_category_id[]", $news_categories, null, ['id' => 'tag_list','class'=> 'form-control']) !!}
            

        </div>


        <div class="form-group">
            {!! Form::label("photo_id",  __("Featured Image:")) !!}
            {!! Form::file("photo_id",['class' => 'form-control']) !!}
           
        </div>
        
        {{--  //nl  --}}
        <h3>Dutch</h3>
        <div class="form-group">
            {!! Form::label("titleNl", __("Title:")) !!}
            {!! Form::text("titleNl", null, ['class' => 'form-control']) !!}
           
        </div>

        <div class="form-group">
                {!! Form::label("bodyNl",  __("Content:")) !!}
                {!! Form::textarea("bodyNl", null, ['class' => 'form-control']) !!}
        </div>

        
        {{--  //fr  --}}
        <h3>French</h3>
        <div class="form-group">
         {!! Form::label("titleFr", __("Title:")) !!}
         {!! Form::text("titleFr", null, ['class' => 'form-control']) !!}
            
        </div>

        <div class="form-group">
                {!! Form::label("bodyFr", __("Content:")) !!}
                {!! Form::textarea("bodyFr", null, ['class' => 'form-control']) !!}
        </div>
            
        
        
        {{--  //en  --}}
        <h3>English</h3>
        <div class="form-group">
        {!! Form::label("titleEn", __("Title:")) !!}
        {!! Form::text("titleEn", null, ['class' => 'form-control']) !!}
        
        </div>

        <div class="form-group">
            {!! Form::label("bodyEn", __("Content:")) !!}
            {!! Form::textarea("bodyEn", null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
                {!! Form::submit(__("Create this news item"),['class' => 'btn btn-primary']) !!}
        </div>
      
            
        {!! Form::close() !!}
    
    </div>
</div>

</main>
@endsection 


