@extends('layouts.app')
@section ('content')
<script type="text/javascript">
    var events = {!! $events->toJson() !!};
    console.log(events);

  </script>
<main class="container">

<div id="events_index"></div>
</main>
@endsection 

