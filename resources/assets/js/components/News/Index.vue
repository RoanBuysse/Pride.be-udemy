<template>
   <main class="container">

   <div class="container-fluid">
       <div class="jumbotron">
       <h1>News items</h1>
    
    </div>

    <div class="col-sm-8 col-sm-offset-2">
    
    @include('partials.flashMessage')
  


        
    @foreach($news as $news )
    @if(LaravelLocalization::getCurrentLocale()=='nl')
    <h2><a href="{{action('NewsController@show', [$news->id])}}">{{$news->titleNl}}</a></h2>
    <p>{{$news->bodyNl}}</p>
    @endif 

    @if(LaravelLocalization::getCurrentLocale()=='fr')
    <h2><a href="{{action('NewsController@show', [$news->id])}}">{{$news->titleFr}}</a></h2>
    <p>{{$news->bodyFr}}</p>
    @endif 

    @if(LaravelLocalization::getCurrentLocale()=='en')
    <h2><a href="{{action('NewsController@show', [$news->id])}}">{{$news->titleEn}}</a></h2>
    <p>{{$news->bodyEn}}</p>
    @endif 
            
           
    @endforeach
    
    </div>
</div>

</main>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        } 
    }
    
</script>
