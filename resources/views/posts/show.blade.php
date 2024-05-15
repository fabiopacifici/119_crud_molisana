@extends('layouts.app')

@section('content')

<div class="banner bg-dark py-3 text-white">
    <div class="container">
        <h1>Article</h1>
    </div>
</div>

<div class="container py-5">
    <div class="row">
        <div class="col">
            <img src="{{$post->cover_image}}" alt="">
        </div>
        <div class="col">
            <h2>{{$post->title}}</h2>
            <p>{{$post->body}}</p>

        </div>
    </div>
</div>


@endsection