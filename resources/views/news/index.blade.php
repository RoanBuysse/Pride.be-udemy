
{{--  ok  --}}
@extends('layouts.app')
@section ('content')

<script type="text/javascript">
  var news = {!! $news->toJson() !!};
  console.log(news);
  

</script>
<main class="container">

<div id="news_index"></div>
</main>



@endsection 

