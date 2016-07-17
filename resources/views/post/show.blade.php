@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-md-offset-1">
                <h1 >{{$post->title}}</h1>
                <hr>

                <div class="panel panel-default">
                    <div class="panel-heading"><a href="{{$post->id}}">{{$post->title}}</a></div>

                    <div class="panel-body">
                        {{$post->body}}
                    </div>
                    <a href="/post">back</a>
                    <p align="right">{{$post->published_at->diffForHumans()}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
