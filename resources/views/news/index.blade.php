{{--  $post->translation('de')->first()->title;  --}}
@foreach($news as $news )
   <h2>{{$news->id}}</h2>

    
@endforeach


{{--  @foreach($news->newstranslation as $newstranslation)
    {{$newstranslation->title}}
    @endforeach  --}}

@foreach($newstranslation as $newstranslation )
    <h2>{{$newstranslation->title}}</h2>
     
 @endforeach