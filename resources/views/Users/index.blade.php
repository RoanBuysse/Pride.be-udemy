@extends('layouts.app')
@section ('content')

<main class="container">

   <div class="container-fluid">
       <div class="jumbotron">
       <h1>Users Dahboard</h1>
    
    </div>

    <div class="col-sm-8 col-sm-offset-2">
    </div>

    <div class="col-sm-12">
        <class class="page-header">Recent users</class>
        <div class="tabel-responsive">
            <table class="table table-sthiped">
                    <thead>
                            <tr>
                                <th>Name </th>
                                <th>Email</th>
                                <th>Country</th>
                                <th>Language</th>
                                
                                <th>Joined</th>
                                <th>Role</th>
                              
                            </tr>
                        </thead>
                   
                    <tbody>
                        
                            
                                    @foreach ($users as $user)
                                    <tr>
                                   
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->country}}</td>
                                    <td>{{$user->language}}</td>
                                    <td>{{$user->created_at}}</td>
                                     <td>
                                     <div class="form-group">
                                     {!! Form::model($user, ['action' => ['UserController@update', $user->id], 'method' => 'PATCH', 'id' => 'PublishForm'.$user->id]) !!}
                                     
                                     
                                        
                                        {!! Form::select('role_id', ['1' => 'Admin', '2' => 'Writer', '3' => 'Standard user'], null, ['class' => 'btn btn_primary']) !!} </td>
                                     </div>
                                     <td>
                                    <div class="form-group">
                                     {!! Form::submit("Update", ['class' => 'btn btn-succes btn-xs', 'form' => 'PublishForm'.$user->id]) !!}
                                    </div>
                                     {!! Form::close() !!}
                                    
                                     </td>
                                   
                                    </tr>
                                @endforeach
                            
                    </tbody>
                </table>
        </div>
    </div>

    
   
</div>

</main>
@endsection 

