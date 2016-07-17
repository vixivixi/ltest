@extends('layouts.app')
{{--/
problem is solved by renaming the bindShared() to singleton()

It is located here: /path-to-your-project/vendor/illuminate/html/HtmlServiceProvider.php

/--}}
@section('content')

    {!! Form::open(['url'=>'post']) !!}

    <div class="col-md-5 col-md-offset-1">
        <h1>Create the Post</h1>
            @include('post.form',['submitButton'=>'Add Post'])

        {!! Form::close() !!}
        @include('errors.list')
    </div>
@endsection
