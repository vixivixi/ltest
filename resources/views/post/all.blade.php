@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-5 col-md-offset-1">
                <h1 >Posts in da base</h1>
                <hr/>
                @foreach($posts as $post)
                <h3></h3><a href="{{action('PostsController@show',[$post->id])}}">{{$post->title}}</a></h3>
                <a href="{{action('PostsController@edit',[$post->id],'edit')}}">edit</a>
                    <div class="bg-info">
                        {{$post->body}}
                    </div>
                <p align="right">{{$post->published_at->diffForHumans()}}</p>
                    <hr/>
                @endforeach
            </div>
        </div>
    </div>
@endsection
