@if(Session::has('flash_message'))
<div class="alert alert-danger">
  {{session::get('flash_message_neg')}}
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times</button>
</div>
@endif 