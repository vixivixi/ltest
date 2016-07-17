@extends('layouts.app')
{{--/
problem is solved by renaming the bindShared() to singleton()

It is located here: /path-to-your-project/vendor/illuminate/html/HtmlServiceProvider.php

/--}}
@section('content')

    {!! Form::model($post, ['method'=>'PATCH','action'=>['PostsController@update', $post->id]]) !!}

    <div class="col-md-5 col-md-offset-1">
        <h1>Edit the Post {{$post->title}}</h1>

            @include('post.form',['submitButton'=>'edit Post'])
        {!! Form::close() !!}
        @include('errors.list')
    </div>
@endsection
