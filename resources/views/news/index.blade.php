
{{--  ok  --}}
@extends('layouts.app')
@section ('content')


 <div class="jumbotron .jumbotron-fluid prideBlue scene_element scene_element--fadein">
    <div class="container">
        <div class="container-fluid">
          <h1 class='text-center'>{{__("News")}}</h1>
        </div>    
        </div>    
  </div>
<main class="container m-page scene_element scene_element--fadeinup">
   
   <div class="container-fluid">
      
       

        <div class="col-sm col-sm-offset-2">

           <div class="dropdown mb-4">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown button
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Action</a>
            </div>
          </div>
        
            
          
              <News></News>
          

        
        </div>
  </div>

</main>
@endsection 

{{--  test  --}}


{{--  @extends('layouts.app')
@section ('content')

<!DOCTYPE html>
<html>

<head>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css"  media="screen,projection"/> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
  <link rel="stylesheet" href="style.css" type="text/css">
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script> -->
  <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/css/mdb.min.css" rel="stylesheet"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

</head>

<body>
            
           
    

    
    <div class="container" style="height:90vh">
            <div class="row align-items-center">
        
       
          <div class="col-9">

                <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="list-1" role="tabpanel" aria-labelledby="list-home-list">
                          <div class="card">
                            <img class="card-img-center align-self-center mr-3 mt-3" style="width:500px;" src="img/logo.png" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                          </div>
                        </div>
            
            </div>
          </div>
          <div class="col-3">
         <div class="list-group" id="list-tab" role="tablist">
            @foreach($news as $news )
              <a href="#{{$news->id}}" class="list-group-item list-group-item-action flex-column align-items-start" id={{$news->id}} data-toggle="list"
                role="tab">
                <div class="d-flex w-100 justify-content-between">
                  <h5 class="mb-1">{{$news->titleNl}}</h5>
                  <hr>
                  <small>{{$news->created_at}}</small>
                  <p class="mb-1">{{$news->bodyNl}}</small>
                </div>
              </a>
        @endforeach 
    </div>
        </div>
    </div>
      </div>
      

</body>
@endsection  --}}