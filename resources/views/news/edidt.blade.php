@extends('layouts.app') 
@section ('content')



<div class="jumbotron .jumbotron-fluid prideBlue scene_element scene_element--fadein">
    <div class="container">
        <div class="container-fluid">
            <h1 class='text-center'>{{__("Edit news item")}}</h1>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModal">{{_("Are you certain?")}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                {!! Form::open(['method' => 'DELETE', 'action' => ['NewsController@destroy', $news->id]]) !!} {!! Form::submit("Delete news
                item", ['class' => 'btn btn-danger']) !!}
            </div>
        </div>
    </div>
</div>
</div>



<main class="container m-page scene_element scene_element--fadeinup">

    <div class="container-fluid">

        <div class="col-sm col-sm-offset-2 scene_element scene_element--fadeinup">

            {!! Form::model($news, ['method' => 'PATCH', 'action' => ['NewsController@update', $news->id], 'files' =>true]) !!} @include('partials.errorMessage')

            <div class="form-group">

                {!! Form::label("news_category_id", __("Category:"))!!} {!! Form::select("news_category_id[]", $news_categories, null, ['id'
                => 'tag_list','class'=> 'form-control']) !!}


            </div>


            <div class="form-group">
                {!! Form::label("photo_id", __("Featured Image:")) !!} {!! Form::file("photo_id",['class' => 'form-control']) !!}

            </div>

            {{-- //nl --}}
            <h3>Dutch</h3>
            <div class="form-group">
                {!! Form::label("titleNl", __("Title:")) !!} {!! Form::text("titleNl", null, ['class' => 'form-control']) !!}

            </div>

            <div class="form-group">
                {!! Form::label("bodyNl", __("Content:")) !!} {!! Form::textarea("bodyNl", null, ['class' => 'form-control']) !!}
            </div>


            {{-- //fr --}}
            <h3>French</h3>
            <div class="form-group">
                {!! Form::label("titleFr", __("Title:")) !!} {!! Form::text("titleFr", null, ['class' => 'form-control']) !!}

            </div>

            <div class="form-group">
                {!! Form::label("bodyFr", __("Content:")) !!} {!! Form::textarea("bodyFr", null, ['class' => 'form-control']) !!}
            </div>



            {{-- //en --}}
            <h3>English</h3>
            <div class="form-group">
                {!! Form::label("titleEn", __("Title:")) !!} {!! Form::text("titleEn", null, ['class' => 'form-control']) !!}

            </div>

            <div class="form-group">
                {!! Form::label("bodyEn", __("Content:")) !!} {!! Form::textarea("bodyEn", null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit(__("Edit this news item"),['class' => 'btn btn-primary']) !!}
            </div>


            {!! Form::close() !!} 


            <div class="form-group">
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">
                            {{ __("Delete this news item")}}
                        </button>
            </div>
        </div>

</main>
@endsection